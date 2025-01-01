<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\ReturnProduct as ModelsReturnProduct;
use Livewire\Component;

class ReturnProduct extends Component
{
    public $modal = false;
    public $product;
    public $price = 0;
    public $quantity = 1;
    public $note;
    public $active;
    public $message;
    protected $listeners = ['returnModalUdated' => 'updatedReturnModal'];
    public function mount() {}
    public function updatedReturnModal()
    {
        $this->modal = true;
    }
    public function updatedProduct()
    {
        $this->product = $this->product;
        $this->active = Product::where('sku', $this->product)->first();
        if (!$this->active == null) {
            $this->price = $this->active->sell_price;
        }
    }
    public function return_product()
    {
        if (!$this->product) {
            $this->message = 'Товар не найден';
            return;
        }
        $this->active->quantity += $this->quantity;
        $this->active->save();
        $return = new ModelsReturnProduct();
        $return->product_id = $this->active->id;
        $return->price = $this->price;
        $return->quantity = $this->quantity;
        $return->note = $this->note;
        $return->save();
        // $this->modal = false;
        $this->dispatch('updateChanges');
        $this->reset('product', 'price', 'quantity', 'active', 'note');
        $this->message = 'Товар успешно возврашено';
    }
    public function closemodal()
    {
        $this->modal = false;
        $this->reset('product', 'price', 'quantity', 'active', 'note', 'message');
    }

    public function render()
    {
        return view('livewire.return-product');
    }
}
