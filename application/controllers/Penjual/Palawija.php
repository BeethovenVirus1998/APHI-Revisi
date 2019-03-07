<?php

Class Palawija extends CI_Controller {

    function __construct() {
        parent::__construct();
        chek_seesion();
        $this->load->Model('Model_produk');
    }

    function index() {
        $nama = $this->session->userdata('nama');
        $data['produk'] = $this->db->get_where('produk', array('jenis' => 'palawija', 'seller' => $nama, 'status' => 1))->result();
        $this->template->load('Penjual/template', 'Penjual/palawija/list', $data);
        //$this->load->view('Penjual/template');
    }

    function add() {
        if (isset($_POST['submit'])) {
            $foto = $this->upload();
            if ($foto == FALSE) {
                $this->session->set_flashdata('gagal', 'gagal menambah palawija foto tidak boleh kosong');
                redirect('Penjual/Palawija');
            } else {
                if ($this->input->post('token') == $this->session->userdata('token')) {
                    $this->Model_produk->add($foto);
                    $this->session->set_flashdata('berhasil', 'Permintaan Penjualan Produk berhasil dikirim, silahkan menunggu konfirmasi dari admin');
                    redirect('Penjual/Palawija');
                }
            }
        } else {
            $data['token'] = token();
            $this->load->model('Model_produk');
            $data['produk'] = $this->Model_produk->br()->result();
            $this->template->load('Penjual/template', 'Penjual/palawija/add', $data);
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $foto = $this->upload();
            $this->Model_produk->edit($foto);
            $this->session->set_flashdata('edit', 'Sukses merubah palawija');
            redirect('Penjual/Palawija');
        } else {
            $id_produk = $this->uri->segment(4);
            $data['produk'] = $this->db->get_where('produk', array('id_produk' => $id_produk))->row_Array();
            $this->template->load('Penjual/template', 'Penjual/palawija/edit', $data);
        }
    }

    function hapus() {
        $id = $this->uri->segment(4);
        $data = $this->db->get_where('produk', array('id_produk' => $id))->row_array();
        unlink('uploads/produk/'.$data['foto']);
        $this->db->where('id_produk', $id);
        $this->db->delete('produk');
        $this->session->set_flashdata('hapus', 'Sukses menghapus palawija');
        redirect('Penjual/Palawija');
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
