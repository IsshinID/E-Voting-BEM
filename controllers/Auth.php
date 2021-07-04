<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

    }

    public function index() 
    {
        if ($this->session->userdata('email')){
            redirect('admin');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
        $data['title'] = 'Login Page';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
        }
        else {
            // validasi sukses
            $this->_login();
        }
    }
    private function _login()
    {
        // ambil yang sudah lolos
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        // query ke db
        $admin = $this->db->get_where('admin', ['email' => $email])->row_array();

        // cek data
        if ($admin)
        {
            if (password_verify($password, $admin['password'])) 
            {
                $data = [
                    'email' => $admin['email']
                ];
                $this->session->set_userdata($data);
                redirect('admin');
            }
            else 
            {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                password salah!</div>');
                redirect('auth');
            }
        }
        else 
        {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email belum terdaftar</div>');
            redirect('auth');
        }
    }
    public function registration()
    {
        if ($this->session->userdata('email')){
            redirect('admin');
        }
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[admin.email]', [
            'is_unique' => 'This Email Has Already!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'password dont match!',
            'min_length' => 'password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        // validasi
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Admin Registration';
            $this->load->view('auth/registration', $data);
        }
        else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT)
            ];

            // insert kedatabase
            $this->db->insert('admin', $data);
            // pesan
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            congratulation! your account has been created. Please Login</div>');
            redirect('auth');
        }
        
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        You Have been Logout</div>');
        redirect('auth');

    }



}



