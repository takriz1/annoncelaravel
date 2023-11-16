<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function dashboard()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('client.dashboard')->with('categories', $categories)->with('products', $products);
    }
    public function idPost()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('client.posts')->with('categories', $categories)->with('products', $products);
    }
    public function add(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'qtt' => 'required',
            'image' => 'required',
        ]);

        $products = new Product();
        $products->name = $request->name;
        $products->category_id = $request->categorie;
        $products->user_id = $request->userid;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->qtt = $request->qtt;


        $newname = uniqid(); // unique name
        $image = $request->file('image');
        $newname .= "." . $image->getClientOriginalExtension(); // JPG
        $destinationPath =  'uploads/products';
        $image->move($destinationPath, $newname);

        $products->image = $newname;
        if ($products->save()) {
            return redirect()->back()->with('message', 'Thanks for Posting');
        } else {
            echo "error";
        }
    }
    public function ProductList()
    {
        $products = Product::all();
        $category = Category::all();
        return view('admin.products.index')->with('products', $products)->with('category', $category);
    }
    public function destroy($id)
    {
        $product = Product::find($id);
        $file_path = public_path() . '/uploads/products/' . $product->image;
        unlink($file_path);
        if ($product->delete()) {
            return redirect()->back();
        } else {
            echo "error";
        }
    }
    public function edit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'qtt' => 'required',
            'image' => 'required',
        ]);
        $id = $request->id_prod;
        $product = Product::find($id);

        $product->name = $request->name;
        $product->description = $request->desc;
        $product->price = $request->price;
        $product->qtt = $request->qtt;

        //upload image
        if ($request->file('image')) {

            // supprimer image precedent
            $file_path = public_path() . '/uploads/products' . $product->image;
            unlink($file_path);

            //upload new image
            $newname = uniqid(); // unique name
            $image = $request->file('image');
            $newname .= "." . $image->getClientOriginalExtension(); // JPG
            $destinationPath =  'uploads/products';
            $image->move($destinationPath, $newname);

            $product->image = $newname;
        }
        if ($product->update()) {
            return redirect()->back();
        } else {
            echo "error";
        }
    }
    public function search(Request $request)
    {
        $product = Product::where('name', 'LIKE', '%' . $request->customword . '%')->get();
        $category = Category::all();
        return view('client.shop')->with('category', $category)->with('product', $product);
    }
}
