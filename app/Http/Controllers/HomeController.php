<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\SEOMeta;

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
        SEOMeta::setTitle('About');
        SEOMeta::addMeta('title', 'Authentic Bangladeshi Handicrafts: Explore Artisan Creations at Familly Bazar');
        SEOTools::setDescription('Discover the rich heritage of Bangladesh through our exquisite handicrafts. Handmade with love by local artisans, our collection reflects the beauty and culture of Bangladesh. Shop now for unique pieces at Familly Bazar');
        SEOMeta::addKeyword('Bangladeshi Crafts, Handwoven Textiles, Dhaka Topi');
        SEOMeta::setCanonical('https://famillybazar.com' . request()->getPathInfo());
        return view('frontend.about');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function privacy(){
        SEOMeta::setTitle('Policy');
        SEOMeta::addMeta('title', 'Privacy Policy | Familly Bazar Bangladesh');
        SEOTools::setDescription('Discover the rich heritage of Bangladesh through our exquisite handicrafts. Handmade with love by local artisans, our collection reflects the beauty and culture of Bangladesh. Shop now for unique pieces at Familly Bazar');
        SEOMeta::addKeyword('Bangladeshi Crafts, Handwoven Textiles, Dhaka Topi');
        SEOMeta::setCanonical('https://famillybazar.com' . request()->getPathInfo());
        return view('frontend.privacy');
    }
}
