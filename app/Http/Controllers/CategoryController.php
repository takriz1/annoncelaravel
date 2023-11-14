<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Validator;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{

    public function index(Request $request)
    {
        return view('admin.category.index');
    }

    public function getCategories(Request $request)
    {

        if ($request->ajax()) {
            return DataTables::of(Category::query())
                ->addIndexColumn()

                ->addColumn('image_c', function ($row) {
                    return  asset('uploads/categories/') . '/' . $row->image_c;
                })

                ->addColumn('action', function ($row) {

                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editCategory">Edit</a>';
                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteCategory">Delete</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    // Add New Category

    public function add(Request $request)
    {
        /* $request->validate([
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
        }*/

        $validator = Validator::make($request->all(), [
            'categoryName' => 'required',
            'categoryDescription' => 'required',
            'categoryImage' => 'required',
        ]);

        if (!$validator->passes()) {
            return response()->json(['code' => 0, 'error' => $validator->errors()->toArray()]);
        } else {

            $category = new Category();
            $category->libelle_c = $request->categoryName;
            $category->description_c = $request->categoryDescription;
            //file upload
            $newname = uniqid(); // unique name
            $image = $request->file('categoryImage');
            $newname .= "." . $image->getClientOriginalExtension(); // JPG
            $destinationPath = 'uploads/categories';
            $image->move($destinationPath, $newname);


            $category->image_c = $newname;
            $query = $category->save();

            if (!$query) {
                return response()->json(['code' => 0, 'msg' => 'Something went wrong']);
            } else {
                return response()->json(['code' => 1, 'msg' => 'New Category has been successfully saved']);
            }
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
            $file_path = public_path() . '/uploads/' . $cat->image_c;
            unlink($file_path);

            //upload new image
            $newname = uniqid(); // unique name
            $image = $request->file('image');
            $newname .= "." . $image->getClientOriginalExtension(); // JPG
            $destinationPath = 'uploads';
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
