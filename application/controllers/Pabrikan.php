<?php

class Pabrikan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
        $this->load->model('Pabrikan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Halaman data pabrikan';
        $data['pabrikan'] = $this->Pabrikan_model->getAllDataPabrikan();
        $this->load->view('templates/header', $data);
        $this->load->view('pabrikan/index');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Halaman tambah data pabrikan';

        $this->form_validation->set_rules('nama_pabrikan', 'Nama Pabrikan', 'required');

        if ( $this->form_validation->run() == FALSE ) {

            $this->load->view('templates/header', $data);
            $this->load->view('pabrikan/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Pabrikan_model->addDataPabrikan();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('pabrikan');
        }    
    }

    public function ubah($id_pabrikan_kendaraan)
    {
        $data['judul'] = 'Halaman edit data pabrikan';
        $data['pabrikan'] = $this->Pabrikan_model->getDataPabrikanById($id_pabrikan_kendaraan);

        $this->form_validation->set_rules('nama_pabrikan', 'Nama Pabrikan', 'required');

        if ( $this->form_validation->run() == FALSE ) {
            
            $this->load->view('templates/header', $data);
            $this->load->view('pabrikan/ubah');
            $this->load->view('templates/footer');

        } else {

            $this->Pabrikan_model->ubahDataPabrikan();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('pabrikan');
        }
        
    }
}