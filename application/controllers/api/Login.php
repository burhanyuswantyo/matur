<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Login extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Api_model', 'api');
        $this->methods['index_post']['limit'] = 5;
        $this->methods['index_put']['limit'] = 2;
        $this->methods['index_delete']['limit'] = 2;
    }

    public function index_get()
    {

        $nim = $this->post('nim');
        $password = $this->post('password');
        $api = $this->api->login($nim, $password);


        $this->response([
            'status' => true,
            'data' => $api
        ], REST_Controller::HTTP_OK);
    }
}
