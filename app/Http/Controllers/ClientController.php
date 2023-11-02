<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function dashboard(){
        return view('guest.register');
    }
    public function home(){
        return view('homepage');
    }
}
