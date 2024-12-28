<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\SubCart;
use Livewire\Component;

class OrderPlace extends Component
{
    public $cart;
    public $items;
    public $subtotal;
    public $total;
    public $discount;
    public $return;
    public $money;
    public $note;
    public $modal = false;
    public $listeners = ["OrderPlace" => "updatedOrderPlace"];

    public function mount()
    {
        $this->updatedOrderPlace($id = null);
    }
    public function modal_close()
    {
        $this->modal = false;
        $this->reset('total', 'subtotal', 'money', 'return', 'note', 'discount', 'cart', 'items');
    }
    public function updatedOrderPlace($id)
    {
        $this->cart = Cart::find($id) ?? Cart::find(1); // Найти cart или fallback на id=1

        if ($id) {
            $this->modal = true;
        }

        $this->items = SubCart::where('cart_id', $this->cart->id)->get();

        $this->subtotal = $this->items->sum(function ($item) {
            return $item->quantity * $item->product->sell_price;
        });

        $this->discount = $this->items->sum(function ($item) {
            return $item->discount ?? 0;
        });

        $this->discount += $this->cart->discount;
        $this->total = max($this->subtotal - $this->discount, 0);

        $this->money = $this->money ?? $this->total;
        $this->return = round($this->money - $this->total, 2);
    }


    public function updatedMoney()
    {
        $this->money = $this->money;
        $this->mount();
    }
    public function render()
    {
        return view('livewire.order-place');
    }
}
