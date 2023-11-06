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
    public function dashboard()
    {
        return view('client.dashboard');
    }
    public function ClientPosts()
    {
        $categories = Category::all();
        $produits = Product::all();
        return view('client.postAdd')->with('categories', $categories)->with('produits', $produits);
    }
    public function idPost(){
        $categories = Category::all();
        $produits = Product::all();
        return view('client.posts')->with('categories', $categories)->with('produits', $produits);
    }

}
