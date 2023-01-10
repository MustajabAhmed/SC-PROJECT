<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class reviewController extends Controller
{
    public function index(Request $request)
    {
        // dd('here');
        // dd($request->all());
        $review = new Review();
        $review->description = $request->description;
        $review->name = $request->name;
        $review->email = $request->email;
        $review->rating = $request->rating;
        $review->save();
        return redirect()->back();
    }

}