<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NewseventModel;

class Ksbn extends BaseController
{

    protected $news;
    public function __construct()
    {
        //Do your magic here
        $this->news = new NewseventModel();
    }


    public function index()
    {
        //
        $data = [
            'news' => $this->news->getNews(),
        ];
        // dd($data);
        return view('website/pages/home', $data);
    }
}
