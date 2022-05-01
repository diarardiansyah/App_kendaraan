<?php

class Pabrikan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pabrikan_model');
    }

    public function index()
    {
        $data['judul'] = 'Halaman data pabrikan';
        $data['pabrikan'] = $this->Pabrikan_model->getAllDataPabrikan();
        $this->load->view('templates/header', $data);
        $this->load->view('pabrikan/index');
        $this->load->view('templates/footer');
    }
}