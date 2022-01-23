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
                'rules'    => 'required',
                'errors'    => [
                    'required'    => 'Judul tidak boleh kosong.'
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

        $filegambar = $this->request->getFiles();
        // $slug = url_title($this->request->getVar('judulgallery'), '-', true);
        $this->ordergallery->save([
            'users_id' => session()->get('users_id'),
            'judulgallery' => $this->request->getVar('judulgallery'),
            'sluggallery' => url_title($this->request->getVar('judulgallery'), '-', true),
            'gstatus' => 1
        ]);
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
        // dd($data);
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

    public function insertfoto()
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
        if ($filegambar->getError() != 4) {
            $namafile = $filegambar->getRandomName();
            $filegambar->move('img/gallery/', $namafile);
            unlink('img/gallery/' . $this->request->getVar('gambarlama'));
        }
        // cekgambar

        $this->gallery->save([
            // 'id' => $id,
            'gallerygambar' => $namafile,
        ]);

        session()->setFlashdata('pesan', 'Success,Data berhasil perbaharui!');
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
}
