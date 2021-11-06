<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($id){

        $categories = Category::findOrFail($id);
        $products = Product::where('category_id','=',$id)->get();

        return view('category.show')
        ->with('categories', $categories)
        ->with('products', $products);
    }
}
