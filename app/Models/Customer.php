<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'debts',
    ];

    public function debt()
    {
        return $this->hasMany(Debt::class);
    }
}
