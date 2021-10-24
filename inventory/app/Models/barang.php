<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'beratjenis',
        'diameter',
        'panjang',
        'lebar',
        'bentuk',
        'ongkospotong',
        'hanyapotong',
        'berat',
        'hargakg',
        'qty',
        'hargasatuan',
        'diskon',
        'tebal',
        'noso',
        'totprice',
        'idproducttype',
        'isRetur',
        'qtyRetur',
        'noRetur',
    ];

    public function trpenawaran(){
        return $this->belongsTo(trpenawaran::class, 'NoSO', 'NoSO');
    }

    public function producttype(){
        return $this->belongsTo(producttype::class, 'idProductType');
    }

    public function spk(){
        return $this->hasMany(spk::class, 'idbarang');
    }
}
