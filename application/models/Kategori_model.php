<?php

class Kategori_model extends CI_Model
{
    public function ambilKategori()
    {
        return $this->db->get('kategori_ayat')->result_array();
    }

    public function getByKategory($id_kategori)
    {
        return $this->db->get_where('fix', ['id_kategori' => $id_kategori])->result();
    }

    public function getNama($id_kategori)
    {
        return $this->db->get_where('kategori_ayat', ['id_kategori' => $id_kategori])->result();
    }
}
