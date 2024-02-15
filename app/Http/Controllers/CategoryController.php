<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\SEOMeta;

class CategoryController extends Controller
{
    function index($slugs){
        $category = ProductCategory::find($slugs);
        dd($category);
        SEOMeta::setTitle('Category');
        SEOTools::setDescription('Cat');
        SEOMeta::addKeyword(['cat', 'cat', 'catt']);
        SEOMeta::setCanonical('https://synexdigital.com' . request()->getPathInfo());
        return view('frontend.category',['slugs' => $slugs]);
    }
}
