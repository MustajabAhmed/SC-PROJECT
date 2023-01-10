<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Auth;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $cart = new Cart;
        $cart->user_id = Auth::user()->id;
        $cart->product_id = $request->product_id;
        $cart->quantity = $request->quantity;
        $cart->save();
        return redirect()->back();
    }

    public function remove($id)
    {
        Cart::where('user_id', Auth::user()->id)->where('product_id', $id)->delete();
        return redirect()->back();
    }

    public function view()
    {
        $cart = Cart::where('user_id', Auth::user()->id)->get();
        $i = 0;
        foreach ($cart as $ca) {
            $product[$i] = Product::where('id', $ca->product_id)->first();
            $ca['product_name'] =  $product[$i]->name;
            $ca['product_price'] =  $product[$i]->price;
            $ca['product_id'] =  $product[$i]->id;
            $ca['product_image'] =  $product[$i]->image;
            $i++;
        }
        // dd($cart);
        return view('pages.checkout')->with(['cart' => $cart]);
    }
}
