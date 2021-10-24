<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Supplier extends Model
{
    use HasFactory,Sortable;
    public $sortable = [
        'nama',
        'alamat',
        'telp',
        'email',
        'npwp',
    ];
    protected $fillable = [
        'id',
        'nama',
        'alamat',
        'telp',
        'email',
        'npwp',
        'stsrc',
        'userin',
        'created_at',
        'userupd',
        'updated_at'
        ];

    public function Products(){
        return $this->hasMany('App\Models\Product', 'idSupplier');
    }

    public function fakturbelis(){
        return $this->hasMany(fakturbeli::class, 'idSupplier');
    }
}
