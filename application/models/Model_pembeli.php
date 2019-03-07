<?php

class Model_Pembeli extends CI_Model {

    function br() {
        $this->db->select('*');
        $this->db->from('pembeli');
        $query = $this->db->get();
        return $query;
    }

    function join_br($limit, $start) {
        $this->db->select('*');
        $this->db->from('pembeli');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query;
    }

    function add($foto) {
        if (!empty($foto)) {
            $data = array(
                'nama_padi' => $this->input->post('nama_padi'),
                'harga_padi' => $this->input->post('harga_padi'),
                'foto' => $foto
            );
            $this->db->insert('padi', $data);
        } else {
            $data = array(
                'nama_padi' => $this->input->post('nama_padi'),
                'harga_padi' => $this->input->post('harga_padi'),
            );
            $this->db->insert('padi', $data);
        }
    }

    function edit() {
    
            $data = array(
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'alamat' => $this->input->post('alamat'),
                'no_telpon' => $this->input->post('no_telpon')
            );
            $id = $this->input->post('id');
            $this->db->where('id', $id);
            $this->db->update('pembeli', $data);
        
    }

}
