<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('laporan_model', 'laporan');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['laporan'] = $this->laporan->getAllLaporan();
        $data['masuk'] = $this->laporan->getCount(1, 1, null);
        $data['terima'] = $this->laporan->getCount(1, 2, null);
        $data['proses'] = $this->laporan->getCount(1, 3, null);
        $data['selesai'] = $this->laporan->getCount(2, 4, 0);

        if ($this->session->userdata('username') != null) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('index');
            $this->load->view('template/footer');
        } else {
            redirect('auth');
        }
    }
}
