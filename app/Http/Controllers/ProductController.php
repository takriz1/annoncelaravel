<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Mail;
use App\Mail\PostUpdatedMail;
use App\Mail\SampleMail;

class ProductController extends Controller
{
    //
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
    public function add(Request $request)
    {


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

            $userFullName = Auth::user()->getFullNameAttribute(); //Auth::user()->first_name . ' ' . Auth::user()->last_name;
            $details = [
                'title' => 'Add a New Product : ' . $product->name,
                'body' => 'A new product named : ' . $product->name . ' has been added by the user :' . $userFullName
            ];

            Mail::to('admin@admin.com')->send(new SampleMail($details));

            #end region sendMail

            $notification = array(
                'messege' => 'Thanks for Posting',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'Error while posting Product!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
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
            $notification = array(
                'messege' => 'Editing product with Success',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'Error while editing Product!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
    public function search(Request $request)
    {
        $product = Product::where('name', 'LIKE', '%' . $request->customword . '%')->get();
        $category = Category::all();
        return view('client.shop')->with('category', $category)->with('product', $product);
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

            $notification = array(
                'messege' => 'Product Rejected',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'Error while rejecting Product!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
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

            $notification = array(
                'messege' => 'Product Accepted',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        } else {
            //todo $notification

            $notification = array(
                'messege' => 'Error while accepting Product',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
}
