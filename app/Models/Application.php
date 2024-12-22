<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'product_id',
        'quantity',
        'brand',
        'supplier',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
