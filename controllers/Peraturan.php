<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Peraturan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Peraturan_model');
    }

    function check_login()
    {
        // harus login
        if( !$this->session->userdata('email') ) {
            redirect('auth');
        }
    }

    public function index() 
    {
        // check admin
        $this->check_login();

        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Halaman Peraturan';
        $data['peraturan'] = $this->Peraturan_model->getAllPeraturan();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('peraturan/index', $data);
        $this->load->view('templates/footer');

        
    }
    public function tambah()
    {
        // check admin
        $this->check_login();

        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Form Tambah Peraturan';
        // buat rule
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        
        // panggil validasi dulu2
        if ($this->form_validation->run() == FALSE)
        {
            // panggil field1
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('peraturan/tambah');
            $this->load->view('templates/footer');
        }
        else 
        {
            $data = [
                "judul" => $this->input->post('judul', true),
                "isi" => $this->input->post('isi', true),
                "tahun" => $this->input->post('tahun', true),
                
        ];
    
        $this->db->insert('peraturan', $data);

        $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('peraturan');
            
        }
    }
    public function ubah($id)
    {
        // check admin
        $this->check_login();

        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Form Ubah Peraturan';
        $data['peraturan'] = $this->Peraturan_model->getPeraturanById($id);
        $data['tahun'] = ['2019/2020','2020/2021','2021/2022'];
        
        // buat rule
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        
        // panggil validasi dulu2
        if ($this->form_validation->run() == FALSE)
        {
            // panggil field1
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('peraturan/ubah', $data);
            $this->load->view('templates/footer');
        }
        else 
        {
            // ambil data lalu jalankan modelnya
            $this->Peraturan_model->ubahDataPeraturan();
            // nampil pesan berhasil
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('peraturan');
        }
    }
    public function hapus($id)
    {
        // check admin
        $this->check_login();

        // $this->db->where('id', $id);
        $this->db->delete('peraturan', ['id' => $id]);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('peraturan');
    }
    public function detail()
    {
        $data['peraturan'] = $this->Peraturan_model->getAllPeraturan();
        $this->load->view('peraturan/detail', $data);
        
    }



}



