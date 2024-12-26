<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'sku',
        'category_id',
        'brand_id',
        'unit_id',
        'quantity',
        'supplier',
        'buy_price',
        'sell_price',
        'image',
        'note',
        'status',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
    public function suborder()
    {
        return $this->belongsTo(Suborder::class);
    }
}
