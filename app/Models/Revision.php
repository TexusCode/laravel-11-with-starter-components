<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Revision extends Model
{
    protected $fillable = [
        'product_id',
        'old_quantity',
        'new_quantity',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
