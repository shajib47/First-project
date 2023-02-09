<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class PagesController extends Controllers
{
    public function home()
    {
        return view('home');
    }

    public function login()
    {
        return view('login');
    }
}
