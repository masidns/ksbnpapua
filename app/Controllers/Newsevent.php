<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NewseventModel;

class Newsevent extends BaseController
{

    protected $newsevent;
    public function __construct()
    {
        //Do your magic here
        $this->newsevent = new NewseventModel();
        session()->set(['active' => 'News']);
    }


    public function index()
    {
        //
        $data = [
            'title' => 'KSBN PAPUA - NEWS EVENT',
            'news' => $this->newsevent->getNews(),
        ];
        return view('admin/news/index', $data);
    }

    public function create()
    {
        # code...
        $data = [
            'title' => 'KSBN PAPUA - NEWS CREATE',
            'news' => $this->newsevent->getNews(),
            'validation' => \Config\Services::validation(),
        ];
        return view('admin/news/create', $data);
    }

    public function save()
    {
        # code...
        if (!$this->validate([
            'judul' => [
                'rules'    => 'required',
                'errors'    => [
                    'required'    => 'Judul tidak boleh kosong.'
                ]
            ],
            'keterangan' => [
                'rules'    => 'required',
                'errors'    => [
                    'required'    => 'Isi Berita / Pengumuman tidak boleh kosong.'
                ]
            ],
            'kategori' => [
                'rules'    => 'required',
                'errors'    => [
                    'required'    => 'Kategori tidak boleh kosong.'
                ]
            ],
        ])) {
            session()->setFlashdata('pesan', 'Error,Data Gagal Disimpan!');
            return redirect()->back()->withInput();
        }

        $this->newsevent->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $this->request->getVar('slug'),
            'gambar' => $this->request->getVar('gambar'),
            'kategori' => $this->request->getVar('kategori'),
            'keterangan' => $this->request->getVar('keterangan'),
            'users_id' => session()->get('users_id'),
        ]);
        session()->setFlashdata('pesan', 'Success,Data berhasil disimpan!');
        return redirect()->to('/newsevent');
    }
}
