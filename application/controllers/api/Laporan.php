<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Laporan extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Api_model', 'api');
        $this->methods['index_post']['limit'] = 5;
        $this->methods['index_put']['limit'] = 2;
        $this->methods['index_delete']['limit'] = 2;
    }

    public function login_post()
    {

        $nim = $this->post('nim');
        $password = $this->post('password');
        $api = $this->api->login($nim, $password);


        if ($api) {
            $this->response([
                'status' => true,
                'data' => $api
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_get()
    {
        $user_id = $this->get('user_id');
        $status_id = $this->get('status_id');

        if ($user_id == null && $status_id == null) {
            $api = $this->api->getLaporan(null, null);
        } elseif ($user_id != null && $status_id == null) {
            $api = $this->api->getLaporan($user_id, null);
        } elseif ($user_id == null && $status_id != null) {
            $api = $this->api->getLaporan(null, $status_id);
        } else {
            $api = $this->api->getLaporan($user_id, $status_id);
        }


        if ($api) {
            $this->response([
                'status' => true,
                'data' => $api,
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete()
    {
        $id = $this->delete('id');

        if ($id === null) {
            $this->response([
                'status' => false,
                'message' => 'Provide an id!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->api->delete($id) > 0) {
                // ok
                $this->response([
                    'status' => true,
                    'id' => $id,
                    'message' => 'Id deleted'
                ], REST_Controller::HTTP_NO_CONTENT);
            } else {
                // id not found
                $this->response([
                    'status' => false,
                    'message' => 'Id not found!'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post()
    {
        $gambar = base64_decode($this->input->post('gambar'));
        $file_name = 'img' . rand(9, 9999) . '.jpg';

        $path = './upload/' . $file_name;
        $data = [
            'deskripsi' => $this->post('deskripsi'),
            'gambar' => 'http://matur.mikelas.online/upload/' . $file_name,
            'date_created' => $this->post('date_created'),
            'user_id' => $this->post('user_id'),
            'kategori_id' => $this->post('kategori_id'),
            'status_id' => $this->post('status_id')
        ];

        if (file_put_contents($path, $gambar)) {
            if ($this->api->insert($data) > 0) {
                echo json_encode(array('response' => 'Success'));
            }
        } else {
            echo json_encode(array("response" => "Image not uploaded"));
        }
        // $config = array();
        // $config['upload_path'] = './upload/';
        // $config['allowed_types'] = 'jpg|png';
        // $config['max_size'] = '5000';
        // $this->load->library('upload', $config, 'gambar');
        // $this->gambar->initialize($config);
        // $gambar['upload'] = $this->gambar->do_upload('gambar');
        // $gambar['name'] = $this->gambar->data('file_name');
        // $file_name = 'http://192.168.1.152/matur/upload/' . $gambar['name'];


        // $data = [
        //     'deskripsi' => $this->post('deskripsi'),
        //     'gambar' => $file_name,
        //     'date_created' => $this->post('date_created'),
        //     'user_id' => $this->post('user_id'),
        //     'kategori_id' => $this->post('kategori_id'),
        //     'status_id' => $this->post('status_id')
        // ];



        // if ($this->api->insert($data) > 0) {
        //     file_put_contents($path, base64_decode($gambar));
        //     $this->response([
        //         'status' => true,
        //         'message' => 'Laporan berhasil dibuat.'
        //     ], REST_Controller::HTTP_CREATED);
        // } else {
        //     $this->response([
        //         'status' => false,
        //         'message' => 'Laporan gagal dibuat!'
        //     ], REST_Controller::HTTP_BAD_REQUEST);
        // }
    }

    public function index_put()
    {
        $id = $this->put('id');
        $data = [
            'deskripsi' => $this->put('deskripsi'),
            'gambar' => $this->put('gambar'),
            'date_created' => $this->put('date_created'),
            'user_id' => $this->put('user_id'),
            'kategori_id' => $this->put('kategori_id'),
            'status_id' => $this->put('status_id')
        ];

        if ($this->api->update($data, $id) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Laporan berhasil dirubah.'
            ], REST_Controller::HTTP_NO_CONTENT);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Laporan gagal dirubah!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function kategori_get()
    {
        $api = $this->api->getKategori();

        if ($api) {
            $this->response([
                'status' => true,
                'data' => $api,
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
