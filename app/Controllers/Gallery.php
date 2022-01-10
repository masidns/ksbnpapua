<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GalleryModel;
use App\Models\NewseventModel;
use App\Models\OrdergalleryModel;

class Gallery extends BaseController
{

    protected $ordergallery;
    protected $newsevent;
    protected $gallery;
    public function __construct()
    {
        //Do your magic here
        $this->ordergallery = new OrdergalleryModel();
        $this->newsevent = new NewseventModel();
        $this->gallery = new GalleryModel();
        session()->set(['active' => 'Gallery']);
    }


    public function index()
    {
        $data = [
            'title' => 'KSBN PAPUA - Gallery Event',
            'order' => $this->ordergallery->getorder(),
        ];
        return view('admin/gallery/index', $data);
    }

    public function create()
    {
        # code...
        $data = [
            'title' => 'KSBN PAPUA - Create Gallery',
            'news' => $this->newsevent->getNews(),
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
        // $image = $this->request->getFileMultiple('image');
        // dd($image);

        if (!$this->validate([
            'newsevents_id' => [
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
        // $this->ordergallery->save([
        //     'newsevents_id' => $this->request->getVar('newsevents_id'),
        // ]);

        // // mengambil id dari order
        // $idorder = $this->ordergallery->getInsertID();

        // if (!$this->validate([
        //     'gallerygambar' => [
        //         'rules' => 'required|uploaded[gallerygambar]|max_size[gallerygambar,1024]|is_image[gallerygambar]|mime_in[gallerygambar,image/jpg,image/jpeg,image/png]',
        //         'errors' => [
        //             'required' => 'Tidak Boleh Kosong',
        //             'uploaded' => 'Minimal upload 1 gambar',
        //             'max_size' => 'Ukuran gambar terlalu besar',
        //             'is_image' => 'yang anda pilih bukan gambar',
        //             'mime_in' => 'yang anda pilih bukan gambar',
        //         ]
        //     ],
        // ])) {
        //     session()->setFlashdata('pesan', 'Error,Data gagal disimpan!');
        //     return redirect()->back()->withInput();
        // }



        $filegambar = $this->request->getFiles();
        // dd($gallerygambar);
        // if ($filegambar->getError() == 4) {
        //     $filegambar = $this->request->getVar('gallerygambar');
        // } else {
        //     $newname = $filegambar->getRandomName();
        //     $filegambar->move('img/gallery/', $newname);
        // }
        $this->ordergallery->save([
            'newsevents_id' => $this->request->getVar('newsevents_id'),
        ]);
        // mengambil id dari order
        $idorder = $this->ordergallery->getInsertID();
        // $i = [0];
        // $newname = [$i][0];
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

        // dd($newname);
        // $this->ordergallery->save([
        //     'newsevents_id' => $this->request->getVar('newsevents_id'),
        // ]);
        // // mengambil id dari order
        // $idorder = $this->ordergallery->getInsertID();

        // $this->gallery->save([
        //     'gallerygambar' => $newname,
        //     'idordergallery' => $idorder,
        // ]);



        session()->setFlashdata('pesan', 'Success,Data Berhasil disimpan.');
        return redirect()->to('/gallery');
    }
}