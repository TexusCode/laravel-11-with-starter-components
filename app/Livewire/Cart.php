<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\SubCart;
use Livewire\Component;

class Cart extends Component
{
    public $cart;
    public $subtotal;
    public $discount = 20;
    public $total;
    protected $listeners = ["cartUpdated" => "updatedCart"];
    public function mount()
    {
        $this->updatedCart();
    }
    public function updatedCart()
    {
        $this->cart = SubCart::all();
        $this->subtotal = $this->cart->sum(function ($item) {
            return $item->quantity * $item->product->sell_price;
        });
        $this->total = $this->subtotal - $this->discount;
    }
    public function plus($id)
    {
        $item = SubCart::find($id);
        $product = Product::find($item->product_id);
        if ($item->quantity < $product->quantity) {
            $item->quantity += 1;
            $item->save();
        }
        $this->updatedCart();
    }
    public function minus($id)
    {
        $item = SubCart::find($id);
        if ($item->quantity <= 1) {
            $item->delete();
        } else {
            $item->quantity -= 1;
            $item->save();
        }
        $this->updatedCart();
    }
    public function render()
    {
        return view('livewire.cart');
    }
}
