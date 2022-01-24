<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GalleryModel;
use App\Models\OrdergalleryModel;
use CodeIgniter\API\ResponseTrait;


class Gallery extends BaseController
{
    use ResponseTrait;
    protected $ordergallery;
    protected $gallery;
    public function __construct()
    {
        //Do your magic here
        $this->ordergallery = new OrdergalleryModel();
        $this->gallery = new GalleryModel();
        session()->set(['active' => 'Gallery']);
    }


    public function index()
    {
        $data = [
            'title' => 'KSBN PAPUA - Gallery Event',
            'order' => $this->ordergallery->getorder(),
            'validation' => \Config\Services::validation(),
        ];
        // dd($data['order']);
        return view('admin/gallery/index', $data);
    }

    public function create()
    {
        # code...
        $data = [
            'title' => 'KSBN PAPUA - Create Gallery',
            'order' => $this->ordergallery->getorder(),
            'galery' => $this->gallery->getGallery(),
            'validation' => \Config\Services::validation(),
        ];
        // dd($data);
        return view('admin/gallery/create', $data);
    }

    public function save()
    {
        # code...
        // $image = $this->request->getFiles();

        // return $this->respond($image);
        // dd($image);

        if (!$this->validate([
            'judulgallery' => [
                'rules'    => 'required|is_unique[ordergallery.judulgallery]',
                'errors'    => [
                    'required'    => 'Judul tidak boleh kosong.',
                    'is_unique'    => 'Judul tidak boleh sama',
                ]
            ],
            'sampul' => [
                'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'required' => 'Tidak Boleh Kosong',
                    'uploaded' => 'Minimal upload 1 gambar',
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'yang anda pilih bukan gambar',
                    'mime_in' => 'yang anda pilih bukan gambar',
                ]
            ],
            'gallerygambar' => [
                'rules' => 'uploaded[gallerygambar]|max_size[gallerygambar,1024]|is_image[gallerygambar]|mime_in[gallerygambar,image/jpg,image/jpeg,image/png]',
                // 'rules' => 'is_image[gallerygambar]|mime_in[gallerygambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'required' => 'Tidak Boleh Kosong',
                    'uploaded' => 'Minimal upload 1 gambar',
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'yang anda pilih bukan gambar',
                    'mime_in' => 'yang anda pilih bukan gambar',
                ]
            ],
        ])) {
            session()->setFlashdata('pesan', 'Error,Data gagal disimpan!');
            return redirect()->back()->withInput();
        }


        $sampulgallery = $this->request->getFile('sampul');
        if ($sampulgallery->getError() == 4) {
            $namasampul = 'default.jpg';
        } else {
            $namasampul = $sampulgallery->getRandomName();
            $sampulgallery->move('img/sampul/', $namasampul);
        }
        // $slug = url_title($this->request->getVar('judulgallery'), '-', true);
        $this->ordergallery->save([
            'users_id' => session()->get('users_id'),
            'judulgallery' => $this->request->getVar('judulgallery'),
            'sluggallery' => url_title($this->request->getVar('judulgallery'), '-', true),
            'gstatus' => 1,
            'sampul' => $namasampul,
        ]);

        $filegambar = $this->request->getFiles();

        // mengambil id dari order
        $idorder = $this->ordergallery->getInsertID();
        foreach ($filegambar['gallerygambar'] as $i => $value) {
            # code...
            if ($value->isValid() && !$value->hasMoved()) {
                $newname[$i] = $value->getRandomName();
                $value->move('img/gallery/', $newname[$i]);
                $this->gallery->save([
                    'gallerygambar' => $newname[$i],
                    'idordergallery' => $idorder,
                ]);
            }
        }

        session()->setFlashdata('pesan', 'Success,Data Berhasil disimpan.');
        return redirect()->to('/gallery');
    }

    public function detail($sluggallery)
    {
        # code...
        $data = [
            'title' => 'KSBN PAPUA - Detail Gallery',
            'order' => $this->ordergallery->getorder($sluggallery),
            'gallery' => $this->gallery->getGallery(),
            'validation' => \Config\Services::validation(),
        ];
        // dd($data['gallery']);
        return view('admin/gallery/detail', $data);
    }

    public function updatefoto($id)
    {
        # code...
        if (!$this->validate([
            'gallerygambar' => [
                'rules' => 'uploaded[gallerygambar]|max_size[gallerygambar,1024]|is_image[gallerygambar]|mime_in[gallerygambar,image/jpg,image/jpeg,image/png]',
                // 'rules' => 'is_image[gallerygambar]|mime_in[gallerygambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'required' => 'Tidak Boleh Kosong',
                    'uploaded' => 'Minimal upload 1 gambar',
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'yang anda pilih bukan gambar',
                    'mime_in' => 'yang anda pilih bukan gambar',
                ]
            ],
        ])) {
            session()->setFlashdata('pesan', 'Error,Data gagal diperbaharui!');
            return redirect()->back();
        }

        // cekgambar
        $filegambar = $this->request->getFile('gallerygambar');
        if ($filegambar->getError() == 4) {
            $namafile = $this->request->getVar('gambarlama');
        } else {
            $namafile = $filegambar->getRandomName();
            $filegambar->move('img/gallery/', $namafile);
            // if ($this->request->getVar('gambarlama') != $this->request->getFile('gallerygambar')) {
            unlink('img/gallery/' . $this->request->getVar('gambarlama'));
            // }
        }
        // cekgambar

        $this->gallery->save([
            'id' => $id,
            'gallerygambar' => $namafile,
        ]);

        session()->setFlashdata('pesan', 'Success,Data berhasil perbaharui!');
        return redirect()->back();
    }

    public function insertfoto($idordergallery)
    {
        # code...
        // dd($idordergallery);
        // $detail = $this->ordergallery->where('idordergallery', $idordergallery)->get()->getRowObject();
        // dd($detail->idordergallery);
        if (!$this->validate([
            'gallerygambar' => [
                'rules' => 'uploaded[gallerygambar]|max_size[gallerygambar,1024]|is_image[gallerygambar]|mime_in[gallerygambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'required' => 'Tidak Boleh Kosong',
                    'uploaded' => 'Minimal upload 1 gambar',
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'yang anda pilih bukan gambar',
                    'mime_in' => 'yang anda pilih bukan gambar',
                ]
            ],
        ])) {
            session()->setFlashdata('pesan', 'Error,Data gagal ditambah!');
            return redirect()->back();
        }

        // cekgambar
        $filegambar = $this->request->getFiles();
        foreach ($filegambar['gallerygambar'] as $i => $value) {
            # code...
            if ($value->isValid() && !$value->hasMoved()) {
                $newname[$i] = $value->getRandomName();
                $value->move('img/gallery/', $newname[$i]);
                $this->gallery->save([
                    'gallerygambar' => $newname[$i],
                    'idordergallery' => $idordergallery,
                ]);
            }
        }
        // cekgambar

        session()->setFlashdata('pesan', 'Success,Data berhasil ditambah!');
        return redirect()->back();
    }

    public function deletefoto($id)
    {
        # code...
        $data = $this->gallery->getGallery($id);
        // dd($data->id, $data->gallerygambar);
        if (!empty($data)) {
            unlink('img/gallery/' . $data->gallerygambar);
        }

        $delete = $this->gallery->delete($id);
        if ($delete) {
            session()->setFlashdata('pesan', 'Success,Data berhasil dihapus');
        } else {
            session()->setFlashdata('pesan', 'Error,Data berhasil dihapus');
        }
        return redirect()->back();
    }

    public function gantijudul($idordergallery)
    {
        $judullama = $this->ordergallery->getorder($this->request->getVar('sluggallery'));
        if ($judullama->judulgallery == $this->request->getVar('judulgallery')) {
            $rules = 'required';
        } else {
            $rules = 'required|is_unique[ordergallery.judulgallery]';
        }
        // dd($rules);

        if (!$this->validate([
            'judulgallery' => [
                'rules'    => $rules,
                'errors'    => [
                    'required'    => 'Judul tidak boleh kosong.',
                    'is_unique'    => 'Judul tidak boleh sama',
                ]
            ],
            'sampul' => [
                'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'required' => 'Tidak Boleh Kosong',
                    'uploaded' => 'Minimal upload 1 gambar',
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'yang anda pilih bukan gambar',
                    'mime_in' => 'yang anda pilih bukan gambar',
                ]
            ],
        ])) {
            session()->setFlashdata('pesan', 'Error,Data gagal diperbaharui');
            return redirect()->back();
        }

        $sampulgallery = $this->request->getFile('sampul');
        if ($sampulgallery->getError() == 4) {
            $namasampul = $this->request->getVar('sampullama');
        } else {
            $namasampul = $sampulgallery->getRandomName();
            $sampulgallery->move('img/sampul/', $namasampul);
            if ($this->request->getVar('sampullama') != 'default.jpg') {
                unlink('img/sampul/' . $this->request->getVar('sampullama'));
            }
        }
        // dd($namasampul);
        $slug = url_title($this->request->getVar('judulgallery'), '-', true);
        $this->ordergallery->save([
            'idordergallery' => $idordergallery,
            'judulgallery' => $this->request->getVar('judulgallery'),
            'slug' => $slug,
            'sampul' => $namasampul,
        ]);
        session()->setFlashdata('pesan', 'Success,Judul berhasil diperbaharui');
        return redirect()->to('/gallery');
    }

    public function delete($idordergallery)
    {
        # code...
        // $data = $this->gallery->where(['idordergallery' => $idordergallery]);
        $gallery = [];
        array_push($gallery, $this->gallery->getGallery());
        foreach ($gallery as $key => $value) {
            foreach ($value as $key => $item) {
                # code...
                // echo $item->idordergallery . ' ' . $item->gallerygambar . '<br>';
                if ($item->idordergallery == $idordergallery) {
                    unlink('img/gallery/' . $item->gallerygambar);
                }
            }
        }

        $order = $this->ordergallery->find($idordergallery);
        // dd($data['gambar']);
        if ($order['sampul'] != 'default.jpg') {
            unlink('img/sampul/' . $order['sampul']);
        }

        $data = $this->ordergallery->delete($idordergallery);
        if ($data) {
            session()->setFlashdata('pesan', 'Success,Data gagal dihapus');
        } else {
            session()->setFlashdata('pesan', 'Error,Data gagal dihapus');
        }
        return redirect()->to('/gallery');
    }
}
