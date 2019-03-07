<?php

class Model_Penjual extends CI_Model {

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

    function add() {
            $data = array(
                'bank' => $this->input->post('bank'),
                'no_rek' => $this->input->post('no_rek'),
            );
            $this->db->insert('penjual', $data);
    }

  
  function edit() {
        
            $data = array(
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'bank' => $this->input->post('bank'),
                'no_rek' => $this->input->post('no_rek'),
                'atas_nama' => $this->input->post('atas_nama'),
            );
            $id = $this->input->post('id_penjual');
            $this->db->where('id_penjual', $id);
            $this->db->update('penjual', $data);
        
    }
}
