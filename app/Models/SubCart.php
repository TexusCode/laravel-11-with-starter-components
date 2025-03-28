<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCart extends Model
{
    protected $fillable = [
        'cart_id',
        'product_id',
        'discount',
        'quantity',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
