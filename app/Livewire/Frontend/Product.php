<?php

namespace App\Livewire\Frontend;

use App\Models\Product as ModelsProduct;
use Illuminate\Support\Facades\Cookie;
use Livewire\Component;

class Product extends Component
{
    public function addToCart($productId)
    {
        $cart = json_encode([$productId]);

        // Set the cookie
        Cookie::queue('cart', $cart, 60);

        // Update Livewire component state
        dd(Cookie::get('cart'));
        $this->emit('productAddedToCart');

        // Optionally, you can use the following line to see the cookie value immediately
    }

    public function render()
    {
        $latest = ModelsProduct::latest()->get()->take(8);
        return view('livewire..frontend.product',[
            'latests'       => $latest,
        ]);
    }
}
