<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\Revision;
use Livewire\Component;

class Revisor extends Component
{
    public $barcode = '4640030094325';
    public $product = null;
    public $message = null;
    public $quantity = null;
    public $last_revision = null;

    public function search()
    {
        $product = Product::where('sku', $this->barcode)->first();
        if ($product) {
            $this->product = $product;
            $this->last_revision = Revision::where('product_id', $this->product->id)->orderby('created_at', 'desc')->first();
            $this->message = null;
        } else {
            $this->product = null;
            $this->message = "Товар не найдено!";
        }
        $this->barcode = '';
    }
    public function save()
    {
        if ($this->quantity == null) {
            $this->message = "Поля количество пусто!!";
            return;
        }
        if ($this->product) {
            $revision = new Revision();
            $revision->product_id = $this->product->id;
            $revision->old_quantity = $this->product->quantity;
            $revision->new_quantity = $this->quantity;
            $revision->save();
            $this->product->quantity = $this->quantity;
            $this->product->save();
            $this->product = null;
            $this->quantity = null;
            $this->message = "Количество товара успешно изменен!";
        } else {
            $this->message = "Товар не найдено или какойто неизвестная ошибка повторите еше один раз!";
        }
    }

    public function close()
    {
        $this->product = null;
        $this->quantity = null;
    }

    public function render()
    {
        return view('livewire.revisor');
    }
}
