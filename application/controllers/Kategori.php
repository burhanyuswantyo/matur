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
        $data['kategori'] = $this->kategori->getKategori(null);

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('kategori/index');
        $this->load->view('template/footer');
    }

    public function getKategori()
    {
        $id = $this->input->post('id');
        echo json_encode($this->kategori->getKategori($id));
    }

    public function tambah()
    {
        $this->kategori->insert();
        redirect('kategori');
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $this->kategori->update($id);
        redirect('kategori');
    }

    public function hapus($id)
    {
        $this->kategori->delete($id);
        redirect('kategori');
    }
}
