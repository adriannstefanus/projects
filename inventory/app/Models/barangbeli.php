<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barangbeli extends Model
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
        'totprice',
        'idFaktur',
        'created_at',
        'updated_at',
        'idproducttype',
        'isRetur',
        'qtyRetur',
        'noRetur',
    ];

    public function fakturbeli(){
        return $this->belongsTo(fakturbeli::class, 'idFaktur');
    }

    public function producttype(){
        return $this->belongsTo(producttype::class, 'idProductType');
    }
}
