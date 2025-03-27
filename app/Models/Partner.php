<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    protected $fillable = [
        'partner_qr',
        'qrcode',
    ];
    public function partner()
    {
        return $this->belongsTo(Partner::class, 'qrcode');
    }
}
