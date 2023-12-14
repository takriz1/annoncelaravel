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
        $product = Product::where('state', 'Accepted')->get();
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
   /* public function category(){
        $categories = Category::all();

        return view('category', compact('categories'));
    }
    public function getProducts($categoryId)
    {
    if($categoryId == 99){
            $category = Category::with('products')->get();

        }else{
            $category = Category::with('products')->find($categoryId);
        }
        return view('categoriesProducts', compact('category'));
        $category = Category::with('products')->find($categoryId);
        return view('categoriesProducts', compact('category'));
    }
    public function Products(Request $request)
    {
        $products = Product::paginate(2); // Change the value as needed
        return view('PaginationProduct', compact('products'));
    } */
    public function category()
    {
        $categories = Category::all();
        $products = Product::paginate(2);

        return view('category', compact('products', 'categories'));
    }

    public function getProductsByCategory(Request $request)
    {
        $categoryId = $request->input('category_id');
        $products = Product::where('category_id', $categoryId)->paginate(2);

        return view('categoriesProducts', compact('products'));
    }


}
