<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }

    //

    // public function home()
    // {
    //     $categories = Category::all();
    //     $products = Product::all();
    //     return view('home')->with('categories', $categories)->with('products', $products);
    // }






}
