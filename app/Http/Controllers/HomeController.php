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
        $categories = Category::all();
        $products = Product::all()->where('state', '=', 'Accepted');
        /* if (Auth::user()) {

            if (Auth::user()->role == "admin") {
                return  Redirect('/admin/dashboard');
            } else if (Auth::user()->role == "user") {
                return Redirect('/user/home');
            } else {
                return view('home')->with('category', $category)->with('product', $product);
            }
        } else {
            return view('home')->with('category', $category)->with('product', $product);
        }*/

        return view('home')->with('categories', $categories)->with('products', $products);
    }

    public function homeCategories()
    {
        $categories = Category::all();
        $products = Product::all()->where('state', '=', 'Accepted');
        return view('homeCategories')->with('categories', $categories)->with('products', $products);
    }

    public function contact()
    {
        return view('contact');
    }

    public function searchProducts(Request $request)
    {

        $acceptedProducts = Product::where('state', '=', 'Accepted');
        $searchingProducts = $acceptedProducts->where('name', 'LIKE', '%' . $request->searchingWord . '%')
            ->orWhere('description', 'LIKE', '%' . $request->searchingWord . '%')->get();
        return view('partials.partialProducts')->with('products', $searchingProducts);
    }
    public function productsByCategory($id)
    {

        $products = Product::all()->where('state', '=', 'Accepted')
            ->where('category_id', '=', $id);
        return view('partials.partialProducts')->with('products', $products);
    }

    public function getAllProducts()
    {
        $products = Product::where('state', '=', 'Accepted')->paginate(3);
        return view('partials.partialProducts')->with('products', $products);
    }
}
