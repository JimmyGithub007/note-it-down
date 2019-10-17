<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('site/main');
    }	

    public function login()
    {
        return view('site/login');
    }

    public function register()
    {
        return view('site/register');
    }
}