<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()) {

            if (Auth::user()->role == "admin") {
                return  Redirect('/admin/dashboard');
            } else if (Auth::user()->role == "user") {
                return Redirect('/user/account');
            } else {
                return view('home');
            }
        } else {
            return view('home');
        }
    }
}
