<?php

class Model_register extends CI_Model {

    function br() {
        $this->db->select('*');
        $this->db->from('penjual');
        $query = $this->db->get();
        return $query;
    }

    function join_br($limit, $start) {
        $this->db->select('*');
        $this->db->from('penjual');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query;
    }

    function add($foto) {
        if (!empty($foto)) {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'alamat' => $this->input->post('alamat'),
                'level' => 'penjual',
                'foto_ktp' => $foto
            );
            $this->db->insert('penjual', $data);
        } else {
            $data = array(
                 'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'alamat' => $this->input->post('alamat'),
                'level' => 'penjual'
            );
            $this->db->insert('penjual', $data);
        }
    }

    function edit($foto) {
        if (!empty($foto)) {

            $data = array(
               'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'alamat' => $this->input->post('alamat'),
                'level' => 'penjual',
                'foto_ktp' => $foto
            );
            $id = $this->input->post('id_penjual');
            $hapus = $this->db->get_where('penjual', array('id_penjual' => $id))->row_array();
            unlink('uploads/register/' . $hapus['foto']);
            $this->db->where('id_penjual', $id);
            $this->db->update('penjual', $data);
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'alamat' => $this->input->post('alamat'),
            );
            $id = $this->input->post('id_penjual');
            $this->db->where('id_penjual', $id);
            $this->db->update('penjual', $data);
        }
    }

}
