<?php
Class Dashboard_pembeli extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        chek_seesion();
        $this->load->Model('Model_order');
    }
    
    function index(){
    	$id = $this->session->userdata('id_order');
    	$data['order'] = $this->db->get_where('order', array('id_order' => $id))->result();
    	$data['penjual'] = $this->db->get('penjual')->result();
        $this->template->load('Penjual/template','Dashboard', $data);
        //$this->load->view('Penjual/template');
    }
    
}
?>
