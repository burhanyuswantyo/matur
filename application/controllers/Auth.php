<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Login Admin';
        $this->load->view('auth/login', $data);
    }

    public function logout()
    {
    }
}
