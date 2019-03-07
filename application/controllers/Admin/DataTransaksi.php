<?php

Class DataTransaksi extends CI_Controller {

    function __construct() {
        parent::__construct();
        chek_seesion();
        $this->load->Model('Model_order');
    }

    function index() {
       $this->db->select('*');
        // $this->db->from('order');
        $this->db->from('produk');
        $this->db->join('order', 'order.id_order=produk.id_produk');
        // $this->db->where('id');
        // $data['palawija'] = $this->db->get()->result();
        $data['order'] = $this->db->get()->result();
        $this->template->load('admin/template', 'Admin/data_transaksi/list', $data);
        //$this->load->view('Pembeli/template');
    } 

}

?>
