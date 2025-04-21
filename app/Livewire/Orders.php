<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;

class Orders extends Component
{

    public $orders = null;


    public function mount()
    {
        $this->orders = Order::all();
    }

    public function refreshTable()
    {
        $this->orders = Order::all();
    }

    public function truncateTable()
    {
        Order::truncate();
        $this->orders = collect();
    }

    public function render()
    {
        return view('livewire.orders')
            ->layout("components.layouts.app", [
                "title" => "Shopify Orders"
            ]);
    }
}
