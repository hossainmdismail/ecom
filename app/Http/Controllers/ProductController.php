<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function single($slugs){
        $product = Product::where('slugs',$slugs)->first();
        return view('frontend.productView',[
            'product' => $product,
        ]);
    }
}
