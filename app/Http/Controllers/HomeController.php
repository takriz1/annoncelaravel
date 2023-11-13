<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
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
        $category = Category::all();
        $product = Product::all();
        if (Auth::user()) {

            if (Auth::user()->role == "admin") {
                return  Redirect('/admin/dashboard');
            } else if (Auth::user()->role == "user") {
                return Redirect('/user/home');
            } else {
                return view('home')->with('category', $category)->with('product', $product);
            }
        } else {
            return view('home')->with('category', $category)->with('product', $product);
        }
    }
}
