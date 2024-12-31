<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Customer;
use App\Models\Debt;
use App\Models\Order;
use App\Models\Product;
use App\Models\SubCart;
use App\Models\SubOrder;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class OrderPlace extends Component
{
    public $cart;
    public $items;
    public $subtotal;
    public $total;
    public $discount;
    public $return;
    public $paymentType = 'Алиф Моби';
    public $money;
    public $customerName;
    public $customerPhone;
    public $note;
    public $debt = false;
    public $modal = false;
    public $listeners = ["OrderPlace" => "updatedOrderPlace"];

    public function mount()
    {
        $this->updatedOrderPlace($id = null);
    }
    public function updatedpaymentType()
    {
        $this->paymentType = $this->paymentType;
        if($this->paymentType == 'В долг')
        {
            $this->debt = true;
        }else{
            $this->debt = false;

        }
        $this->updatedOrderPlace($id = null);
    }
    public function order_place()
    {
        if($this->paymentType == 'В долг')
        {
            if($this->customerName && $this->customerPhone)
            {
                $customer = Customer::updateOrCreate(
                    ['phone' => $this->customerPhone], // Attributes to search for
                    [
                        'name' => $this->customerName,
                        'phone' => $this->customerPhone,
                        'location' => 'empty'
                    ]
                );
                Debt::create(
                [
                    'customer_id'=>$customer->id,
                    'price'=>$this->total
                ]
                    );
            }else{
                return;
            }
        }
        $maxorder = Order::max("id") + 1 ?? 1;
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->subtotal = $this->subtotal;
        $order->total = $this->total;
        $order->discount = $this->discount;
        $order->payment_type = $this->paymentType;
        $order->note = $this->note;
        $order->save();
        $this->cart->delete();

        foreach ($this->items as $item) {
            $suborder = new SubOrder();
            $suborder->order_id = $order->id;
            $suborder->product_id = $item->product_id;
            $suborder->quantity = $item->quantity;
            $suborder->discount = $item->discount;
            $suborder->price = $item->product->sell_price;
            $suborder->subtotal = $item->quantity * $item->product->sell_price;
            $suborder->total = ($item->quantity * $item->product->sell_price) - ($item->discount ?? 0);
            $suborder->unit = $item->product->unit->name ?? 'шт';
            $suborder->save();
            $product = Product::find($item->product_id);
            $product->quantity -= $item->quantity;
            $product->save();
            $item->delete();
        }
        $this->modal = false;
        $this->reset('total', 'subtotal', 'money', 'return', 'note', 'discount', 'cart', 'items');
        return redirect()->route('pos');
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
