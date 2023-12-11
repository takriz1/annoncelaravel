<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function dashboard()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('client.dashboard')->with('categories', $categories)->with('products', $products);
    }
    public function getAddPostForm()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('client.addPostForm')->with('categories', $categories)->with('products', $products);
    }
}
