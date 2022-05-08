<?php

class Kendaraan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
        $this->load->library('form_validation');
        $this->load->model('Kendaraan_model');
        $this->load->model('Jenis_model');
        $this->load->model('Pabrikan_model');
    }

    public function index()
    {
        $data['judul'] = 'Halaman data kendaraan';
        $data['kendaraan'] = $this->Kendaraan_model->getAllDataKendaraan();

        if ( $this->input->post('keyword') ) {

            $data['kendaraan'] = $this->Kendaraan_model->cariKendaraan();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('kendaraan/index');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Halaman tambah data kendaraan';
        $data['jenis'] = $this->Jenis_model->getAllDataJenis();
        $data['pabrikan'] = $this->Pabrikan_model->getAllDataPabrikan();

        $this->form_validation->set_rules('nama_kendaraan', 'Nama Kendaraan', 'required');
        $this->form_validation->set_rules('tahun_kendaraan', 'Tahun Kendaraan', 'required|numeric');
        $this->form_validation->set_rules('warna_kendaraan', 'Warna Kendaraan', 'required');
        $this->form_validation->set_rules('jenis_transmisi', 'Jenis Transmisi', 'required');
        $this->form_validation->set_rules('harga_kendaraan', 'Harga Kendaraan', 'required|numeric');

        if ( $this->form_validation->run() == FALSE ) {

            $this->load->view('templates/header', $data);
            $this->load->view('kendaraan/tambah');
            $this->load->view('templates/footer');

        } else {

            $this->Kendaraan_model->addDataKendaraan();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('kendaraan');

        }
       
    }

    public function hapus($id_kendaraan)
    {
        $this->Kendaraan_model->deleteDataKendaraan($id_kendaraan);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('kendaraan');
    }

    public function ubah($id_kendaraan)
    {
        $data['judul'] = 'Halaman ubah data kendaraan';
        $data['kendaraan'] = $this->Kendaraan_model->getKendaraanById($id_kendaraan);
        $data['jenis'] = $this->Jenis_model->getAllDataJenis();
        $data['pabrikan'] = $this->Pabrikan_model->getAllDataPabrikan();

        $this->form_validation->set_rules('nama_kendaraan', 'Nama Kendaraan', 'required');
        $this->form_validation->set_rules('tahun_kendaraan', 'Tahun Kendaraan', 'required|numeric');
        $this->form_validation->set_rules('warna_kendaraan', 'Warna Kendaraan', 'required');
        $this->form_validation->set_rules('jenis_transmisi', 'Jenis Transmisi', 'required');
        $this->form_validation->set_rules('harga_kendaraan', 'Harga Kendaraan', 'required|numeric');

        if ( $this->form_validation->run() == FALSE ) {
            
            $this->load->view('templates/header', $data);
            $this->load->view('kendaraan/ubah', $data);
            $this->load->view('templates/footer');
        
        } else {

            $this->Kendaraan_model->ubahDataKendaraan();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('kendaraan');
        }
        
    }

    public function detail($id_kendaraan)
    {
        $data['judul'] = 'Halaman detail kendaraan';
        $data['kendaraan'] = $this->Kendaraan_model->getKendaraanById($id_kendaraan);
        $this->load->view('templates/header', $data);
        $this->load->view('kendaraan/detail');
        $this->load->view('templates/footer');
    }

}