<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trpembelian extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
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
        'hargapotong',
        'itembarang',
        'berat',
        'hargakg',
        'qty',
        'isretur',
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
