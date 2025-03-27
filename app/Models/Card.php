<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'qrcode',
        'firstname',
        'lastname',
        'phone',
        'balance',
        'status',
    ];

    public function transh()
    {
        return $this->hasMany(Tranization::class, 'cardid', 'id');

    }
    public function partners()
    {
        return $this->hasMany(Partner::class, 'partner_qr');
    }
}
