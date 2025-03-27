<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tranization extends Model
{
    use HasFactory;

    protected $fillable = [
        'cardid',
        'fueltype',
        'operationtype',
        'cash',
    ];
    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
