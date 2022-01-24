<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GalleryModel;
use App\Models\NewseventModel;
use App\Models\OrdergalleryModel;
use App\Models\ProfilModel;
use App\Models\VideogalleryModel;

class Ksbn extends BaseController
{

    protected $news;
    protected $video;
    protected $foto;
    protected $order;
    protected $profil;
    public function __construct()
    {
        //Do your magic here
        $this->news = new NewseventModel();
        $this->video = new VideogalleryModel();
        $this->foto = new GalleryModel();
        $this->order = new OrdergalleryModel();
        $this->profil = new ProfilModel();
    }


    public function index()
    {
        //
        // $order = $this->order->getorder();
        $data = [
            'news' => $this->news->getTags(),
            'video' => $this->video->getVideo(),
            'foto' => $this->foto->getGallery(),
            // 'order' => $order,
            'order' => $this->order->getorder(),
        ];
        // dd($data['order'][0]->gallerygambar);
        return view('website/pages/home', $data);
    }

    public function profil()
    {
        # code...
        $data = [
            'profil' => $this->profil->getprofile(),
        ];
        return view('website/pages/profil', $data);
    }

    public function news()
    {
        # code...
        $data = [
            'news' => $this->news->getNews(),
            'tags' => $this->news->getTags(),
        ];
        return view('website/pages/news', $data);
    }
    public function newsdetail($slug)
    {
        # code...
        $data = [
            'news' => $this->news->getNews($slug),
            'tags' => $this->news->getTags(),
        ];
        return view('website/pages/newsdetail', $data);
    }
    public function berita()
    {
        # code...
        $data = [
            'news' => $this->news->berita(),
            'tags' => $this->news->getTags(),
        ];
        return view('website/pages/news', $data);
    }

    public function pengumuman()
    {
        # code...
        $data = [
            'news' => $this->news->berita(),
            'tags' => $this->news->getTags(),
        ];
        return view('website/pages/news', $data);
    }
}
