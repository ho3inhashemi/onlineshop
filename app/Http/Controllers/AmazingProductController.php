<?php

namespace App\Http\Controllers;

use App\Models\AmazingProduct;
use App\Models\Comment;
use Illuminate\Http\Request;

class AmazingProductController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AmazingProduct  $amazingProduct
     * @return \Illuminate\Http\Response
     */

        public function __invoke($slug)
        {
            $amazingProduct = AmazingProduct::query()->where('slug',$slug)->firstOrFail();

            // dd($amazingProduct->id);

            $comments = Comment::with('replies')
                ->where('reply_id','=',0)
                ->where('product_id','=',$amazingProduct->id)
                ->get(['id','reply_id','body']);

            return view('global.single-amazingproduct')
            ->with('amazingProduct', $amazingProduct)
            ->with('comments',$comments);

        }

}
