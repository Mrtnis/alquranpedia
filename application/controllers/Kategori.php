<?php

class Kategori extends CI_Controller
{
    public function index($id_kategori)
    {
        $this->load->model('Kategori_model');
        $data['judul'] = 'Ayat tentang Nabi & Rasul';
        $data['fix'] = $this->Kategori_model->getByKategory($id_kategori);
        $data['kategori'] = $this->Kategori_model->getNama($id_kategori);
        $this->load->view('templates/header', $data);
        $this->load->view('kategori/index');
        $this->load->view('templates/footer');
    }
}
