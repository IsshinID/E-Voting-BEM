<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Calon extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Calon_model');
        // print_r($this->session->userdata()); die();
        // harus login pemilih
        if( !$this->session->userdata('gid') ) {
            $this->session->set_flashdata('message', '');
            
            redirect('halaman');
        }
    }

    public function index()
    {
        $data['kandidat'] = $this->Calon_model->getAllCalon();
        $this->load->view('calon/index', $data);
    }

    public function profil($id)
    {
        $data['kandidat'] = $this->Calon_model->getCalonById($id);
        $this->load->view('calon/profil', $data);
    }

    function vote($calon_id) 
    {
        // voting
        $this->db->where('id', $calon_id);
        $this->db->set('suara', 'suara+1', FALSE);
        $this->db->update('kandidat');

        $this->db->where('pemilih_id', $this->session->userdata('id'))->update('pemilihan', [
            'pilihan' => '1'
        ]);

        redirect('Thanks');
    }


}