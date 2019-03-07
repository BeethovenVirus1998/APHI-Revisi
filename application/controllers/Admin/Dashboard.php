<?php
Class Dashboard extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        chek_seesion();
         $this->load->Model('Model_penjual');
    }
    
    function index(){
    	$data['penjual'] = $this->db->get_where('penjual', array('status' => 2))->result();
        $this->template->load('admin/template','Admin/Dashboard');
        //$this->load->view('Penjual/template');
    }
    
}
?>
