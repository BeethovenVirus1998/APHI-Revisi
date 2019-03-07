<?php

Class InfoTransfer extends CI_Controller {

    function __construct() {
        parent::__construct();
        chek_seesion();
        $this->load->Model('Model_penjual');
    }

     function index() {
        $id2 = $this->session->userdata('penjual');
        $data['penjual'] = $this->db->get_where('penjual', array('nama' => $id2))->result();
        $id = $this->session->userdata('id_order');
        $data['order'] = $this->db->get_where('order', array('id_order' => $id))->result();
        $this->template->load('Penjual/template', 'Penjual/status_order/detail', $data);
    }    

}

?>
