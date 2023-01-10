<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        // dd('here');
        return view('add-category');
    }

    public function store(Request $request){
        $category = new Category;
        $category->name = $request->name;
        $image = $request->file('image');
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->file('image')->move('images/category/',$imagename);
        $category->image = $imagename;
        $category->save();
        return redirect()->back();
    }

    public function view(){
        $category = Category::all();
        return view('category')->with(['category'=>$category]);
    }

    public function delete($id){
        Category::find($id)->delete();
        return redirect()->back();
    }

    public function all_category(){
        $category = Category::all();
        return view('pages.all-catagory')->with(['category'=>$category]);
    }
}
