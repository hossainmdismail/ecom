<?php

namespace App\Livewire\Frontend;

use App\Helpers\CookieSD;
use App\Models\Product;
use Livewire\Component;

class ShoppingCart extends Component
{

    protected $listeners = ['productAddedToCart' => 'loadCart'];

    public $products = [];

    public function mount()
    {
        $this->loadCart(); // Load cart data on initial render
    }

    private function loadCart()
    {
        // $cookieData = CookieSD::getProductIds();
        // $this->products = Product::where('stock_status', 1)->get()->take(2);

        $cookieData = CookieSD::getProductIds();

        $this->products = Product::whereIn('id', $cookieData)
            ->where('stock_status', 1)
            ->get();
    }

    public function render()
    {
        return view('livewire..frontend.shopping-cart');
    }
}
