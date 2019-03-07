<?php

Class BePenjual extends CI_Controller {

    function __construct() {
        parent::__construct();
        chek_seesion();
        $this->load->Model('Model_pembeli');
        $this->load->Model('Model_Bepenjual');
    }

    function index() {
        $id2 = $this->session->userdata('nama');
        $data['pembeli'] = $this->db->get_where('pembeli', array('nama' => $id2))->result();
        $id = $this->session->userdata('id_order');
        $data['order'] = $this->db->get_where('order', array('id_order' => $id))->result();
        $this->template->load('Penjual/template', 'bepenjual/list', $data);
    }    

    function add() {
        if (isset($_POST['submit'])) {
            $foto = $this->upload();
            if ($foto == FALSE) {
                $this->session->set_flashdata('gagal', 'isi informasi dengan lengkap');
                redirect('BePenjual');
            } else {
                if ($this->input->post('token') == $this->session->userdata('token')) {
                    $this->Model_Bepenjual->add($foto);
                    $this->session->set_flashdata('berhasil', 'Silahkan tunggu konfirmasi dari admin');
                    redirect('BePenjual');
                }
            }
        } else {
            
            $id = $this->session->userdata('id_order');
            $id2 = $this->session->userdata('id');

             $data      = array(
                'token' => token(),
                'pembeli' => $this->db->get_where('pembeli', array('id' => $id2))->result(),
            
                'order' => $this->db->get_where('order', array('id_order' => $id))->result()
            );
            $this->template->load('Penjual/template', 'bepenjual/add', $data);
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $foto = $this->upload();
            $this->Model_Bepenjual->edit($foto);
            $this->session->set_flashdata('edit', 'Sukses merubah informasi');
            redirect('BePenjual');
        } else {
            $id = $this->uri->segment(4);
            $data['pembeli'] = $this->db->get_where('pembeli', array('id' => $id))->row_Array();
            $this->template->load('Penjual/template', 'bepenjual', $data);
        }
    }

    function hapus() {
        $id = $this->uri->segment(4);
        $data = $this->db->get_where('pembeli', array('id' => $id))->row_array();
        unlink('uploads/penjual/'.$data['foto']);
        $this->db->where('id', $id);
        $this->db->delete('pembeli');
        $this->session->set_flashdata('hapus', 'Sukses menghapus data');
        redirect('BePenjual');
    }

    function upload() {
        $config['upload_path'] = './uploads/penjual';
        $config['allowed_types'] = 'gif|png|jpg';
        $config['max_size'] = 10000;
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        $uploads = $this->upload->data();
        return $uploads['file_name'];
    }

}

?>
