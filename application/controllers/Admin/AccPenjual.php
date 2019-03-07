<?php

Class AccPenjual extends CI_Controller {

    function __construct() {
        parent::__construct();
        chek_seesion();
        $this->load->Model('Model_penjual');
    }

    function index() {
          $data['penjual'] = $this->db->get_where('penjual', array('status' => 2))->result();
        $this->template->load('admin/template', 'Admin/data_penjual/acclist', $data);
        //$this->load->view('Penjual/template');
    }


       function aprove() {
        $id = $this->uri->segment(4);
        $data = $this->db->get_where('penjual', array('id_penjual' => $id))->row_array();
        $data = array(
                'status' => 1,
            );
        $this->db->where('id_penjual', $id);
        $this->db->set($data);
        $this->db->update('penjual');
        $this->session->set_flashdata('hapus', 'Akun penjual telah disetujui');
        redirect('Admin/DataPenjual');
    }

     function buka_pesan() {
        
        $id = $this->uri->segment(4);
        $data = $this->db->get_where('order', array('id_order' => $id))->row_array();
        $data = array(
                'status_pesan' => 0,
            );
        $this->db->where('id', $id);
        $this->db->set($data);
        $this->db->update('order');
        redirect('Informasi');
    }

 function buka_transaksi() {
        
        $id = $this->uri->segment(4);
        $data = $this->db->get_where('order', array('id_order' => $id))->row_array();
        $data = array(
                'status' => 0,
            );
        $this->db->where('id', $id);
        $this->db->set($data);
        $this->db->update('order');
        redirect('Status_pembeli');
    }

      function aktif() {
        $id = $this->uri->segment(4);
        $data = $this->db->get_where('penjual', array('id_penjual' => $id))->row_array();
        $data = array(
                'status' => 1,
            );
        $this->db->where('id_penjual', $id);
        $this->db->set($data);
        $this->db->update('penjual');
        $this->session->set_flashdata('hapus', 'Sukses mengaktifkan akun');
        redirect('Admin/DataPenjual');
    }

    function add() {
        if (isset($_POST['submit'])) {
            $foto = $this->upload();
            if ($foto == FALSE) {
                $this->session->set_flashdata('gagal', 'gagal menambah padi foto tidak boleh kosong');
                redirect('Admin/DataPenjual');
            } else {
                if ($this->input->post('token') == $this->session->userdata('token')) {
                    $this->Model_padi->add($foto);
                    $this->session->set_flashdata('berhasil', 'Sukses menambah padi');
                    redirect('Admin/DataPenjual');
                }
            }
        } else {
            $data['token'] = token();
            $this->template->load('Admin/template', 'Admin/data_penjual/add', $data);
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $foto = $this->upload();
            $this->Model_padi->edit($foto);
            $this->session->set_flashdata('edit', 'Sukses merubah padi');
            redirect('Admin/DataPenjual');
        } else {
            $id_padi = $this->uri->segment(4);
            $data['padi'] = $this->db->get_where('padi', array('id_padi' => $id_padi))->row_Array();
            $this->template->load('Penjual/template', 'Penjual/padi/edit', $data);
        }
    }

    function hapus() {
        $id = $this->uri->segment(4);
        $data = $this->db->get_where('penjual', array('id_penjual' => $id))->row_array();
        unlink('uploads/penjual/'.$data['foto']);
        $this->db->where('id_penjual', $id);
        $this->db->delete('penjual');
        $this->session->set_flashdata('hapus', 'Permintaan Ditolak');
        redirect('Admin/DataPenjual');
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
