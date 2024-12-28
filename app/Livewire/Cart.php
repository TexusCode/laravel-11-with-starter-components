<?php

namespace App\Livewire;

use App\Models\Cart as ModelsCart;
use App\Models\Product;
use App\Models\SubCart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Cart extends Component
{
    public $cart;
    public $items;
    public $selected_cart;
    public $subtotal;
    public $discount = 20;
    public $total;
    //Discount modals
    public $discount_type = 'percent';
    public $discount_model = 0;
    public $selected_item;
    public $discount_modal = true;
    public $discount_modal_type;
    //Listeners
    protected $listeners = ["cartUpdated" => "updatedCart"];
    public function mount()
    {
        $this->updatedCart();
    }
    public function updatedCart()
    {
        $this->selected_cart = 1;
        $this->cart = ModelsCart::find($this->selected_cart);
        if (!$this->cart) {
            $this->cart = new ModelsCart;
            $this->cart->id = 1;
            $this->cart->user_id = Auth::user()->id;
            $this->cart->subtotal = 0;
            $this->cart->total = 0;
            $this->cart->status = 0;
            $this->cart->save();
        }
        $this->dispatch('updatedSelectedCart', id: $this->selected_cart);

        $this->items = SubCart::where('cart_id', $this->selected_cart)->get();
        $this->subtotal = $this->items->sum(function ($item) {
            return $item->quantity * $item->product->sell_price;
        });
        $this->discount = $this->items->sum(function ($item) {
            return $item->discount ?? 0;
        });
        $this->total = $this->subtotal - $this->discount - ($this->cart->discount ?? 0);
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
    public function item_discount($id)
    {
        $item = SubCart::find($id);
        $item->discount = 100;
        $item->save();
        $this->updatedCart();
    }
    public function all_discount()
    {
        $this->cart->discount = 50;
        $this->cart->save();
        $this->updatedCart();
    }
    public function clean_cart()
    {
        if ($this->items->isNotEmpty()) {
            $this->items->each->delete();
        }
        $this->cart->delete();
        $this->updatedCart();
    }
    public function item_discount_modal_opene($id)
    {
        $this->selected_item = SubCart::find($id);
        $this->discount_model = $this->selected_item->discount ?? '';
        $this->discount_modal = true;
    }
    public function all_discount_modal_opener($id)
    {
        $this->discount_modal = true;
    }
    public function discount_modal_close()
    {
        $this->discount_modal = false;
        $this->reset('discount_model', 'discount_type', 'discount_modal_type', 'selected_item');
    }
    public function render()
    {
        return view('livewire.cart');
    }
}
