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
        $categories = Category::all();
        $products = Product::all();
        return view('client.dashboard')->with('categories', $categories)->with('products', $products);
    }

    public function home()
    {
        $category = Category::all();
        $product = Product::where('state', 'Accepted')->get();
        return view('home')->with('category', $category)->with('product', $product);
    }


    public function getPartialView($partialName)
    {

        switch ($partialName) {
            case "dashbord":
                $categories = Category::all();
                $products = Product::all();
                return view('partials.partialClientsPosts')->with('categories', $categories)->with('products', $products);;
            case "profile":
                return view('partials.partialClientProfile');
            default:
                return   response()->json('Partial View NotFound');
        }
    }
}
