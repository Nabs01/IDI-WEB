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

    public function internet()
    {
        return view('product-internet-services');
    }

    public function vpn()
    {
        return view('product-vpn');
    }

    public function manage()
    {
        return view('product-manage-service');
    }

    public function tripleplay()
    {
        return view('product-triple-service');
    }

    public function neutralhost()
    {
        return view('product-neutral-host');
    }
}
