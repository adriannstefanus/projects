<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trreturbeli extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'noretur',
        'tglretur',
        'nofaktur',
        'tglfaktur',
        'tgljatuhtempo',
        'nopo',
        'tglpo',
        'tgljatuhtempopo',
        'idproduk',
        'beratjenis',
        'diameter',
        'panjang',
        'lebar',
        'tebal',
        'bentuk',
        'ongkospotong',
        'hanyapotong',
        'itembarang',
        'berat',
        'hargakg',
        'qty',
        'hargasatuan',
        'diskon',
        'jumlah',
        'subtotal',
        'ppn',
        'total',
        'keterangan',
        'stsrc',
        'userin',
        'created_at',
        'userupd',
        'updated_at'
        ];
}
