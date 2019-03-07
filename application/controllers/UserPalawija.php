<?php

Class UserPalawija extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_produk');
        // $this->load->Model('MPembeli');

        $this->load->library('pagination');
    }

    function index() {
        $config['base_url'] = site_url('UserPalawija/index');
        $config['total_rows'] = $this->Model_produk->br()->num_rows();
        $config['per_page'] = 9;
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';
        $config['full_tag_open'] = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav></div>';
        $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close'] = '</span></li>';
        $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only"></span></span></li>';
        $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close'] = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close'] = '</span>Next</li>';
        $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close'] = '</span></li>';
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['pagination'] = $this->pagination->create_links();
        

        $data['produk'] = $this->Model_produk->join_br($config["per_page"], $data['page'])->result();
        $id = $this->session->userdata('id_order');
        $data['order'] = $this->db->get_where('order', array('id_order' => $id))->result();
        $data2['pembeli'] = $this->db->get('pembeli')->result();
        $data['produk'] = $this->db->get_where('produk', array('jenis' => 'palawija', 'status' => 1))->result();
        $this->template->load('Penjual/template','userpalawija', $data);
    }

    function pesan() {
        if (isset($_POST['submit'])) {

           

           
                $nama = $this->input->post('nama');
                $email = $this->input->post('email');
                $no_telpon = $this->input->post('no_telpon');
                $alamat = $this->input->post('alamat');
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
            


            // $insert = $this->MPembeli->create('pembeli',$data1);
            // $insert1 = $this->MPembeli->create('order',$data);
            //  $insert = $this->MPembeli->create('pembeli',$data1,'order',$data);

            $this->session->set_flashdata('berhasil', 'Order sukses');
            redirect('Dashboard_pembeli');
            
        } else {
            $id = $this->uri->segment(3);
            $id2 = $this->session->userdata('id_order');
             $data['pembeli'] = $this->db->get('pembeli')->result();
              $data['order'] = $this->db->get_where('order', array('id_order' => $id2))->result();
            $data['produk'] = $this->db->get_where('produk', array('id_produk' => $id))->row_Array();
            $this->template->load('Penjual/template','UserPesan', $data);
        }
    }

}

?>