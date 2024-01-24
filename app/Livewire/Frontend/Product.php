<?php

namespace App\Livewire\Frontend;

use App\Models\Product as ModelsProduct;
use Livewire\Component;

class Product extends Component
{

    public function render()
    {
        $latest = ModelsProduct::latest()->get()->take(8);
        return view('livewire..frontend.product',[
            'latests'       => $latest,
        ]);
    }
}
