<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
     public function chart()
    {
        return view('admin.chart');
    }

    public function form()
    {
        return view('admin.form');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function table()
    {
        return view('admin.table');
    }

    public function sweetalert()
    {
        return view('admin.sweetalert');
    }
}
