<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
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
        $products = Product::all();
        $category = Category::all();
        return view('admin.dashboard')->with('products', $products)->with('category', $category);
    }
}
