<?php

namespace App\Controllers\Api\User;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Models\User;

class ProfileController extends BaseController
{
    use ResponseTrait;
    
    public function __construct()
    {
        $this->model = new User();
    }

    public function index()
    {
        return $this->respond(['users' => $this->model->findAll()], 200);
    }
}
