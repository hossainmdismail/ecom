<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
     //home
     function home(){
        return view('frontend.index');
    }
}
