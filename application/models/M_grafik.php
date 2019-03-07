<?php
class M_grafik extends CI_Model{

	function get_data_stok(){
        $query = $this->db->query("SELECT nama_produk,SUM(harga_produk) AS harga_produk FROM produk GROUP BY jenis");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

}