<?php

class Jenis extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Jenis_model');
    }

    public function index()
    {
        $data['judul'] = 'Halaman jenis kendaraan';
        $data['jenis'] = $this->Jenis_model->getAllDataJenis();
        $this->load->view('templates/header', $data);
        $this->load->view('jenis/index');
        $this->load->view('templates/footer');
    }
}