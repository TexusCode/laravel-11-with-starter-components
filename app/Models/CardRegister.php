<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardRegister extends Model
{
    use HasFactory;

    protected $fillable = [
        'qrcode',
    ];
}
