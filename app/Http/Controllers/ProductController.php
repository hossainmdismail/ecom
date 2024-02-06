<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function single($slugs){

        return view('frontend.productView',[
            'slugs' => $slugs,
        ]);
    }
}
