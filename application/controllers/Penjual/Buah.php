<?php

Class Buah extends CI_Controller {

    function __construct() {
        parent::__construct();
        chek_seesion();
        $this->load->Model('Model_produk');
    }

    function index() {
        $nama = $this->session->userdata('nama');
        $data['produk'] = $this->db->get_where('produk', array('jenis' => 'buah', 'seller' => $nama, 'status' => 1))->result();
        $this->template->load('Penjual/template', 'Penjual/buah/list', $data);
        //$this->load->view('Penjual/template');
    }

    function add() {
        if (isset($_POST['submit'])) {
            $foto = $this->upload();
            if ($foto == FALSE) {
                $this->session->set_flashdata('gagal', 'gagal menambah buah foto tidak boleh kosong');
                redirect('Penjual/Buah');
            } else {
                if ($this->input->post('token') == $this->session->userdata('token')) {
                    $this->Model_produk->add($foto);
                    $this->session->set_flashdata('berhasil', 'Produk berhasil ditambahkan, silahkan menunggu konfirmasi dari admin');
                    redirect('Penjual/Buah');
                }
            }
        } else {
            $data['token'] = token();
            $this->template->load('Penjual/template', 'Penjual/buah/add', $data);
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $foto = $this->upload();
            $this->Model_produk->edit($foto);
            $this->session->set_flashdata('edit', 'Sukses merubah buah');
            redirect('Penjual/Buah');
        } else {
            $id_buah = $this->uri->segment(4);
            $data['produk'] = $this->db->get_where('produk', array('id_produk' => $id_buah))->row_Array();
            $this->template->load('Penjual/template', 'Penjual/buah/edit', $data);
        }
    }

    function hapus() {
        $id = $this->uri->segment(4);
        $data = $this->db->get_where('produk', array('id_produk' => $id))->row_array();
        unlink('uploads/produk/'.$data['foto']);
        $this->db->where('id_produk', $id);
        $this->db->delete('produk');
        $this->session->set_flashdata('hapus', 'Sukses menghapus buah');
        redirect('Penjual/Buah');
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
