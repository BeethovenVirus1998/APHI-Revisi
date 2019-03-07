<?php

class Model_Bepenjual extends CI_Model {

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
                'nama' => $this->session->userdata('nama'),
                'email' => $this->session->userdata('email'),
                'password' => $this->session->userdata('password'),
                'alamat' => $this->session->userdata('alamat'),
                'level' => 'penjual',
                'status' => 2, 
                'foto_ktp' => $foto
            );
            $this->db->insert('penjual', $data);
        } else {
            $data = array(
               'username' => $this->session->userdata('nama'),
                'password' => $this->session->userdata('password'),
                'email' => $this->session->userdata('email'),
                'alamat' => $this->session->userdata('alamat'),
                'level' => 'penjual',
                'status' => 0 
            );
            $this->db->insert('penjual', $data);
        }
    }

    function edit($foto) {
        if (!empty($foto)) {

            $data = array(
                'username' => $this->session->userdata('nama'),
                'password' => $this->session->userdata('password'),
                'alamat' => $this->session->userdata('alamat'),
                'level' => 'penjual',
                'status' => 0, 
                'foto_ktp' => $foto
            );
            $id = $this->input->post('id_penjual');
            $hapus = $this->db->get_where('penjual', array('id_penjual' => $id))->row_array();
            unlink('uploads/penjual/' . $hapus['foto_ktp']);
            $this->db->where('id_penjual', $id);
            $this->db->update('penjual', $data);
        } else {
            $data = array(
                'username' => $this->session->userdata('nama'),
                'password' => $this->session->userdata('password'),
                'alamat' => $this->session->userdata('alamat'),
                'level' => 'penjual',
                'status' => 0 
            );
            $id = $this->input->post('id_penjual');
            $this->db->where('id_penjual', $id);
            $this->db->update('penjual', $data);
        }
    }

}
