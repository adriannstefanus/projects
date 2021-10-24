<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Product extends Model
{
    use HasFactory, Sortable;
    public $sortable = [
        'kategori',
        'jenis',
        'supplier',
        'merk',
        'tipe'
    ];
    protected $fillable = [
        'id',
        'kategori',
        'jenis',
        'idsupplier',
        'merk',
        'tipe',
        'stsrc',
        'userin',
        'dtin',
        'userupd',
        'dtupd'
        ];

    public function supplier(){
        return $this->belongsTo('App\Models\Supplier', 'idSupplier');
    }

}
