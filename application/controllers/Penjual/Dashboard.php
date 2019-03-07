<?php
Class Dashboard extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('m_grafik');
        chek_seesion();
    }
    
    function index(){
    	$nama = $this->session->userdata('nama');
    	$data['produk'] = $this->m_grafik->get_data_stok();
    	$data['produk'] = $this->db->get_where('produk', array('jenis' => 'buah'))->result();
    	$data['produk'] = $this->db->get_where('produk', array('seller' => $nama))->result();
        $this->template->load('Penjual/template','Penjual/dashboard', $data);
        //$this->load->view('Penjual/template');
    }

    
}
?>
