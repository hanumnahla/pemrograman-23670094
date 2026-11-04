<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.home');
    }

    public function about()
    {
        return view('landing.about');
    }

    public function menu()
    {
        return view('landing.menu');
    }

    public function blog()
    {
        return view('landing.blog');
    }

    public function testimoni()
    {
        return view('landing.testimoni');
    }

    public function checkout()
    {
        return view('landing.checkout');
    }
}