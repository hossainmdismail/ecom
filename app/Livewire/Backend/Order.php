<?php

namespace App\Livewire\Backend;

use App\Models\Order as ModelsOrder;
use Livewire\Component;
use Livewire\WithPagination;

class Order extends Component
{
    use WithPagination;

    public $search = '';
    public $status = '';
    public $check = [];


    public function render()
    {
        $query = ModelsOrder::query()
                ->where(function ($query) {
                    $query->where('order_id', 'like', '%' . $this->search . '%')
                    ->orWhere('name', 'like', '%' . $this->search . '%')
                    ->orWhere('number', 'like', '%' . $this->search . '%');
                });

        if ($this->status != '') {
            $query->where('status', $this->status);
        }

        $order = $query->orderBy('id', 'DESC')->paginate(10);
        return view('livewire.backend.order',[
            'orders' => $order
        ]);
    }
}
