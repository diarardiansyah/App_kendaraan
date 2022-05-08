<?php

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
    }

    public function index($nama = 'user')
    {
        $data['judul'] = 'Halaman home';
        $data['nama'] = $nama;
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $nama);
        $this->load->view('templates/footer');
    }
}