<?php

class M_user_pesan extends CI_Model {

    function br() {
        $this->db->select('*');
        $this->db->from('order');
        $query = $this->db->get();
        return $query;
    }

    function join_br($limit, $start) {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->limit($order, $start);
        $query = $this->db->get();
        return $query;
    }

    function add() {
        
             $nama = $this->input->session->userdata('nama');
                $email = $this->input->session->userdata('email');
                $no_telpon = $this->input->session->userdata('no_telpon');
                $alamat = $this->input->session->userdata('alamat');
                $id_order = $this->input->post('id_produk');
                $harga = $this->input->post('total');
                $password = $this->input->post('password');
                $tgl_order = $this->input->post('tgl_order');
                $jenis = $this->input->post('jenis');
                $penjual = $this->input->post('penjual');
            
                 $data = array(
                    'nama'=>$nama,
                    'email'=>$email,
                    'no_telpon'=>$no_telpon,
                    'alamat'=>$alamat,
                    'id_order'=>$id_order,
                    'harga'=>$harga,
                    'password'=>$password,
                    'tgl_order'=>$tgl_order,
                    'jenis' => 'padi',
                    'penjual' =>$penjual,
                    );

                   
           
          

            $this->db->insert('order',$data);
            

        
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
