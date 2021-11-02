<?php

namespace App\Http\Controllers;

use App\Models\AmazingProduct;
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

            return view('global.single-amazingproduct')
            ->with('amazingProduct', $amazingProduct);

        }

}
