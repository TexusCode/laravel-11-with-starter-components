<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Close extends Model
{
    use HasFactory;

    protected $fillable = [
        'benzin92',
        'benzin92summ',
        'benzin95',
        'benzin95summ',
        'gas',
        'gassumm',
        'diesel',
        'dieselsumm',
        'electro',
        'summ',
        'ras',
        'bonus',
        'nal',
    ];
}
