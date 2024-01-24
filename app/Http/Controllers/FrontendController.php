<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
     //home
     function home(){

        $category = ProductCategory::all();
        // dd($header_one);
        return view('frontend.index',[
            'categories'    => $category,
        ]);
    }
}
