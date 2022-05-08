<?php

class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Register_model');
    }

    public function index()
    {
        $data['judul'] = 'Halaman register';

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ( $this->form_validation->run() == FALSE ) {
            
            $this->load->view('register/index', $data);
        
        } else {

            $this->Register_model->tambahUser();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('register');
        }
        
       
    }
}