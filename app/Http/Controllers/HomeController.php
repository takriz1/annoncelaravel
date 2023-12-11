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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    // Begin Region Home
    public function index($idCategory = null)
    {
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
        $categories = Category::all();
        if ($idCategory > 0)
            $products = Product::all()->where('state', '=', 'Accepted')
                ->where('category_id', '=', $idCategory);
        else
            $products = Product::all()->where('state', '=', 'Accepted');

        return view('home')->with('categories', $categories)->with('products', $products);
    }
    public function search(Request $request)
    {

        $categories = Category::all();
        $acceptedProducts = Product::where('state', '=', 'Accepted');
        $searchingProducts = $acceptedProducts->where('name', 'LIKE', '%' . $request->searchingWord . '%')
            ->orWhere('description', 'LIKE', '%' . $request->searchingWord . '%')->get();
        return view('home')->with('categories', $categories)->with('products', $searchingProducts);
    }

    // end Region Home

    //begin region Home Categories
    public function homeCategories()
    {
        $categories = Category::all();

        return view('homeCategories')->with('categories', $categories);
    }


    public function searchProducts(Request $request)
    {
        $acceptedProducts = Product::where('state', '=', 'Accepted');
        $searchingProducts = $acceptedProducts->where('name', 'LIKE', '%' . $request->searchingWord . '%')
            ->orWhere('description', 'LIKE', '%' . $request->searchingWord . '%')->paginate(3);


        return view('partials.partialProducts')->with('products', $searchingProducts);
    }

    public function productsByCategory($id)
    {

        $products = Product::where('state', '=', 'Accepted')
            ->where('category_id', '=', $id)->paginate(3);
        return view('partials.partialProducts')->with('products', $products);
    }
    // end region home Categories

    public function contact()
    {
        return view('contact');
    }
}
