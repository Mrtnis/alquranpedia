<?php

class Ayat extends CI_Controller
{
    public function index($nomor_surat)
    {
        $this->load->model('Surat_model');
        $this->load->model('Ayat_model');
        $data['judul'] = 'Tampilan Surat';
        $data['surat'] = $this->Surat_model->getSurat($nomor_surat);
        $data['fix'] = $this->Ayat_model->getAyat($nomor_surat);
        $this->load->view('templates/header', $data);
        $this->load->view('ayat/index');
        $this->load->view('templates/footer');
    }
}
