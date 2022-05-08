<?php

class Register_model extends CI_Model {

    public function tambahUser()
    {
        $email = $this->input->post('email', true);
        $nama_user = $this->input->post('nama_user', true);
        $password = $this->input->post('password', true);
    
        $data = [
            'email' => $email, 
            'nama_user' => $nama_user,   
            'password' => md5($password)
        ];

        $this->db->insert('tbl_user', $data);
    }

    public function getUser($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
}