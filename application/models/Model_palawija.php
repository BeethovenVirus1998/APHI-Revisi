<?php

class Model_palawija extends CI_Model {

    function br() {
        $this->db->select('*');
        $this->db->from('palawija');
        $query = $this->db->get();
        return $query;
    }

    function join_br($limit, $start) {
        $this->db->select('*');
        $this->db->from('palawija');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query;
    }

    function add($foto) {
        if (!empty($foto)) {
            $data = array(
                'nama_palawija' => $this->input->post('nama_palawija'),
                'harga_palawija' => $this->input->post('harga_palawija'),
                'foto' => $foto
            );
            $this->db->insert('palawija', $data);
        } else {
            $data = array(
                'nama_palawija' => $this->input->post('nama_palawija'),
                'harga_palawija' => $this->input->post('harga_palawija'),
            );
            $this->db->insert('palawija', $data);
        }
    }

    function edit($foto) {
        if (!empty($foto)) {
            $data = array(
                'nama_palawija' => $this->input->post('nama_palawija'),
                'harga_palawija' => $this->input->post('harga_palawija'),
                'foto' => $foto
            );
            $id = $this->input->post('id_palawija');
            $hapus = $this->db->get_where('palawija', array('id_palawija' => $id))->row_array();
            unlink('uploads/palawija/' . $hapus['foto']);
            $this->db->where('id_palawija', $id);
            $this->db->update('palawija', $data);
        } else {
            $data = array(
                'nama_palawija' => $this->input->post('nama_palawija'),
                'harga_palawija' => $this->input->post('harga_palawija'),
            );
            $id = $this->input->post('id_palawija');
            $this->db->where('id_palawija', $id);
            $this->db->update('palawija', $data);
        }
    }

}
