<?php

class Kandidat_model extends CI_model {

    public function getAllKandidat()
    {
        //panggil data ke database
        //ci menggunakan sql li dgn query builder
        //cara menampilkan dengan result nampilin objek

        return $this->db->get('kandidat')->result_array();
    }
    public function tambahDataKandidat()
    {
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

    $this->db->insert('kandidat', $data);
    }

    public function getKandidatById($id)
    {
        // ambil data satu baris
        return $this->db->get_where('kandidat', ['id' => $id])->row_array();
    }
    public function ubahDataKandidat()
    {
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

    $this->db->where('id', $this->input->post('id'));
    $this->db->update('kandidat', $data);
    }
}