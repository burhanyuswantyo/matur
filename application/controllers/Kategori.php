<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_model', 'kategori');
    }

    public function index()
    {
        $data['title'] = 'Kelola Kategori';
        $data['kategori'] = $this->kategori->getKategori();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('kategori/index');
        $this->load->view('template/footer');
    }
}
