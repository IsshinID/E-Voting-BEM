<?php

class Calon_model extends CI_model {

    public function getAllCalon()
    {
        //panggil data ke database
        //ci menggunakan sql li dgn query builder
        //cara menampilkan dengan result nampilin objek

        return $this->db->get('kandidat')->result_array();
    }
    public function getCalonById($id)
    {
        // ambil data satu baris
        return $this->db->get_where('kandidat', ['id' => $id])->row_array();
    }
}