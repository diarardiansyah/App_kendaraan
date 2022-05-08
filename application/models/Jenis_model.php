<?php

class Jenis_model extends CI_Model {

    public function getAllDataJenis()
    {
        $query = $this->db->get('tbl_jenis_kendaraan');
        return $query->result_array();
    }

    public function addData()
    {
        $data = [
            'jenis_kendaraan' => $this->input->post('jenis_kendaraan', true)
        ];  

        $this->db->insert('tbl_jenis_kendaraan', $data);
    }

    public function deleteData($id_jenis_kendaraan)
    {
        $this->db->where('id_jenis_kendaraan', $id_jenis_kendaraan);
        $this->db->delete('tbl_jenis_kendaraan');
    }

    public function getDataById($id_jenis_kendaraan)
    {
        return $this->db->get_where('tbl_jenis_kendaraan', ['id_jenis_kendaraan' => $id_jenis_kendaraan])->row_array();
    }

    public function editData()
    {
        $data = [
            'jenis_kendaraan' => $this->input->post('jenis_kendaraan', true)
        ];

        $this->db->where('id_jenis_kendaraan', $this->input->post('id_jenis_kendaraan'));
        $this->db->update('tbl_jenis_kendaraan', $data);
    }
}