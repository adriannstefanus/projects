<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class spk extends Model
{
    use HasFactory, Sortable;
    public $sortable = [
        'nospk',
        'trpenawaran',
        'customer',
        'tglspk',
        'barang',
        'keterangan',
        'pic'
    ];
    protected $fillable = [
        'id',
        'idtrpenawaran',
        'nospk',
        'tglspk',
        'noso',
        'nofaktur',
        'tglfaktur',
        'idpelanggan',
        'idproduk',
        'itembarang',
        'qty',
        'pic',
        'keterangan',
        'statusspk',
        'stsrc',
        'userin',
        'created_at',
        'userupd',
        'updated_at'
        ];

    public function trpenawaran(){
        return $this->belongsTo(trpenawaran::class, 'idTrPenawaran');
    }

    public function barang(){
        return $this->belongsTo(barang::class, 'idbarang');
    }

    public function customerSortable($query, $direction){
        return $query->join('trpenawarans', 'spks.idtrpenawaran', '=', 'trpenawarans.id')
            ->join('customers', 'trpenawarans.idpelanggan', '=', 'customers.id')
            ->orderBy('customers.nama', $direction)
            ->select('spks.*');;
    }

    public function itemSortable($query, $direction){
        return $query->join('barangs', 'spks.idbarang', '=', 'barangs.id')
            ->join('producttypes', 'barangs.idproducttype', '=', 'producttypes.id')
            ->orderBy('producttypes.tipe', $direction)
            ->select('spks.*');;
    }
}
