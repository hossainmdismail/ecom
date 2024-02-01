<?php

namespace App\Livewire\Frontend;

use App\Helpers\CookieSD;
use App\Models\Shipping;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;

class Checkout extends Component
{
    public $coupon = 0;

    #[Validate('required')]
    public $shippingPrice = 0;

    #[Validate('required')]
    public $name = '';

    #[Validate('required')]
    public $number = '';

    #[Validate('required')]
    public $address = '';

    #[On('post-created')]
    public function updatePostList()
    {
    }


    public function increment($id){
        CookieSD::increment($id);
        $this->dispatch('post-created');

    }

    public function decrement($id){
        CookieSD::decrement($id);
        $this->dispatch('post-created');

    }

    public function remove($id)
    {
        CookieSD::removeFromCookie($id);
        $this->dispatch('post-created');
    }

    public function save(){
        $this->validate();
    }

    public function ship($id){
        $shipping = Shipping::find($id);
        $this->shippingPrice = $shipping->price;
    }

    // public function wallet(){
    //     $total = CookieSD::data()['price'];
    //     $this->total = $total + $this->shippingPrice;
    // }

    public function render()
    {
        $product = CookieSD::data();
        $shipping = Shipping::all();
        return view('livewire.frontend.checkout', [
            'products'  => $product,
            'shippings' => $shipping,
            'total'     => $product['price'] + $this->shippingPrice,
        ]);
    }
}
