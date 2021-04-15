<?php

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->model('Surat_model');
        $this->load->model('Kategori_model');
        $data['judul'] = 'Al-Quranku';
        $data['surat'] = $this->Surat_model->getAllSurat();
        $data['kategori_ayat'] = $this->Kategori_model->ambilKategori();
        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }
}
