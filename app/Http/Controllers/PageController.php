<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['home', 'about', 'contact']]);
    }

    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function shopItem()
    {
        return view('shopitem');
    }

    public function shopPage()
    {
        return view('shoppage');
    }
}