<?php

Class Order extends CI_Controller {

    function __construct() {
        parent::__construct();
        chek_seesion();
        $this->load->Model('Model_produk');
        $this->load->Model('Model_order');
    }

    function index() {
        $id = $this->session->userdata('nama');
        $this->db->select('*');
        // $this->db->from('order');
        $this->db->from('produk');
        $this->db->join('order', 'order.id_order=produk.id_produk', 'order.penjual=produk.seller');
        $this->db->where('penjual', $id);
        $data['order'] = $this->db->get()->result();
        $data['penjual'] = $this->db->get('penjual')->result();
        $this->template->load('Penjual/template', 'Penjual/order/list', $data);
        
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $data = [
                'status' => $this->input->post('status'),
                'informasi' => $this->input->post('informasi'),
            ];
            $id = $this->input->post('id');
            $this->db->where('id', $id);
            $this->db->update('order', $data);
            $this->session->set_flashdata('berhasil', 'Sukses merubah status Pemesanan dan menambah informasi');
            redirect('Penjual/order');
        } else {
            $id = $this->uri->segment(4);
            $data['order'] = $this->db->get_where('order', array('id' => $id))->row_Array();
            $this->template->load('Penjual/template', 'Penjual/order/edit', $data);
        }
    }

    function hapus() {
        $id = $this->uri->segment(4);
        $this->db->where('id', $id);
        $this->db->delete('order');
        $this->session->set_flashdata('hapus', 'Sukses menghapus');
        redirect('Penjual/Order');
    }

    function donwload() {
        $this->load->helper('download');
        $id = $this->uri->segment(4);
        $data = $this->db->get_where('order', array('id' => $id))->row_array();
        force_download('uploads/order/'.$data['pembayaran'], NULL);
        redirect('Penjual/Order');
    }

}

?>
