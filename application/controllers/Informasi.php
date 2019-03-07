<?php

Class Informasi extends CI_Controller {

    function __construct() {
        parent::__construct();
        chek_seesion();
    }

    function index() {
        $id = $this->session->userdata('id');
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('order', 'order.id_order=produk.id_produk');
        $this->db->where('id', $id);
        // $this->db->from('palawija');
        // $this->db->join('order', 'order.id_order=palawija.id_palawija');
        // $this->db->where('id', $id);
        $data['order'] = $this->db->get()->result();
        $this->template->load('Penjual/template', 'Penjual/informasi', $data);
        //$this->load->view('Penjual/template');
    }

    function buka_pesan() {
        $id = $this->session->userdata('id');
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('order', 'order.id_order=produk.id_produk');
        $this->db->where('id', $id);
        // $this->db->from('palawija');
        // $this->db->join('order', 'order.id_order=palawija.id_palawija');
        // $this->db->where('id', $id);
        $data['order'] = $this->db->get()->result();
        $this->template->load('Penjual/template', 'Penjual/buka_pesan', $data);
        //$this->load->view('Penjual/template');
    }

    function buka_transaksi() {
        $id = $this->session->userdata('id');
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('order', 'order.id_order=produk.id_produk');
        $this->db->where('id', $id);
        // $this->db->from('palawija');
        // $this->db->join('order', 'order.id_order=palawija.id_palawija');
        // $this->db->where('id', $id);
        $data['order'] = $this->db->get()->result();
        $this->template->load('Penjual/template', 'Penjual/status_order/buka_transaksi', $data);
        //$this->load->view('Penjual/template');
    }

}

?>
