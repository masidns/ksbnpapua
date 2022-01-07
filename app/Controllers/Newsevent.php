<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NewseventModel;

class Newsevent extends BaseController
{

    protected $newsevent;
    public function __construct()
    {
        //Do your magic here
        $this->newsevent = new NewseventModel();
        session()->set(['active' => 'News']);
    }


    public function index()
    {
        //
        $data = [
            'title' => 'KSBN PAPUA - NEWS EVENT',
            'news' => $this->newsevent->getNews(),
        ];
        return view('admin/news/index', $data);
    }

    public function create()
    {
        # code...
        $data = [
            'title' => 'KSBN PAPUA - NEWS CREATE',
            'news' => $this->newsevent->getNews(),
        ];
        return view('admin/news/create', $data);
    }
}
