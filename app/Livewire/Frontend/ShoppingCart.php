<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class ShoppingCart extends Component
{
    public $products;

    protected $listeners = ['productAddedToCart' => 'loadCart'];

    private function loadCart()
    {
        $this->products = Product::where('stock_status',1)->get()->take(2);
        // // Retrieve product IDs from the cookie
        // $productIds = json_decode(request()->cookie('cart'), true);

        // // Fetch product details based on IDs
        // dd($productIds);
    }

    public function render()
    {
        return view('livewire..frontend.shopping-cart');
    }
}
