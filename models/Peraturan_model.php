<?php

class Peraturan_model extends CI_model {

    public function getAllPeraturan()
    {
        //panggil data ke database
        //ci menggunakan sql li dgn query builder
        //cara menampilkan dengan result nampilin objek

        return $this->db->get('peraturan')->result_array();
    }
    public function getPeraturanById($id)
    {
        // ambil data satu baris
        return $this->db->get_where('peraturan', ['id' => $id])->row_array();
    }
    public function ubahDataPeraturan()
    {
        $data = [
            "judul" => $this->input->post('judul', true),
            "isi" => $this->input->post('isi', true),
            "tahun" => $this->input->post('tahun', true),
            
    ];

    $this->db->where('id', $this->input->post('id'));
    $this->db->update('peraturan', $data);
    }
}