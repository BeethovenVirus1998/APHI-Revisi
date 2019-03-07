<?php

class Model_order extends CI_Model {

    function br() {
        $this->db->select('*');
        $this->db->from('order');
        $query = $this->db->get();
        return $query;
    }

    function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($data,$id){
		$this->db->where('id',$id_siswa);
		$this->db->update('order',$data);
	}
}