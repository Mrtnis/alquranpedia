<?php

class Bantuan extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Bantuan';
        $this->load->view('templates/header', $data);
        $this->load->view('bantuan/index');
        $this->load->view('templates/footer');
    }
}
