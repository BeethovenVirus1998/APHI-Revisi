<?php

class Model_produk extends CI_Model {

    function br() {
        $this->db->select('*');
        $this->db->from('produk');
        $query = $this->db->get();
        return $query;
    }

    function join_br($limit, $start) {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query;
    }

    function add($foto) {
        if (!empty($foto)) {
            $data = array(
                'nama_produk' => $this->input->post('nama_produk'),
                'jenis' => $this->input->post('jenis'),
                'seller' => $this->session->userdata('nama'),
                'harga_produk' => $this->input->post('harga_produk'),
                'status' => 0,
                'foto' => $foto
            );
            $this->db->insert('produk', $data);
        } else {
            $data = array(
                'nama_produk' => $this->input->post('nama_produk'),
                'harga_produk' => $this->input->post('harga_produk'),
                'status' => 0,
            );
            $this->db->insert('produk', $data);
        }
    }

    function edit($foto) {
        if (!empty($foto)) {

            $data = array(
                'nama_produk' => $this->input->post('nama_produk'),
                'harga_produk' => $this->input->post('harga_produk'),
                'foto' => $foto
            );
            $id = $this->input->post('id_produk');
            $hapus = $this->db->get_where('produk', array('id_produk' => $id))->row_array();
            unlink('uploads/produk/' . $hapus['foto']);
            $this->db->where('id_produk', $id);
            $this->db->update('produk', $data);
        } else {
            $data = array(
                'nama_produk' => $this->input->post('nama_produk'),
                'harga_produk' => $this->input->post('harga_produk'),
            );
            $id = $this->input->post('id_produk');
            $this->db->where('id_produk', $id);
            $this->db->update('produk', $data);
        }
    }

}
