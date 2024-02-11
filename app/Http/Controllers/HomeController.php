<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('backend.index');
    }

    public function campaign($id){
        $campaign = Campaign::find($id);
        $products = $campaign->products;

        return view('frontend.campaign',[
            'products' => $products,
            'campaign' => $campaign,
        ]);
    }

    public function aboutus(){
        return view('frontend.about');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function privacy(){
        return view('frontend.privacy');
    }
}
