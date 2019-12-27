<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('laporan_model', 'laporan');
    }

    public function masuk()
    {
        $data['title'] = 'Laporan Masuk';
        $data['laporan'] = $this->laporan->getLaporan(1, 1, null);

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('laporan/masuk');
        $this->load->view('template/footer');
    }

    public function terima()
    {
        $data['title'] = 'Laporan Diterima';
        $data['laporan'] = $this->laporan->getLaporan(1, 2, null);

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('laporan/diterima');
        $this->load->view('template/footer');
    }

    public function proses()
    {
        $data['title'] = 'Laporan Diproses';
        $data['laporan'] = $this->laporan->getLaporan(1, 3, null);

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('laporan/diproses');
        $this->load->view('template/footer');
    }

    public function selesai()
    {
        $data['title'] = 'Laporan Selesai';
        $data['laporan'] = $this->laporan->getLaporan(2, 4, 0);

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('laporan/selesai');
        $this->load->view('template/footer');
    }
}
