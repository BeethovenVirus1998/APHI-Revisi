<?php

Class Auth extends CI_Controller {

    function index() {
        if (isset($_POST['submit'])) {
            $email = $this->input->post('email');
            $passwod = $this->input->post('password');
            $status = 1;
            $status2 = 0;
            $data = $this->db->get_where('penjual', array('email' => $email, 'password' => $passwod, 'status' => $status))->row_array();
            if ($data > 0) {
                $this->session->set_userdata($data);
                $this->session->set_userdata(array('status_login' => 'ok'));
                redirect('Penjual/Dashboard');
            } else {
                chek_seesion_login($status2);
                $this->session->set_flashdata('edit', 'Maaf akun anda sudah dinonaktifkan oleh Admin');
                $this->load->view('Penjual/login');
            }
        } else {
            $this->load->view('Penjual/login');
        }
    }

    function logout() {
        $this->session->sess_destroy();
        //chek_seesion_login();
        redirect('Welcome');
    }

}

?>