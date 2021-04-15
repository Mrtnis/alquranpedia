<?php

class Cari_model extends CI_Model
{

    public function getAllAyat()
    {
        return $this->db->get('fix');
    }

    public function cariAyat()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('tanpa_baris', $keyword);
        return $this->db->get('fix');
    }

    public function getAyatById($id)
    {
        return $this->db->get_where('fix', ['id' => $id])->row_array();
    }
}
