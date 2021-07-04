<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {

    Public function index ()
    {
        // unset semua userdata
        foreach( $this->session->userdata() as $key => $pemilih_data ) {
            // print_r($this->session->userdata()); die();

            //untuk cek admin sudah login tidak perlu di unset
            //unset itu dihapus
            //set membuat penambahan
            if( in_array($key, ['email']) ) {
                continue;
            }

            $this->session->unset_userdata($key);
        }
        
        $this->load->view('halaman/index');
    }
    




}