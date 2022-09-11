<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    
    public function about()
    {
        return view('about-us');
    }

    public function product()
    {
        return view('product');
    }
}
