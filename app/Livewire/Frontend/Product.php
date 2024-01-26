<?php

namespace App\Livewire\Frontend;

use App\Helpers\CookieSD;
use App\Models\Product as ModelsProduct;
use Livewire\Component;


class Product extends Component
{
    public function addToCart($productId)
    {
        // CookieSD::removeFromCookie($productId);
        CookieSD::addToCookie($productId);
        // Emit an event to notify other components
        $x = $this->emit('productAddedToCart');
        dd($x);
    }


    public function render()
    {
        $latest     = ModelsProduct::latest()->get()->take(8);
        $featured   = ModelsProduct::where('featured', 1)->latest()->get()->take(8);
        $popular    = ModelsProduct::where('popular', 1)->latest()->get()->take(8);
        return view('livewire..frontend.product', [
            'latests'       => $latest,
            'featureds'     => $featured,
            'populars'      => $popular,
        ]);
    }
}
