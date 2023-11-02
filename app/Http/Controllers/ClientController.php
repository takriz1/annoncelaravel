<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }

    //
    public function dashboard()
    {
        return view('client.dashboard');
    }
    public function addPost()
    {
        return view('client.postAdd');
    }
    public function posts()
    {
        return view('client.posts');
    }
}
