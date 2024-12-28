<?php

namespace App\Livewire;

use App\Models\Cart as ModelsCart;
use App\Models\Order;
use App\Models\Product;
use App\Models\SubCart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Cart extends Component
{
    public $cart;
    public $carts;
    public $order_no;
    public $items;
    public $selected_cart = 1;
    public $subtotal;
    public $discount = 20;
    public $total;

    //Discount modals
    public $discount_type = 'fixed';
    public $discount_model = 0;
    public $selected_item;
    public $discount_modal = false;
    public $discount_modal_type = 'all';
    //Listeners
    protected $listeners = ["cartUpdated" => "updatedCart"];
    public function mount()
    {
        $this->updatedCart();
    }
    public function updatedCart()
    {
        $this->order_no = Order::max('id') + 1 ?? 1;

        $this->cart = ModelsCart::find($this->selected_cart);
        $this->carts = ModelsCart::all();
        if (!$this->cart) {
            $this->cart = new ModelsCart;
            $this->cart->id = 1;
            $this->cart->user_id = Auth::user()->id;
            $this->cart->subtotal = 0;
            $this->cart->total = 0;
            $this->cart->status = 0;
            $this->cart->save();
        }

        $this->items = SubCart::where('cart_id', $this->selected_cart)->get();
        $this->subtotal = $this->items->sum(function ($item) {
            return $item->quantity * $item->product->sell_price;
        });
        $this->discount = $this->items->sum(function ($item) {
            return $item->discount ?? 0;
        });
        $this->discount += $this->cart->discount;
        $this->total = $this->subtotal - $this->discount;
        $this->dispatch('updatedSelectedCart', id: $this->selected_cart);
    }
    public function order_place()
    {
        if ($this->cart->items->count() > 0) {
            $this->dispatch('OrderPlace', $this->selected_cart);
        }
    }
    public function stop_cart()
    {
        $last_card_id = ModelsCart::max('id') ?? 1;
        $last_card_id += 1;

        $this->items->each(function ($item) use ($last_card_id) {
            $item->cart_id = $last_card_id;
            $item->save();
        });

        if ($this->items->count() > 0) {
            $this->cart->id = $last_card_id;
            $this->cart->save();
        }
        $this->selected_cart = 1;
        $this->updatedCart();
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
    public function selected_cart_id($id)
    {
        $this->selected_cart = $id;
        $this->updatedCart();
    }
    public function clean_cart()
    {
        if ($this->items->isNotEmpty()) {
            $this->items->each->delete();
        }
        $this->cart->delete();
        $this->selected_cart = 1;
        $this->updatedCart();
    }
    public function item_discount_modal_opene($id)
    {
        $this->selected_item = SubCart::find($id);
        $this->discount_modal_type = 'item';
        $this->discount_model = $this->selected_item->discount ?? '';
        $this->discount_modal = true;
    }
    public function all_discount_modal_opener()
    {
        $this->discount_modal_type = 'all';
        $this->discount_model = $this->cart->discount ?? '';
        $this->discount_modal = true;
    }
    public function discount_modal_close()
    {
        $this->discount_modal = false;
        $this->reset('discount_model', 'discount_type', 'discount_modal_type', 'selected_item');
    }
    public function add_discount()
    {
        if ($this->discount_modal_type === 'item') {
            if ($this->discount_type == 'fixed') {
                $this->selected_item->discount = $this->discount_model;
            } else {
                $discount = ($this->selected_item->product->sell_price * $this->selected_item->quantity * $this->discount_model) / 100;
                $this->selected_item->discount = $discount;
            }
            $this->selected_item->save();
        }
        if ($this->discount_modal_type === 'all') {
            if ($this->discount_type == 'fixed') {
                $this->cart->discount = $this->discount_model;
            } else {
                $discount = ($this->items->sum(fn($item) => $item->product->sell_price * $item->quantity) * $this->discount_model) / 100;
                $this->cart->discount = $discount;
            }
            $this->cart->save();
        }
        $this->discount_modal = false;
        $this->reset('discount_model', 'discount_type', 'discount_modal_type', 'selected_item');
        $this->updatedCart();
    }
    public function render()
    {
        return view('livewire.cart');
    }
}
