<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Actions extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('laporan_model', 'laporan');
    }

    public function terima($id)
    {
        $this->laporan->update($id, 2);
        redirect('laporan/masuk');
    }

    public function tolak($id)
    {
        $this->laporan->update($id, 0);
        redirect('laporan/masuk');
    }

    public function proses($id)
    {
        $this->laporan->update($id, 3);
        redirect('laporan/terima');
    }

    public function selesai($id)
    {
        $this->laporan->update($id, 4);
        redirect('laporan/proses');
    }
}
