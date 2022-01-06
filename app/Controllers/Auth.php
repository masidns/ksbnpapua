<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Auth extends BaseController
{

    protected $usersmodel;
    public function __construct()
    {
        //Do your magic here
        $this->usersmodel = new UsersModel();
    }


    public function index()
    {
        //
        $users = $this->usersmodel->findall();
        if (empty($users)) {
            $data = [
                'username' => 'Administrator',
                'password' => password_hash('Ksbnpapua123', PASSWORD_DEFAULT),
                'email' => 'kasbnpapua@gmail.com',
            ];
            $this->usersmodel->insert($data);
        }
        return view('auth/singin');
    }
}
