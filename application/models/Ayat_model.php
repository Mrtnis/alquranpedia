<?php

class Ayat_model extends CI_Model
{

    public function getAyat($nomor_surat)
    {
        return $this->db->get_where('fix', ['nomor_surat' => $nomor_surat])->result();
    }

    public function getSurat($nomor_surat)
    {
        return $this->db->get_where('surat', ['nomor_surat' => $nomor_surat])->result();
    }
}
