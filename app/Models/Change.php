<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Change extends Model
{
    protected $fillable = [
        'subtotal',
        'returns',
        'expenditures',
        'debts_pay',
        'debts_sell',
        'total',
    ];
}
