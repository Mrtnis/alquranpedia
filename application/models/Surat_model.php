<?php

class Surat_model extends CI_Model
{
    public function getAllSurat()
    {
        return $this->db->get('surat')->result_array();
    }

    public function cariArti()
    {
        $cariarti = $this->input->post('cariarti', true);
        $this->db->like('terjemahan_idn', $cariarti);
        return $this->db->get('fix');
    }

    public function getSurat($nomor_surat)
    {
        return $this->db->get_where('surat', ['nomor_surat' => $nomor_surat])->result();
    }
}
