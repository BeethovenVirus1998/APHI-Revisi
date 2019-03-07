
<?php

class Grafik extends CI_Controller{

	function __construct(){

		parent::__construct();

		$this->load->model('m_grafik');

	}

	function index(){

		$data['produk']=$this->m_grafik->get_data_stok();

		$this->load->view('penjual/dashboard',$data);

	}

}