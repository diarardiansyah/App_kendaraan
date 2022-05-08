<?php

class Jenis extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
        $this->load->model('Jenis_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Halaman jenis kendaraan';
        $data['jenis'] = $this->Jenis_model->getAllDataJenis();
        $this->load->view('templates/header', $data);
        $this->load->view('jenis/index');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Halaman add data jenis kendaraan';

        $this->form_validation->set_rules('jenis_kendaraan', 'Jenis Kendaraan', 'required');

        if ( $this->form_validation->run() == FALSE ) {

            $this->load->view('templates/header', $data);
            $this->load->view('jenis/tambah');
            $this->load->view('templates/footer');
        } else {

            $this->Jenis_model->addData();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('jenis');
        }
        
    }

    public function delete($id_jenis_kendaraan)
    {
        $this->Jenis_model->deleteData($id_jenis_kendaraan);
        $this->session->set_flashData('flash', 'Dihapus');
        redirect('jenis');
    }

    public function edit($id_jenis_kendaraan)
    {
        $data['judul'] = 'Halaman ubah data jenis kendaraan';
        $data['jenis'] = $this->Jenis_model->getDataById($id_jenis_kendaraan);

        $this->form_validation->set_rules('jenis_kendaraan', 'Jenis Kendaraan', 'required');

        if ( $this->form_validation->run() == FALSE ) {

            $this->load->view('templates/header', $data);
            $this->load->view('jenis/ubah');
            $this->load->view('templates/footer');
        } else {

            $this->Jenis_model->editData();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('jenis');
        }
        
    }
}