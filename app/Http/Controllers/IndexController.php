<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index/index');
    }

    
    public function pictures()
    {
        return view('index/pictures');
    }

    public function about()
    {
        return view('index/about');
    }

    public function contact()
    {
        return view('index/contact');
    }
}
