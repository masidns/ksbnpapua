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

    public function singin()
    {
        # code...
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $this->usersmodel->where('email', $email)->orWhere('username', $email)->first();
        if ($data) {
            $pass = $data['password'];
            $cekpassword = password_verify($password, $pass);
            if ($cekpassword) {
                $cekdata = [
                    'id' => $data['id'],
                    'username' => $data['username'],
                    'email' => $data['email'],
                    'login' => TRUE
                ];
                session()->set($cekdata);
                session()->setFlashdata('pesan', 'Success,Berhasil Login');
                return redirect()->to('/profil');
            } else {
                session()->setFlashdata('pesan', 'Error,Silahkan cek kembali password anda');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('pesan', 'Error,Silahkan cek kembali email anda');
            return redirect()->back();
        }
    }

    public function logout()
    {
        # code...
        session()->destroy();
        return redirect()->to('/auth');
    }
}
