<?php

Class Register extends CI_Controller {

    function __construct() {
        parent::__construct();
        chek_seesion();
        $this->load->Model('Model_register');
    }

    function index() {
        $data['pembeli'] = $this->db->get('pembeli')->result();
        $this->template->load('Penjual/template', 'register', $data);
        //$this->load->view('Penjual/template');
    }

    function add() {
        if (isset($_POST['submit'])) {
            $foto = $this->upload();
            if ($foto == FALSE) {
                $this->session->set_flashdata('gagal', 'gagal register, foto tidak boleh kosong');
                redirect('Penjual/Register');
            } else {
                if ($this->input->post('token') == $this->session->userdata('token')) {
                    $this->Model_register->add($foto);
                    $this->session->set_flashdata('berhasil', 'Sukses register');
                    redirect('Penjual/Register');
                }
            }
        } else {
            $data['token'] = token();
            $this->template->load('Penjual/template', 'register', $data);
        }
    }

    // function edit() {
    //     if (isset($_POST['submit'])) {
    //         $foto = $this->upload();
    //         $this->Model_padi->edit($foto);
    //         $this->session->set_flashdata('edit', 'Sukses merubah padi');
    //         redirect('Penjual/Padi');
    //     } else {
    //         $id_padi = $this->uri->segment(4);
    //         $data['padi'] = $this->db->get_where('padi', array('id_padi' => $id_padi))->row_Array();
    //         $this->template->load('Penjual/template', 'Penjual/padi/edit', $data);
    //     }
    // }

    // function hapus() {
    //     $id = $this->uri->segment(4);
    //     $data = $this->db->get_where('padi', array('id_padi' => $id))->row_array();
    //     unlink('uploads/padi/'.$data['foto']);
    //     $this->db->where('id_padi', $id);
    //     $this->db->delete('padi');
    //     $this->session->set_flashdata('hapus', 'Sukses menghapus padi');
    //     redirect('Penjual/Padi');
    // }

    function upload() {
        $config['upload_path'] = './uploads/register';
        $config['allowed_types'] = 'gif|png|jpg';
        $config['max_size'] = 10000;
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        $uploads = $this->upload->data();
        return $uploads['file_name'];
    }

}

?>
