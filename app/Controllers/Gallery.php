<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrdergalleryModel;

class Gallery extends BaseController
{

    protected $ordergallery;
    public function __construct()
    {
        //Do your magic here
        $this->ordergallery = new OrdergalleryModel();
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
        ];
        return view('admin/gallery/create', $data);
    }
}