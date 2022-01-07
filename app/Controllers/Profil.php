<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProfilModel;

class Profil extends BaseController
{

    protected $profilmodel;
    public function __construct()
    {
        //Do your magic here
        $this->profilmodel = new ProfilModel();
        session()->set(['active' => 'Profil']);
    }


    public function index()
    {
        //
        if (empty($this->profilmodel->getprofile())) {
            return redirect()->to('/profil/create');
        } else {
            $data = [
                'title' => 'KSBN PAPUA - Profil',
                'profil' => $this->profilmodel->getprofile()
            ];
            // dd($data);
            return view('admin/profil/index', $data);
        }
    }

    public function create()
    {
        # code...
        $data = [
            'title' => 'KSBN PAPUA - Create Profil',
            'profil' => $this->profilmodel->getprofile(),
            'validation' => \Config\Services::validation()
        ];
        // d($data['profil']);
        return view('admin/profil/create', $data);
    }

    public function save()
    {
        # code...
        // dd($this->profilmodel->getprofile());    
        if (!$this->validate([
            'profil' => [
                'rules'    => 'required',
                'errors'    => [
                    'required'    => 'Profil tidak boleh kosong'
                ]
            ],
            'visi' => [
                'rules'    => 'required',
                'errors'    => [
                    'required'    => 'Visi tidak boleh kosong'
                ]
            ],
            'misi' => [
                'rules'    => 'required',
                'errors'    => [
                    'required'    => 'Misi tidak boleh kosong'
                ]
            ],
        ])) {
            session()->setFlashdata('pesan', 'Error,Data gagal disimpan');
            return redirect()->back()->withInput();
        }

        $this->profilmodel->save([
            'profile' => $this->request->getVar('profil'),
            'visi' => $this->request->getVar('visi'),
            'misi' => $this->request->getVar('misi'),
            'users_id' => session()->get('users_id'),
        ]);
        // dd($save);
        session()->setFlashdata('pesan', 'Success,Data Profil berhasil diperbaharui');
        return redirect()->to('/profil');
    }

    public function update($id)
    {
        # code...
        $data = [
            'title' => 'KSBN PAPUA - Update Profil',
            'profil' => $this->profilmodel->getprofile($id),
            'validation' => \Config\Services::validation()
        ];
        // dd($data);
        return view('admin/profil/update', $data);
    }

    public function updating($id)
    {
        # code...
        // dd($this->profilmodel->getprofile());    
        if (!$this->validate([
            'profil' => [
                'rules'    => 'required',
                'errors'    => [
                    'required'    => 'Profil tidak boleh kosong'
                ]
            ],
            'visi' => [
                'rules'    => 'required',
                'errors'    => [
                    'required'    => 'Visi tidak boleh kosong'
                ]
            ],
            'misi' => [
                'rules'    => 'required',
                'errors'    => [
                    'required'    => 'Misi tidak boleh kosong'
                ]
            ],
        ])) {
            session()->setFlashdata('pesan', 'Error,Data gagal disimpan');
            return redirect()->back()->withInput();
        }

        $this->profilmodel->save([
            'id' => $id,
            'profile' => $this->request->getVar('profil'),
            'visi' => $this->request->getVar('visi'),
            'misi' => $this->request->getVar('misi'),
        ]);
        // dd($save);
        session()->setFlashdata('pesan', 'Success,Data Profil berhasil diperbaharui');
        return redirect()->to('/profil');
    }
}
