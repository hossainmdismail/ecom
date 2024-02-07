<?php

namespace App\Livewire\Backend;

use App\Models\Order as ModelsOrder;
use Livewire\Component;

class Order extends Component
{
    public function render()
    {
        $order = ModelsOrder::all();
        return view('livewire.backend.order',[
            'orders' => $order
        ]);
    }
}
