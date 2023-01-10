<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('add-product')->with(['category' => $category]);
    }

    public function store(Request $request)
    {
        $product = new Product;
        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->SKU = $request->SKU;
        $product->description = $request->des;
        $image = $request->file('image');
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->file('image')->move('images/products/', $imagename);
        $product->image = $imagename;

        $product->save();
        return redirect('add-product');
    }

    public function view()
    {
        $product = Product::all();
        foreach ($product as $pro) {
            $temp = Category::find($pro->category_id);
            $pro['category_name'] = $temp->name;
        }
        return view('product')->with(['product' => $product]);
    }

    public function delete($id)
    {
        Product::find($id)->delete();
        return redirect()->back();
    }

    public function all_product()
    {
        $product = Product::all();
        return view('all-product')->with(['products' => $product]);
    }

    public function specific_product($id)
    {
        $product = Product::find($id);
        $review = Review::all();
        return view('specific-product')->with(['product' => $product, 'review' => $review]);
    }
}