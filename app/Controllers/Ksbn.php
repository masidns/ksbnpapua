<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NewseventModel;
use App\Models\VideogalleryModel;

class Ksbn extends BaseController
{

    protected $news;
    protected $video;
    public function __construct()
    {
        //Do your magic here
        $this->news = new NewseventModel();
        $this->video = new VideogalleryModel();
    }


    public function index()
    {
        //
        $data = [
            'news' => $this->news->getNews(),
            'video' => $this->video->getVideo(),
        ];
        // dd($data['video']);
        return view('website/pages/home', $data);
    }
}
