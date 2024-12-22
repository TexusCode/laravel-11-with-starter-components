<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'company_name',
        'logo',
        'phone',
        'location',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
