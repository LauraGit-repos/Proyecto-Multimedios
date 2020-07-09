<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Photographs extends Controller
{
    public function photograph()
    {
        return view('photographs/add-photographs');
    }
}
