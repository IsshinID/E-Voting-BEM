<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Thanks extends CI_Controller {

    Public function index ()
    {
        // print_r($this->session->userdata()); die();
        if( !$this->session->userdata('gid') ) {
            $this->session->set_flashdata('message', 'Anda belum memasukkan gid');
            
            redirect('halaman');
        }

        // unset semua userdata
        foreach( $this->session->userdata() as $key => $pemilih_data ) {
            // print_r($this->session->unset_userdata($key)); die();

            if( in_array($key, ['email']) ) {
                continue;
            }
            
            $this->session->unset_userdata($key);
        }
        
        $this->load->view('thanks/index');
    }
    




}