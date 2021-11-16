<?php

namespace App\Http\Controllers;

use App\Models\AmazingProduct;
use App\Models\Comment;
use App\Models\Slider;
use Illuminate\Http\Request;

class GlobalController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $amazingProducts = AmazingProduct::all();
        // $categories = Category::all();


        // return $categories;
        return view('global.index')
        // ->with('categories', $categories)
        ->with('sliders' , $sliders)
        ->with('amazingProducts' , $amazingProducts);
    }

    public function commentStore(Request $request){

        $post_id = $request->post_id;

        Comment::query()->create([
            'user_id' => auth()->user()->id,
            'product_id' => $request->product_id,
            'reply_id'=> $request->reply_id,
            'body' => $request->body
        ]);

        return redirect()->back();

    }


}
