<?php

namespace App\Http\Controllers;

use App\Models\AmazingProduct;
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
        ->with('amazingProducts' , $amazingProducts)
        ;
    }
}
