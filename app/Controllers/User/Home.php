<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index(): string
    {
        return view('pages/user/home');
    }
    public function contact(): string
    {
        return view('pages/user/contact');
    }
    public function about(): string
    {
        return view('pages/user/about');
    }
}
