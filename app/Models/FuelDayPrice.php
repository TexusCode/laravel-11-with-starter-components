<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuelDayPrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'benzin92',
        'benzin95',
        'gas',
        'diesel',
    ];
}
