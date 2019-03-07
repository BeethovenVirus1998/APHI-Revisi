<?php

Class DataPembeli extends CI_Controller {

    function __construct() {
        parent::__construct();
        chek_seesion();
        $this->load->Model('Model_pembeli');
    }

    function index() {
        $data['pembeli'] = $this->db->get('pembeli')->result();
        $this->template->load('admin/template', 'Admin/data_pembeli/list', $data);
        //$this->load->view('Pembeli/template');
    }

    function add() {
        if (isset($_POST['submit'])) {
            $foto = $this->upload();
            if ($foto == FALSE) {
                $this->session->set_flashdata('gagal', 'gagal menambah padi foto tidak boleh kosong');
                redirect('Admin/DataPembeli');
            } else {
                if ($this->input->post('token') == $this->session->userdata('token')) {
                    $this->Model_padi->add($foto);
                    $this->session->set_flashdata('berhasil', 'Sukses menambah padi');
                    redirect('Admin/DataPembeli');
                }
            }
        } else {
            $data['token'] = token();
            $this->template->load('Admin/template', 'Admin/data_pembeli/add', $data);
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $foto = $this->upload();
            $this->Model_padi->edit($foto);
            $this->session->set_flashdata('edit', 'Sukses merubah padi');
            redirect('Admin/DataPembeli');
        } else {
            $id_padi = $this->uri->segment(4);
            $data['padi'] = $this->db->get_where('padi', array('id_padi' => $id_padi))->row_Array();
            $this->template->load('Pembeli/template', 'Pembeli/padi/edit', $data);
        }
    }

    function hapus() {
        $id = $this->uri->segment(4);
        $data = $this->db->get_where('pembeli', array('id' => $id))->row_array();
        $this->db->where('id', $id);
        $this->db->delete('pembeli');
        $this->session->set_flashdata('hapus', 'Sukses menghapus data');
        redirect('Admin/DataPembeli');
    }

    function upload() {
        $config['upload_path'] = './uploads/padi';
        $config['allowed_types'] = 'gif|png|jpg';
        $config['max_size'] = 10000;
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        $uploads = $this->upload->data();
        return $uploads['file_name'];
    }

}

?>
