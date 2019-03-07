<?php

Class Info extends CI_Controller {

    function __construct() {
        parent::__construct();
        chek_seesion();
        $this->load->Model('Model_penjual');
    }

    function index() {
        $id = $this->session->userdata('id_penjual');
        $data['penjual'] = $this->db->get_where('penjual', array('id_penjual' => $id))->result();
        $this->template->load('Penjual/template', 'Penjual/info/list', $data);
        //$this->load->view('Penjual/template');
    }

    function add() {
        if (isset($_POST['submit'])) {
                if ($this->input->post('token') == $this->session->userdata('token')) {
                    $this->Model_penjual->add();
                    $this->session->set_flashdata('berhasil', 'Sukses menambah informasi');
                    redirect('Penjual/Info');
                }
            }
        else {
            $data['token'] = token();
            $this->template->load('Penjual/template', 'Penjual/info/add', $data);
        }
    }

     function edit() {
        if (isset($_POST['submit'])) {
            $this->Model_penjual->edit();
            $this->session->set_flashdata('edit', 'Sukses merubah informasi');
            redirect('Penjual/Info');
        } else {
            $id_penjual = $this->uri->segment(4);
            $data['penjual'] = $this->db->get_where('penjual', array('id_penjual' => $id_penjual))->row_Array();
            $this->template->load('Penjual/template', 'Penjual/info/edit', $data);
        }
    }

    function hapus() {
        $id = $this->uri->segment(4);
        $data = $this->db->get_where('produk', array('id_produk' => $id))->row_array();
        unlink('uploads/produk/'.$data['foto']);
        $this->db->where('id_produk', $id);
        $this->db->delete('produk');
        $this->session->set_flashdata('hapus', 'Sukses menghapus padi');
        redirect('Penjual/Padi');
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
