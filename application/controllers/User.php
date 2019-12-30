<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'user');
    }

    public function index()
    {
        $data['title'] = 'Kelola User';
        $data['user'] = $this->user->getUser(null);

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('user/index');
        $this->load->view('template/footer');
    }

    public function getUser()
    {
        $id = $this->input->post('id');
        echo json_encode($this->user->getUser($id));
    }

    public function tambah()
    {
        $this->user->insert();
        redirect('user');
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $this->user->update($id);
        redirect('user');
    }

    public function hapus($id)
    {
        $this->user->delete($id);
        redirect('user');
    }
}
