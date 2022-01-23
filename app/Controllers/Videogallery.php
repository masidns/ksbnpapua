<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrdergalleryModel;
use App\Models\VideogalleryModel;

class Videogallery extends BaseController
{
    protected $video;
    protected $order;
    public function __construct()
    {
        //Do your magic here
        $this->video = new VideogalleryModel();
        $this->order = new OrdergalleryModel();
        session()->set(['active' => 'video']);
    }


    public function index()
    {
        //
        $data = [
            'title' => 'KSBN Gallery Video',
            'order' => $this->order->getorder(),
            'video' => $this->video->getVideo(),
            'validation' => \Config\Services::validation(),
        ];
        // dd($data);
        return view('admin/video/index', $data);
    }

    public function save()
    {
        # code...
        if (!$this->validate([
            'judulgallery' => [
                'rules'    => 'required|is_unique[ordergallery.judulgallery]',
                'errors'    => [
                    'required'    => 'Judul tidak boleh kosong.',
                    'is_unique'    => 'Judul tidak boleh sama.'
                ]
            ],
            'video' => [
                'rules'    => 'required|valid_url',
                'errors'    => [
                    'required'    => 'Link video tidak boleh kosong.',
                    'valid_url'    => 'Link video tidak boleh kosong.'
                ]
            ],
        ])) {
            session()->setFlashdata('pesan', 'Error,Data gagal disimpan! Silahkan cek kembali');
            return redirect()->back()->withInput();
        }

        $slug = url_title($this->request->getVar('judulgallery'), '-', true);
        $this->order->save([
            'users_id' => session()->get('users_id'),
            'judulgallery' => $this->request->getVar('judulgallery'),
            'sluggallery' => $slug,
            'gstatus' => 2,
        ]);

        $idorder = $this->order->getInsertID();

        // explode video
        $video = $this->request->getVar('video');
        $datav = explode('watch?v=', $video);
        if (!empty($video)) {
            $namavideo = 'https://www.youtube.com/embed/' . $datav[1];
        }

        $this->video->save([
            'video' => $namavideo,
            'idordergallery' => $idorder,
        ]);
        session()->setFlashdata('pesan', 'Success,Data berhasil disimpan!');
        return redirect()->to('/videogallery');
    }


    public function update($idordergallery)
    {
        # code...
        $judullama = $this->order->getorder($this->request->getVar('sluggallery'));
        // dd($judullama);
        if ($judullama->judulgallery == $this->request->getVar('judulgallery')) {
            $rulesjudul = 'required';
        } else {
            $rulesjudul = 'required|is_unique[ordergallery.judulgallery]';
        }

        $videolama = $this->video->getVideo($this->request->getVar('video'));
        // dd($videolama);
        if ($videolama->video == $this->request->getVar('video')) {
            $namavideo = $this->request->getVar('videolama');
        } else {
            $videobaru = $this->request->getVar('video');
            $datav = explode('watch?v=', $videobaru);
            $namavideo = 'https://www.youtube.com/embed/' . $datav[1];
        }

        if (!$this->validate([
            'judulgallery' => [
                'rules'    => $rulesjudul,
                'errors'    => [
                    'required'    => 'Judul tidak boleh kosong.',
                    'is_unique'    => 'Judul tidak boleh sama.'
                ]
            ],
            'video' => [
                'rules'    => 'required|valid_url',
                'errors'    => [
                    'required'    => 'Link video tidak boleh kosong.'
                ]
            ],
        ])) {
            session()->setFlashdata('pesan', 'Error,Data gagal disimpan! Silahkan cek kembali');
            return redirect()->back()->withInput();
        }

        $slug = url_title($this->request->getVar('judulgallery'), '-', true);
        $this->order->save([
            'idordergallery' => $idordergallery,
            'users_id' => session()->get('users_id'),
            'judulgallery' => $this->request->getVar('judulgallery'),
            'sluggallery' => $slug,
            'gstatus' => 2,
        ]);

        // $idorder = $this->order->getInsertID();

        // explode video
        // $videolama = $this->video->getVideo($this->request->getVar('video'));
        // // dd($videolama);
        // if ($videolama->video == $this->request->getVar('video')) {
        //     $namavideo = $this->request->getVar('videolama');
        // } else {
        //     $videobaru = $this->request->getVar('video');
        //     $datav = explode('watch?v=', $videobaru);
        //     $namavideo = 'https://www.youtube.com/embed/' . $datav[1];
        // }
        // dd($namavideo);

        // if ($idordergallery == $idorder) {
        $data = [
            'video' => $namavideo,
            // 'id' => $idordergallery
        ];
        $detail = $this->video->where('idordergallery', $idordergallery)->get()->getRowObject();
        // dd($detail);
        $this->video->update($detail->id, $data);
        // }
        session()->setFlashdata('pesan', 'Success,Data berhasil disimpan!');
        return redirect()->to('/videogallery');
    }
}
