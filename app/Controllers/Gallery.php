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
    }


    public function index()
    {
        //
        $data = [
            'order' => $this->ordergallery->getorder()
        ];
        dd($data);
    }
}
