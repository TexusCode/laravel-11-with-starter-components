<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class BuysProduct extends Component
{
    public $barcode = null;
    public $product = null;
    public $quantity = null;
    public $message = null;
    public function search()
    {
        if (!$this->barcode) {
            $this->message = 'Товар не найден или поля штрихкода пусто!';
            return;
        }
        $product = Product::where('sku', $this->barcode)->first();
        if ($product) {
            $this->product = $product;
            $this->message = null;
        } else {
            $this->message = 'Товар не найден сначало добавте его в разделе товары!';
        }
    }
    public function update()
    {
        if ($this->product) {
            $this->product->quantity += $this->quantity;
            $this->product->save();
            $this->message = 'Количество товара успешно обновлено';
            $this->product = null;
        } else {
            $this->message = 'Не известная ошибка повторите еше раз!';
        }
    }
    public function render()
    {
        return view('livewire.buys-product');
    }
}
