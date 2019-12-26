<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('index');
        $this->load->view('template/footer');
    }

    public function masuk()
    {
        $data['title'] = 'Laporan Masuk';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('laporan/masuk');
        $this->load->view('template/footer');
    }

    public function terima()
    {
        $data['title'] = 'Laporan Diterima';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('laporan/diterima');
        $this->load->view('template/footer');
    }

    public function proses()
    {
        $data['title'] = 'Laporan Diterima';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('laporan/diproses');
        $this->load->view('template/footer');
    }

    public function selesai()
    {
        $data['title'] = 'Laporan Diterima';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('laporan/selesai');
        $this->load->view('template/footer');
    }
}
