<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        $array = json_decode($product->images);

        $comments = Comment::with('replies')
        ->where('reply_id','=',0)
        ->where('product_id','=',$product->id)
        ->get(['id','reply_id','body']);

        return view('product.show')
            ->with('array',$array )
            ->with('comments',$comments)
            ->with('product',$product);
    }

}
