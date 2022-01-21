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
            // 'video' => $this->video->getVideo(),
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
                'label'    => 'Field 1 Custom Name',
                'rules'    => 'required',
                'errors'    => [
                    'required'    => '{field} is required.'
                ]
            ],
            'video' => [
                'label'    => 'Field 1 Custom Name',
                'rules'    => 'required',
                'errors'    => [
                    'required'    => '{field} is required.'
                ]
            ],
        ])) {
            session()->setFlashdata('pesan', 'Error,Data gagal disimpan!');
            return redirect()->back()->withInput();
        }

        $slug = url_title($this->request->getVar('judulgallery', '-', true));
        $this->order->save([
            'users_id' => session()->get('users_id'),
            'judulgallery' => $this->request->getVar('judulgallery'),
            'gstatus' => 2,
            'sluggallery' => $slug,
        ]);

        return redirect()->to('/videogallery');
    }
}
