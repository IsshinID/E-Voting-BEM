<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Kandidat extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kandidat_model');
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
        $data['judul'] = 'Halaman Kandidat';
        $data['kandidat'] = $this->Kandidat_model->getAllKandidat();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('kandidat/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        // check admin
        $this->check_login();

        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Form Tambah Kandidat';
        // buat rule
        $this->form_validation->set_rules('nomor', 'Nomor', 'required|numeric');
        $this->form_validation->set_rules('ketua', 'Ketua', 'required');
        $this->form_validation->set_rules('wakil', 'Wakil', 'required');
        $this->form_validation->set_rules('semester', 'Semester', 'required');
        $this->form_validation->set_rules('visi', 'Visi', 'required');
        $this->form_validation->set_rules('misi', 'Misi', 'required');
        $this->form_validation->set_rules('proker', 'Proker', 'required');
        $this->form_validation->set_rules('prestasi', 'Prestasi', 'required');
        
        // panggil validasi dulu2
        if ($this->form_validation->run() == FALSE)
        {
            // panggil field1
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('kandidat/tambah');
            $this->load->view('templates/footer');
        }
        else 
        {
            // upload gambar
                $config['upload_path']          = './assets/img/uploads';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $data = array('error' => $this->upload->display_errors());
                        redirect('kandidat?pesan='. $this->upload->display_errors());
                        exit;

                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                }
            $nama_file= $data['upload_data']['file_name'];
            $data = [
                "no_urut" => $this->input->post('nomor', true),
                "ketua" => $this->input->post('ketua', true),
                "wakil" => $this->input->post('wakil', true),
                "semester" => $this->input->post('semester', true),
                "visi" => $this->input->post('visi', true),
                "misi" => $this->input->post('misi', true),
                "proker" => $this->input->post('proker', true),
                "periode" => $this->input->post('periode', true),
                "prestasi" => $this->input->post('prestasi', true),
                "gambar" => $nama_file
        ];
    
        $this->db->insert('kandidat', $data);
            // nampil pesan berhasil
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('kandidat');
        }
    }
    public function hapus($id)
    {
        // check admin
        $this->check_login();

        // $this->db->where('id', $id);
        $this->db->delete('kandidat', ['id' => $id]);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('kandidat');
    }

    public function detail($id)
    {
        // check admin
        $this->check_login();

        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Detail Data Kandidat';
        $data['kandidat'] = $this->Kandidat_model->getKandidatById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('kandidat/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
            // check admin
            $this->check_login();

        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Form Ubah Kandidat';
        $data['kandidat'] = $this->Kandidat_model->getKandidatById($id);
        $data['periode'] = ['2019/2020','2020/2021','2021/2022'];
        
        // buat rule
        $this->form_validation->set_rules('nomor', 'Nomor', 'required|numeric');
        $this->form_validation->set_rules('ketua', 'Ketua', 'required');
        $this->form_validation->set_rules('wakil', 'Wakil', 'required');
        
        // panggil validasi dulu2
        if ($this->form_validation->run() == FALSE)
        {
            // panggil field1
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('kandidat/ubah', $data);
            $this->load->view('templates/footer');
        }
        else 
        {
            $data = [];
            $data = [
                "no_urut" => $this->input->post('nomor', true),
                "ketua" => $this->input->post('ketua', true),
                "wakil" => $this->input->post('wakil', true),
                "semester" => $this->input->post('semester', true),
                "visi" => $this->input->post('visi', true),
                "misi" => $this->input->post('misi', true),
                "proker" => $this->input->post('proker', true),
                "periode" => $this->input->post('periode', true),
                "prestasi" => $this->input->post('prestasi', true),
                
            ];
            if($_FILES['userfile']['name'] != ""){
                            // upload gambar
                            $config['upload_path']          = './assets/img/uploads';
                            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            
                            $this->load->library('upload', $config);
            
                            if ( ! $this->upload->do_upload('userfile'))
                            {
                                    $data = array('error' => $this->upload->display_errors());
                                    redirect('kandidat?pesan='. $this->upload->display_errors());
                                    exit;
            
                            }
                            else
                            {
                                    $data = array('upload_data' => $this->upload->data());
            
                            }
                        $nama_file= $data['upload_data']['file_name'];
                        $data = [
                            "no_urut" => $this->input->post('nomor', true),
                            "ketua" => $this->input->post('ketua', true),
                            "wakil" => $this->input->post('wakil', true),
                            "semester" => $this->input->post('semester', true),
                            "visi" => $this->input->post('visi', true),
                            "misi" => $this->input->post('misi', true),
                            "proker" => $this->input->post('misi', true),
                            "periode" => $this->input->post('periode', true),
                            "prestasi" => $this->input->post('prestasi', true),
                            "gambar" => $nama_file
                            
                        ];

            }
            
    
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('kandidat', $data);
            // ambil data lalu jalankan modelnya
            //$this->Kandidat_model->ubahDataKandidat();
            // nampil pesan berhasil
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('kandidat');
        }

    }
    public function print()
    {
        // check admin
        $this->check_login();

        $data['kandidat'] = $this->Kandidat_model->getAllKandidat("kandidat");
        $this->load->view('laporan/print_kandidat', $data);
    }



}



