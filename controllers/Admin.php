<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    
    function __construct()
    {

        parent::__construct();
        // print_r($this->session->userdata());die();
        // harus login
        if( !$this->session->userdata('email') ) {
            redirect('auth');
        }
    }

    public function index() 
    {
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }



}



