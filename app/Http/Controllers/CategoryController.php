<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Display Categories
    public function list()
    {
        $categories = Category::all();
        return view('admin.category.index')->with('categories', $categories);
    }

    // Add New Category

    public function add(Request $request)
    {
        $request->validate([
            'lib' => 'required',
            'desc' => 'required',
            'image' => 'required',
        ]);
        $category = new Category();
        $category->libelle_c = $request->lib;
        $category->description_c = $request->desc;

        //file upload


        $newname = uniqid(); // unique name
        $image = $request->file('image');
        $newname .= "." . $image->getClientOriginalExtension(); // JPG
        $destinationPath = 'uploads/categories';
        $image->move($destinationPath, $newname);


        $category->image_c = $newname;

        if ($category->save()) {
            return redirect()->back();
        } else {
            echo "error";
        }
    }

    // Delete Category
    public function destroy($id)
    {
        $categorie = Category::find($id);
        $file_path = public_path() . '/uploads/categories/' . $categorie->image_c;
        unlink($file_path);
        if ($categorie->delete()) {
            return redirect()->back();
        } else {
            echo "error";
        }
    }

    // Edit Category
    public function update(Request $request)
    {
        $request->validate([
            'lib' => 'required',
            'desc' => 'required',
            'image' => 'required',
        ]);
        $id = $request->id_cat;
        $cat = Category::find($id);

        $cat->libelle_c = $request->lib;
        $cat->description_c = $request->desc;

        //upload image
        if ($request->file('image')) {

            // supprimer image precedent
            $file_path = public_path() . '/uploads/categories/' . $cat->image_c;
            unlink($file_path);

            //upload new image
            $newname = uniqid(); // unique name
            $image = $request->file('image');
            $newname .= "." . $image->getClientOriginalExtension(); // JPG
            $destinationPath = 'uploads/categories';
            $image->move($destinationPath, $newname);

            $cat->image_c = $newname;
        }
        if ($cat->update()) {
            return redirect()->back();
        } else {
            echo "error";
        }
    }
}
