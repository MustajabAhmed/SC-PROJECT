<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Auth;

class WishlistController extends Controller
{
    public function store(Request $request,$id){
        $wishlist = new Wishlist;
        $wishlist->user_id = Auth::user()->id;
        $wishlist->product_id = $id;
        $wishlist->save();
        return redirect()->back();
    }

    public function delete(Request $request,$id){
        Wishlist::where('user_id',Auth::user()->id)->where('product_id',$id)->delete();
        return redirect()->back();
    }

    public function view(){
        $wishlist = Wishlist::where('user_id',Auth::user()->id)->get();
        $i=0;
        foreach($wishlist as $wish){
            $temp[$i] = $wish->product_id;
            $i++;
        }
        // dd($temp);
        if(!isset($temp)){
            $temp[0] = 0;
        }
        $product = Product::whereIn('id',$temp)->get();
        // dd($product);
        return view('wishlist')->with(['product'=>$product]);

    }
}
