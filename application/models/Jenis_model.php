<?php

class Jenis_model extends CI_Model {

    public function getAllDataJenis()
    {
        $query = $this->db->get('tbl_jenis_kendaraan');
        return $query->result_array();
    }
}