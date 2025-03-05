<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class Revisor extends Component
{
    public $barcode = '';
    public $product = null;

    public function search()
    {
        $product = Product::where('sku', $this->barcode)->first();
        if ($product) {
            $this->product = $product;
        } else {
            $this->product = null;

        }
        $this->barcode = '';
    }
    public function render()
    {
        return view('livewire.revisor');
    }
}
