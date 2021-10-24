<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class temp_penawaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nomorso',
        'tglorder',
        'tgljatuhtemposo',
        'supplierid',
        'itembarang',
        'bentuk',
        'beratjenis',
        'diameter',
        'panjang',
        'lebar',
        'tebal',
        'qty',
        'harga',
        'ongkospotong',
        'diskon',
        'berat',
        'hargapcs',
        'jumlah',
        'updated_at',
        'created_at'
    ];
}
