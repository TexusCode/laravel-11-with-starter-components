<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Debt extends Model
{
    protected $fillable = [
        'customer_id',
        'price',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
