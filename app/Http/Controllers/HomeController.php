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

    public function internet()
    {
        return view('product-internet-services');
    }
    public function vpn()
    {
        return view('product-vpn-services');
    }
}
