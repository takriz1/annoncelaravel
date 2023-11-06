<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function add(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'qtt' => 'required',
            'image' => 'required',
        ]);

        $produit = new Product();
        $produit->name = $request->name;
        $produit->category_id = $request->categorie;
        $produit->description = $request->description;
        $produit->price = $request->price;
        $produit->qtt = $request->qtt;


        $newname = uniqid();// unique name
        $image = $request->file('image');
        $newname.=".".$image->getClientOriginalExtension();// JPG
        $destinationPath = 'uploads.produits';
        $image->move($destinationPath, $newname);

        $produit->image = $newname;
        if($produit->save()){
            return view('client.postAdd') ;
        }else{
            echo "error";
        }
    }
    public function ProductList(){
        $products = Product::all();
        $categories = Category::all();
        return view('admin.products.index')->with('products', $products)->with('categories', $categories);
    }

}
