<?php

Class Status extends CI_Controller {

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
        $this->template->load('Penjual/template', 'Penjual/order/list', $data);
        //$this->load->view('Penjual/template');
    }

    function add() {
        if (isset($_POST['submit'])) {
            $pembayaran = $this->upload();
            $data = [
                'pembayaran' => $pembayaran,
                'status' => 0
            ];
            $id = $this->session->userdata('id');
            $this->db->where('id', $id);
            $this->db->update('order', $data);
            $this->session->set_flashdata('berhasil', 'Sukses upload bukti pembayaran, pembayaran akan di proses oleh Penjual');
            redirect('Status_pembeli');
        } else {
            $ids = $this->session->userdata('id_order');
            $datas['order'] = $this->db->get_where('order', array('id_order' => $ids))->result();
            $this->template->load('Penjual/template', 'Penjual/status_order/add', $datas);
        }
    }

    function hapus() {
        $id = $this->uri->segment(4);
        $this->db->where('id', $id);
        $this->db->delete('order');
        redirect('Status_pembeli');
    }
    
     function upload() {
        $config['upload_path'] = './uploads/order';
        $config['allowed_types'] = 'gif|png|jpg';
        $config['max_size'] = 10000;
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        $uploads = $this->upload->data();
        return $uploads['file_name'];
    }

}

?>
