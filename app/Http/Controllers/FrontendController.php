<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Campaign;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
     //home
     function home(){
        $banner = Banner::all();
        $header_one = Campaign::where('image_type','vertical')->first();
        $header_two = Campaign::where('image_type','horizontal')->first();
        $category = ProductCategory::all();
        // dd($header_one);
        return view('frontend.index',[
            'banners'       => $banner,
            'header_one'    => $header_one,
            'header_two'    => $header_two,
            'categories'    => $category,
        ]);
    }
}
