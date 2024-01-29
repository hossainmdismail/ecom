<?php

namespace App\Livewire\Frontend;

use App\Helpers\CookieSD;
use Livewire\Component;
use Livewire\Attributes\On;


class Checkout extends Component
{

    #[On('post-created')]
    public function updatePostList()
    {
    }

    public function remove($id)
    {
        CookieSD::removeFromCookie($id);
        $this->dispatch('post-created');
    }


    public function render()
    {
        $product = CookieSD::data()['products'];
        return view('livewire.frontend.checkout', [
            'products' => $product
        ]);
    }
}
