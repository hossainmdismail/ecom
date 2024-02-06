<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    function index($slugs){
        return view('frontend.category',['slugs' => $slugs]);
    }
}
