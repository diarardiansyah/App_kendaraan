<?php

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Register_model');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Login';

        $this->load->view('login/index', $data);

    }

    public function login_process()
    {
    
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $where = array(
            'email' => $email,
            'password' => md5($password)
            );

        $cek = $this->Register_model->getUser('tbl_user', $where)->num_rows();

        if ( $cek > 0 ) {

            $data_session = [
                'email' => $email,
                'status' => 'login'
            ];

            $this->session->set_userdata($data_session);

            redirect(base_url('home'));

        } else {

            echo "
                    <script>
                        alert('Username & Password Salah !!');

                    </script>
                ";
            
        }
    }

    public function logout_process()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}