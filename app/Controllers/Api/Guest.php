<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class Guest extends ResourceController
{
    protected $format       = 'json';
    protected $modelName    = 'App\Models\GuestModel';

    public function index()
    {
        return $this->respond($this->model->findAll(), 200);
    }

    public function create()
    {
        $validation =  \Config\Services::validation();

        $name   = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $phone = $this->request->getPost('phone');
        $address = $this->request->getPost('address');

        $data = [
            'name' => $name,
            "email" => $email,
            "phone" => $phone,
            "address" => $address,
        ];

        if ($validation->run($data, 'guest') == FALSE) {
            $response = [
                'status' => 500,
                'error' => true,
                'data' => $validation->getErrors(),
            ];
            return $this->respond($response, 500);
        } else {
            $simpan = $this->model->insertGuest($data);
            if ($simpan) {
                $msg = ['message' => 'Created Guest successfully'];
                $response = [
                    'status' => 200,
                    'error' => false,
                    'data' => $msg,
                ];
                return $this->respond($response, 200);
            }
        }
    }

    public function show($id = NULL)
    {
        $get = $this->model->getGuest($id);
        if ($get) {
            $code = 200;
            $response = [
                'status' => $code,
                'error' => false,
                'data' => $get,
            ];
        } else {
            $code = 401;
            $msg = ['message' => 'Not Found'];
            $response = [
                'status' => $code,
                'error' => true,
                'data' => $msg,
            ];
        }
        return $this->respond($response, $code);
    }

    public function update($id = NULL)
    {
        $validation =  \Config\Services::validation();
        $data = $this->request->getRawInput();

        if ($validation->run($data, 'guest') == FALSE) {
            $response = [
                'status' => 500,
                'error' => true,
                'data' => $validation->getErrors(),
            ];
            return $this->respond($response, 500);
        } else {
            $simpan = $this->model->updateGuest($data, $id);
            if ($simpan) {
                $msg = ['message' => 'Updated guest successfully'];
                $response = [
                    'status' => 200,
                    'error' => false,
                    'data' => $msg,
                ];
                return $this->respond($response, 200);
            }
        }
    }

    public function delete($id = NULL)
    {
        $hapus = $this->model->deleteGuest($id);
        if ($hapus) {
            $code = 200;
            $msg = ['message' => 'Deleted Guest successfully'];
            $response = [
                'status' => $code,
                'error' => false,
                'data' => $msg,
            ];
        } else {
            $code = 401;
            $msg = ['message' => 'Not Found'];
            $response = [
                'status' => $code,
                'error' => true,
                'data' => $msg,
            ];
        }
        return $this->respond($response, $code);
    }
}
