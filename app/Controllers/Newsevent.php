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

    public function update($slug)
    {
        # code...
        $data = [
            'title' => 'KSBN PAPUA - NEWS CREATE',
            'news' => $this->newsevent->getNews($slug),
            'validation' => \Config\Services::validation(),
        ];
        // dd($data);
        return view('admin/news/update', $data);
    }

    public function save()
    {
        # code...
        if (!$this->validate([
            'judul' => [
                'rules'    => 'required|is_unique[newsevents.judul]',
                'errors'    => [
                    'required'    => 'Judul tidak boleh kosong.',
                    'is_unique'    => 'Judul sudah ada.'
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
            'gambar' => [
                'rules' => 'max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'yang anda pilih bukan gambar',
                    'mime_in' => 'yang anda pilih bukan gambar',
                ]
            ],
        ])) {
            session()->setFlashdata('pesan', 'Error,Data Gagal Disimpan!');
            return redirect()->back()->withInput();
        }

        $fileGambar = $this->request->getFile('gambar');
        if ($fileGambar->getError() == 4) {
            $namagambar = 'default.jpg';
        } else {
            $namagambar = $fileGambar->getRandomName();
            $fileGambar->move('img/news/', $namagambar);
        }

        $slug = url_title($this->request->getVar('judul'));
        $this->newsevent->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'gambar' => $namagambar,
            'kategori' => $this->request->getVar('kategori'),
            'keterangan' => $this->request->getVar('keterangan'),
            'users_id' => session()->get('users_id'),
        ]);
        session()->setFlashdata('pesan', 'Success,Data berhasil disimpan!');
        return redirect()->to('/newsevent');
    }
    public function updatingdata($newsevents_id)
    {
        # code...
        $judullama = $this->newsevent->getNews($this->request->getVar('slug'));
        if ($judullama->judul == $this->request->getVar('judul')) {
            $rules = 'required';
        } else {
            $rules = 'required|is_unique[newsevents.judul]';
        }

        if (!$this->validate([
            'judul' => [
                'rules'    => $rules,
                'errors'    => [
                    'required'    => 'Judul tidak boleh kosong.',
                    'is_unique'    => 'Judul sudah ada.'
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
            'gambar' => [
                'rules' => 'max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'yang anda pilih bukan gambar',
                    'mime_in' => 'yang anda pilih bukan gambar',
                ]
            ],
        ])) {
            session()->setFlashdata('pesan', 'Error,Data Gagal Disimpan!');
            return redirect()->back()->withInput();
        }

        $fileGambar = $this->request->getFile('gambar');
        if ($fileGambar->getError() == 4) {
            $namagambar = $this->request->getVar('gambarLama');
        } else {
            $namagambar = $fileGambar->getRandomName();
            $fileGambar->move('img/news/', $namagambar);
            if ($this->request->getVar('gambarLama') != 'default.jpg') {
                unlink('img/news/' . $this->request->getVar('gambarLama'));
            }
        }

        $slug = url_title($this->request->getVar('judul'));
        $this->newsevent->save([
            'newsevents_id' => $newsevents_id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'gambar' => $namagambar,
            'kategori' => $this->request->getVar('kategori'),
            'keterangan' => $this->request->getVar('keterangan'),
            'users_id' => session()->get('users_id'),
        ]);
        session()->setFlashdata('pesan', 'Success,Data berhasil disimpan!');
        return redirect()->to('/newsevent');
    }

    public function delete($newsevents_id)
    {
        # code...
        $data = $this->newsevent->find($newsevents_id);
        // dd($data['gambar']);
        if ($data['gambar'] != 'default.jpg') {
            unlink('img/news/' . $data['gambar']);
        }
        $delete = $this->newsevent->delete($newsevents_id);
        if ($delete) {
            session()->setFlashdata('pesan', 'Success,Data Berhasil Dihapus');
        } else {
            session()->setFlashdata('pesan', 'Error,Data Berhasil Dihapus');
        }
        return redirect()->to('/newsevent');
    }
}
