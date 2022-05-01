<?php

class Kendaraan_model extends CI_Model {

    public function getAllDataKendaraan()
    {
        $this->db->select('*');
        $this->db->from('tbl_kendaran');
        $this->db->join('tbl_jenis_kendaraan', 'tbl_jenis_kendaraan.id_jenis_kendaraan=tbl_kendaran.id_jenis_kendaraan');
        $this->db->join('tbl_pabrikan', 'tbl_pabrikan.id_pabrikan_kendaraan=tbl_kendaran.id_pabrikan_kendaraan');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function addDataKendaraan()
    {
        $jenis_kendaraan = $this->input->post('jenis_kendaraan', true);
        $nama_kendaraan = $this->input->post('nama_kendaraan', true);
        $nama_pabrikan = $this->input->post('nama_pabrikan', true);
        $tahun_kendaraan = $this->input->post('tahun_kendaraan', true);
        $warna_kendaraan = $this->input->post('warna_kendaraan', true);
        $jenis_transmisi = $this->input->post('jenis_transmisi', true);
        $harga_kendaraan = $this->input->post('harga_kendaraan', true);

        $relasi = array('id_jenis_kendaraan' => $jenis_kendaraan, 
                        'nama_kendaraan' => $nama_kendaraan,
                        'id_pabrikan_kendaraan' => $nama_pabrikan,
                        'tahun_kendaraan' => $tahun_kendaraan,
                        'warna_kendaraan' => $warna_kendaraan,
                        'jenis_transmisi' => $jenis_transmisi,
                        'harga_kendaraan' => $harga_kendaraan );
        
        $data = array_merge($relasi); // untuk menggabungkan 2 buah array bisa digunakan untuk insert data dari table yang berelasi

        $this->db->insert('tbl_kendaran', $data);
    }

    public function deleteDataKendaraan($id_kendaraan)
    {
        $this->db->where('id_kendaraan', $id_kendaraan);
        $this->db->delete('tbl_kendaran');
    }

    public function cariKendaraan()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('jenis_kendaraan', $keyword);
        $this->db->or_like('nama_kendaraan', $keyword);
        $this->db->or_like('nama_pabrikan', $keyword);
        return $this->getAllDataKendaraan();
    }
}