<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubOrder extends Model
{
    protected $fillable = [
        'order_id',
        'product_id',
        'price',
        'unit',
        'quantity',
        'subtotal',
        'discount',
        'total',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
