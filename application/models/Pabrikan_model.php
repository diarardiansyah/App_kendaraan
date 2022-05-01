<?php

class Pabrikan_model extends CI_Model {

    public function getAllDataPabrikan()
    {
        $query = $this->db->get('tbl_pabrikan');
        return $query->result_array();
    }
}