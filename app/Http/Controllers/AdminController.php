<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class AdminController extends Controller
{
    public function view_category(){

        $data = category::all();

       return view('admin/category', compact('data'));

    }

    public function delete_category($id){

        $data = category::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'Category Deleted Successfully');
    }

    public function add_category(Request $request){

        $data = new category;

        $data->category_name=$request->category;

        $data->save();

        return redirect()->back()->with('message', 'Category Added Successfully');

    }

    public function view_product(){

        $data = product::all();

       return view('admin.product', compact('data'));

    }

    public function add_product(Request $request){

        $data = new product;

        $data->title=$request->title;

        $data->save();

        return redirect()->back()->with('message', 'Product Added Successfully');

    }
}
