<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Mail;
use App\Mail\PostUpdatedMail;
use App\Mail\SampleMail;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();
        return response()->json([
            "status" => 1,
            "data" => $products
        ]);
    }


    public function searchProducts($searchingWord)
    {
        $acceptedProducts = Product::where('state', '=', 'Accepted');
        $searchingProducts = $acceptedProducts->where('name', 'LIKE', '%' . $searchingWord . '%')
            ->orWhere('description', 'LIKE', '%' . $searchingWord . '%')->paginate(3);


        return response()->json([
            "status" => 1,
            "data" => $searchingProducts
        ]);
    }

    public function productsByCategory($id)
    {

        $products = Product::where('state', '=', 'Accepted')
            ->where('category_id', '=', $id)->paginate(3);
        return response()->json([
            "status" => 1,
            "data" => $products
        ]);
    }

    public function createProduct(Request $request)
    {
        // validation
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'qtt' => 'required',
            'image' => 'required',
            'category' => 'required',
            'userId' => 'required'
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->category_id = $request->category;
        $product->user_id = $request->userId;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->qtt = $request->qtt;

        $newname = uniqid(); // unique name
        $image = $request->file('image');
        $newname .= "." . $image->getClientOriginalExtension(); // JPG
        $destinationPath =  'uploads/products';
        $image->move($destinationPath, $newname);
        $product->image = $newname;

        if ($product->save()) {

            #begin region sendMail
            # wiki smtp server :  https://mailtrap.io/inboxes/2494280/messages
            # wiki algo SendMail : https://www.codersvibe.com/how-to-send-email-in-laravel-8

            $userFullName = Auth::user()->full_name; //Auth::user()->first_name . ' ' . Auth::user()->last_name;
            $details = [
                'title' => 'Add a New Product : ' . $product->name,
                'body' => 'A new product named : ' . $product->name . ' has been added by the user :' . $userFullName
            ];

            Mail::to('admin@admin.com')->send(new SampleMail($details));

            #end region sendMail

            return response()->json([
                "status" => 1,
                "message" => "Product has been created",
                "data" => $product
            ]);
        } else {
            return response()->json([
                "status" => 0,
                "message" => "Error while creating product!"
            ]);
        }
    }


    public function updateProduct(Request $request)
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

            return response()->json([
                "status" => 1,
                "message" => "Editing product with Success",
                "data" => $product
            ]);
        } else {

            return response()->json([
                "status" => 0,
                "message" => "Error while editing Product!",

            ]);
        }
    }

    public function getProduct($id)
    {
        $product = Product::with("user")->find($id);
        if ($product)
            return response()->json([
                "status" => 1,
                "message" => "Get Product with Success",
                "data" => $product
            ]);
        else
            return response()->json([
                "status" => 0,
                "message" => "Product Not Found",
            ]);
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $file_path = public_path() . '/uploads/products/' . $product->image;
        unlink($file_path);
        if ($product->delete()) {
            return response()->json([
                "status" => 1,
                "message" => "destroy Product with Success",
                "data" => $product
            ]);
        } else {
            return response()->json([
                "status" => 0,
                "message" => "Error when destroy product",
                "data" => $product
            ]);
        }
    }


    public function rejected($idprod)
    {
        $product = Product::with("user")->find($idprod);
        $product->state = 'Rejected';
        if ($product->update()) {
            #begin region sendMail
            # wiki smtp server :  https://mailtrap.io/inboxes/2494280/messages
            # wiki algo SendMail : https://www.codersvibe.com/how-to-send-email-in-laravel-8

            $details = [
                'state' => 'Rejected',
                'title' => 'Rjected Product : ' . $product->name,
                'body' => 'The product named : ' . $product->name . ' has been rejected by the administrator '
            ];

            //  get the mail of Created Product
            $userMail = $product->user->email;
            Mail::to($userMail)->send(new PostUpdatedMail($details));

            #end region sendMail
            return response()->json([
                "status" => 1,
                "message" => "Product Rejected",
                "data" => $product
            ]);
        } else {
            return response()->json([
                "status" => 0,
                "message" => "Error while rejecting Product!"
            ]);
        }
    }
    public function accepted($idprod)
    {
        $product = Product::with("user")->find($idprod);
        $product->state = 'Accepted';
        if ($product->update()) {
            #begin region sendMail
            # wiki smtp server :  https://mailtrap.io/inboxes/2494280/messages
            # wiki algo SendMail : https://www.codersvibe.com/how-to-send-email-in-laravel-8

            $details = [
                'state' => 'Accepted',
                'title' => 'Accepted Product : ' . $product->name,
                'body' => 'The product named : ' . $product->name . ' has been accepted by the administrator '
            ];

            //  get the mail of Created Product
            $userMail = $product->user->email;
            Mail::to($userMail)->send(new PostUpdatedMail($details));

            #end region sendMail
            return response()->json([
                "status" => 1,
                "message" => "Product Accepted",
                "data" => $product
            ]);
        } else {
            //todo $notification
            return response()->json([
                "status" => 0,
                "message" => "Error while accepting Product!"
            ]);
        }
    }
}
