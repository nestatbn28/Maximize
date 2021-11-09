<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mlm extends Model
{
    use HasFactory;
    protected $table = 'mlm';
    protected $fillable = [
        'Nama',
        'Alamat',
        'notel',
        'upline',
    ];
}
