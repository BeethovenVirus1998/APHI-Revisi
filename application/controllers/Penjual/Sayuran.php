<?php

Class Sayuran extends CI_Controller {

    function __construct() {
        parent::__construct();
        chek_seesion();
        $this->load->Model('Model_produk');
    }

    function index() {
       $nama = $this->session->userdata('nama');
        $data['produk'] = $this->db->get_where('produk', array('jenis' => 'sayuran', 'seller' => $nama, 'status' => 1))->result();
        $this->template->load('Penjual/template', 'Penjual/sayuran/list', $data);
        //$this->load->view('Penjual/template');
    }

    function add() {
        if (isset($_POST['submit'])) {
            $foto = $this->upload();
            if ($foto == FALSE) {
                $this->session->set_flashdata('gagal', 'gagal menambah sayuran foto tidak boleh kosong');
                redirect('Penjual/Sayuran');
            } else {
                if ($this->input->post('token') == $this->session->userdata('token')) {
                    $this->Model_produk->add($foto);
                    $this->session->set_flashdata('berhasil', 'Permintaan Penjualan Produk berhasil dikirim, silahkan menunggu konfirmasi dari admin');
                    redirect('Penjual/Sayuran');
                }
            }
        } else {
            $data['token'] = token();
            $this->template->load('Penjual/template', 'Penjual/sayuran/add', $data);
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $foto = $this->upload();
            $this->Model_produk->edit($foto);
            $this->session->set_flashdata('edit', 'Sukses merubah sayuran');
            redirect('Penjual/Sayuran');
        } else {
            $id_sayuran = $this->uri->segment(4);
            $data['produk'] = $this->db->get_where('produk', array('id_produk' => $id_sayuran))->row_Array();
            $this->template->load('Penjual/template', 'Penjual/sayuran/edit', $data);
        }
    }

    function hapus() {
        $id = $this->uri->segment(4);
        $data = $this->db->get_where('produk', array('id_produk' => $id))->row_array();
        unlink('uploads/produk/'.$data['foto']);
        $this->db->where('id_produk', $id);
        $this->db->delete('produk');
        $this->session->set_flashdata('hapus', 'Sukses menghapus sayuran');
        redirect('Penjual/Sayuran');
    }

    function upload() {
        $config['upload_path'] = './uploads/produk';
        $config['allowed_types'] = 'gif|png|jpg';
        $config['max_size'] = 10000;
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        $uploads = $this->upload->data();
        return $uploads['file_name'];
    }

}

?>
