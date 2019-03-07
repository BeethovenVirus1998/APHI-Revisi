<?php

Class Informasi_pembeli extends CI_Controller {

    function __construct() {
        parent::__construct();
        chek_seesion();
        $this->load->Model('Model_pembeli');
    }

    function index() {
       $id2 = $this->session->userdata('nama');
        
        // $this->db->from('palawija');
        // $this->db->join('order', 'order.id_order=palawija.id_palawija');
        // $this->db->where('id', $id);
        $data['pembeli'] = $this->db->get_where('pembeli', array('nama' => $id2))->result();
        $id = $this->session->userdata('id_order');
        $data['order'] = $this->db->get_where('order', array('id_order' => $id))->result();
        $this->template->load('Penjual/template', 'infoPembeli/list', $data);
        //$this->load->view('Penjual/template');
    }


     function edit() {
        if (isset($_POST['submit'])) {
            $this->Model_pembeli->edit();
            $this->session->set_flashdata('edit', 'Sukses merubah informasi');
            redirect('Informasi_pembeli');
        } else {
         $id2 = $this->session->userdata('nama');
         $data['pembeli'] = $this->db->get_where('pembeli', array('nama' => $id2))->result();
         $id = $this->session->userdata('id_order');
         $data['order'] = $this->db->get_where('order', array('id_order' => $id))->result();
            $this->template->load('Penjual/template', 'infoPembeli/edit', $data);
        }
    }

}

?>
