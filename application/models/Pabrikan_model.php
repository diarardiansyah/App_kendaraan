<?php

class Pabrikan_model extends CI_Model {

    public function getAllDataPabrikan()
    {
        $query = $this->db->get('tbl_pabrikan');
        return $query->result_array();
    }

    public function addDataPabrikan()
    {
        $data = [
            'nama_pabrikan' => $this->input->post('nama_pabrikan', true)
        ];

        $this->db->insert('tbl_pabrikan', $data);
    }

    public function getDataPabrikanById($id_pabrikan_kendaraan)
    {
        return $this->db->get_where('tbl_pabrikan', ['id_pabrikan_kendaraan' => $id_pabrikan_kendaraan])->row_array();
    }

    public function ubahDataPabrikan()
    {
        $data = [
            'nama_pabrikan' => $this->input->post('nama_pabrikan', true)
        ];

        $this->db->where('id_pabrikan_kendaraan', $this->input->post('id_pabrikan_kendaraan'));
        $this->db->update('tbl_pabrikan', $data);
    }
}