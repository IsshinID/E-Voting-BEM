<?php

class Pemilih_model extends CI_model {

    public function getAllPemilih()
    {
        //panggil data ke database
        //ci menggunakan sql li dgn query builder
        //cara menampilkan dengan result nampilin objek

        return $this->db->get('pemilih')->result_array();
    }
    public function getPemilihById($id)
    {
        // ambil data satu baris
        return $this->db->get_where('pemilih', ['id' => $id])->row_array();
    }

    public function ubahDataPemilih()
    {
        $data = [
            "gid" => $this->input->post('gid', true),
            "nama" => $this->input->post('nama', true),
            "status" => $this->input->post('status', true),
            "periode" => $this->input->post('periode', true),
            "prodi" => $this->input->post('prodi', true),
            
    ];

    $this->db->where('id', $this->input->post('id'));
    $this->db->update('pemilih', $data);
    }
    public function getPemilih($limit, $start, $keyword = null)
    {   
        // jika ada keywordnya
        if($keyword)
        {
            $this->db->like('nama', $keyword);
            $this->db->or_like('status', $keyword);
            $this->db->or_like('prodi', $keyword);

        }
        return $this->db->get('pemilih', $limit, $start)->result_array();
    }
    public function countAllPemilih()
    {
        return $this->db->get('pemilih')->num_rows();              
    }
    // function add_vote($vote_data)
    // {
    //     $this->db->insert('pemilihan', $vote_data);
    //     $insert_id = $this->db->insert_id();

    //     return $insert_id;
    // }
}