<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    function check_login()
    {
        // harus login
        //! operator pembalik
        //ketika admin email belum login tampilkan auth
        if( !$this->session->userdata('email') ) {
            redirect('auth');
        }
    }

    Public function index ()
    {
        // check admin
        $this->check_login();
        
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Halaman Laporan';
        
        $data['chartLabels'] = $this->db->select('no_urut')->get('kandidat')->result();
        $data['chartDatas'] = $this->db->select('suara')->get('kandidat')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/index', $data);
        $this->load->view('templates/footer');
    }
    




}