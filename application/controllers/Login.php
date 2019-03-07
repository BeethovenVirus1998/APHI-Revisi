<?php

Class Login extends CI_Controller {

    function index() {
        if (isset($_POST['submit'])) {
            $email = $this->input->post('email');
            $passwod = $this->input->post('password');
            $order = $this->db->get_where('order', array('email' => $email, 'password' => $passwod))->row_array();

            if ($order > 0) {
                $this->session->set_userdata($order);
                $this->session->set_userdata(array('status_login' => 'ok'));
                redirect('Dashboard_pembeli');
            } else {
                $this->load->view('login');
            }
        } else {
            $this->load->view('login');
        }
    }

    function logout() {
        $this->session->sess_destroy();
        chek_seesion_login();
        redirect('Penjual/Auth');
    }

}

?>