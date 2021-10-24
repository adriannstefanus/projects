<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fakturjual extends Model
{
    use HasFactory;
    protected $fillable = [
    'id',
    'nofaktur',
    'tglfaktur',
    'tgljatuhtempofaktur',
    'nopo',
    'noso',
    'tglso',
    'tgljatuhtemposo',
    'idpelanggan',
    'idproduk',
    'itembarang',
    'berat',
    'hargakg',
    'qty',
    'ongkospotong',
    'hargasatuan',
    'diskon',
    'jumlah',
    'subtotal',
    'ppn',
    'total',
    'keterangan',
    'deal',
    'stsrc',
    'userin',
    'created_at',
    'userupd',
    'updated_at',
    'idkuitansi',
    ];

    public function trpenawaran(){
        return $this->belongsTo(trpenawaran::class, 'idTrPenawaran');
    }

    public function kuitansi(){
        return $this->belongsTo(kuitansijual::class, 'idKuitansi');
    }
}
