<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kuitansijual extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nokuitansi',
        'nofaktur',
        'tglkuitansi',
        'idpelanggan',
        'total',
        'stsrc',
        'userin',
        'created_at',
        'userupd',
        'updated_at'
        ];

    public function fakturjuals(){
        return $this->hasMany(fakturjual::class, 'idKuitansi');
    }
}
