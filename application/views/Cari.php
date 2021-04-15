<?php

class Cari extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Search Al-Quranku';
        $this->load->view('templates/header', $data);
        $this->load->view('cari/index');
        $this->load->view('templates/footer');
    }

    public function tampil()
    {
        $this->load->model('Cari_model');
        $data['judul'] = 'Hasil Pencarian';
        $data['fix'] = $this->Cari_model->getAllAyat();
        if ($this->input->post('keyword')) {
            $data['fix'] = $this->Cari_model->cariAyat();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('cari/tampil');
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $this->load->model('Cari_model');
        $data['judul'] = 'Desc Ayat';
        $data['fix'] = $this->Cari_model->getAyatById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('cari/detail', $data);
        $this->load->view('templates/footer');
    }
}
