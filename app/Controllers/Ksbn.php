<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GalleryModel;
use App\Models\NewseventModel;
use App\Models\OrdergalleryModel;
use App\Models\VideogalleryModel;

class Ksbn extends BaseController
{

    protected $news;
    protected $video;
    protected $foto;
    protected $order;
    public function __construct()
    {
        //Do your magic here
        $this->news = new NewseventModel();
        $this->video = new VideogalleryModel();
        $this->foto = new GalleryModel();
        $this->order = new OrdergalleryModel();
    }


    public function index()
    {
        //
        // $order = $this->order->getorder();
        $data = [
            'news' => $this->news->getNews(),
            'video' => $this->video->getVideo(),
            // 'order' => $order,
            'order' => $this->order->getorder(),
        ];
        // dd($data['order'][0]->gallerygambar);
        return view('website/pages/home', $data);
    }
}
