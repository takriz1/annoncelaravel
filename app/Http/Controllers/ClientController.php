<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Validator;

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

    public function getClientPostsPartialView()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('partials.partialClientsPosts')->with('categories', $categories)->with('products', $products);
    }


    public function postDetails($idProduct)
    {
        $categories = Category::all();
        $product = Product::with("user")->find($idProduct);
        return view('client.postDetails')->with('categories', $categories)->with('product', $product);
    }

    public function editPostShow($idProduct)
    {
        $product = Product::with("user")->find($idProduct);
        return response()->json([
            'product' => $product
        ]);
    }



    public function editPostSubmit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'qtt' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            //return response()->json(['errors' => $validator->errors()->all()]);
            return response()->json(['code' => 0, 'errors' => $validator->errors()->toArray()]);
        }
        $id = $request->id;
        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
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
            //return response()->json(['success' => 'Data is successfully added']);
            return response()->json(['code' => 1, 'msg' => 'Data is successfully added', 'errors' => null]);
        } else {
            //return response()->json(['errors' => 'Problem when saving post']);
            return response()->json(['code' => 0, 'msg' => 'Something went wrong', 'errors' => null]);
        }
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
