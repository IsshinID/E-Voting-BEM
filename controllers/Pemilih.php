<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilih extends CI_Controller {
    Public function __construct()
    {
        parent::__construct();
        $this->load->model('Pemilih_model');
        
    }

    function check_login()
    {
        // harus login
        if( !$this->session->userdata('email') ) {
            redirect('auth');
        }
    }

    Public function index()
    {
        // check admin
        $this->check_login();

        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Halaman Pemilih';

        // LOAD LIBRARY
        $this->load->library('pagination');

        //ambil data searching
        // jika ada this-input post yg namanya submit
        if($this->input->post('submit')){
            $data['keyword'] = $this->input->post('keyword');
            // simpan ke dlm session
            $this->session->set_userdata('keyword', $data['keyword']);
        } else{
            $data['keyword'] = $this->session->userdata('keyword');
        }

        // CONFIG
        $config['base_url'] ='http://localhost/evotingbem/pemilih/index';

        //berisi berapa jumlah query yang dilakukan prof
        $this->db->like('nama', $data['keyword']);
        $this->db->or_like('status', $data['keyword']);
        $this->db->or_like('prodi', $data['keyword']);
        $this->db->from('pemilih');
        $config['total_rows'] = $this->db->count_all_results();
        // hasil pencarian
        $data['total_rows'] = $config['total_rows'];
        // end
        $config['per_page'] = 7;
        $config['num_links'] = 5;

        //styling
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        // initialize
        $this->pagination->initialize($config);

        

        $data['start'] = $this->uri->segment(3);
        $data['pemilih'] = $this->Pemilih_model->getPemilih($config['per_page'], $data['start'], $data['keyword']);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('pemilih/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        // cek admin
        $this->check_login();

        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Form Tambah Kandidat';
        // buat rule
        $this->form_validation->set_rules('gid', 'Gid', 'required|max_length[25]|is_unique[pemilih.gid]',
        array(
            'is_unique' => 'NIM / NIK sudah ada!',
            'max_length' => 'Nomor Induk Terlalu Panjang!'
        )

        );
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('prodi', 'Prodi', 'required');
        
        // panggil validasi dulu2
        if ($this->form_validation->run() == FALSE)
        {
            // panggil field1
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('pemilih/tambah');
            $this->load->view('templates/footer');
        }
        else 
        {
            $data = [
                "gid" => $this->input->post('gid', true),
                "nama" => $this->input->post('nama', true),
                "status" => $this->input->post('status', true),
                "periode" => $this->input->post('periode', true),
                "prodi" => $this->input->post('prodi', true),
        ];
    
        $this->db->insert('pemilih', $data);

        // insertid si pemilihan
        $vote_data = array(
            'pemilih_id' => $this->db->insert_id(),
            'pilihan' => '0',
            'tanggal' => date("Y-m-d")
        );

        $this->db->insert('pemilihan', $vote_data);

        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('pemilih');
        
        }
    }
    public function hapus($id)
    {
            // check admin
        $this->check_login();

        // $this->db->where('id', $id);
        $this->db->delete('pemilih', ['id' => $id]);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('pemilih');
    }
    public function ubah($id)
    {
            // check admin
        $this->check_login();

        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Form Ubah Pemilih';
        $data['pemilih'] = $this->Pemilih_model->getPemilihById($id);
        $data['periode'] = ['2019/2020','2020/2021','2021/2022'];
        $data['status'] = ['Dosen', 'Mahasiswa'];
        $data['prodi'] = ['Kesehatan Masyarakat','Ilmu Keperawatan','Farmasi','Profesi NERS'];
        
        // buat rule
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('prodi', 'Prodi', 'required');
        
        // panggil validasi dulu2
        if ($this->form_validation->run() == FALSE)
        {
            // panggil field1
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('pemilih/ubah', $data);
            $this->load->view('templates/footer');
        }
        else 
        {
            // ambil data lalu jalankan modelnya
            $this->Pemilih_model->ubahDataPemilih();
            // nampil pesan berhasil
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('pemilih');
        }

    }
    public function print()
    {
            // check admin
        $this->check_login();
            
        $data['pemilih'] = $this->Pemilih_model->getAllPemilih("pemilih");
        $this->load->view('laporan/print_pemilih', $data);
    }

    public function gid()
    {
        $pemilih = $this->db->where('gid', $this->input->post('gid'))->get('pemilih')->row_array();

        // logika pemilih ada atau tidak
        if( count($pemilih) ) {

            // validasi jika pemilih sudah vote atau belum vote, jika sudah kembalikan ke halaman index
            $pemilihan = $this->db->where('pemilih_id', $pemilih['id'])->get('pemilihan')->row_array();

            if( $pemilihan['pilihan'] == 1 ) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                NIM / NIK anda telah digunakan!</div>');
                
                redirect('halaman');
            }

            // redirect ke halaman calon
            foreach( $pemilih as $index => $pemilih_data ) {
                $this->session->set_userdata($index, $pemilih_data);
            }

            // kalo gid terdaftar
            redirect('calon');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            NIM / NIK belum aktivasi! silahkan hubungi operator.</div>');

            redirect('halaman');
        }

        // print_r($pemilih); die();
    }



}