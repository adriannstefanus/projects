<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Customer extends Model
{
    use HasFactory, Sortable;
    public $sortable = [
        'id',
        'Nama',
        'Alamat',
        'Telp',
        'Email'
    ];
    protected $fillable = [
        'id',
        'idmember',
        'nama',
        'alamat',
        'telp',
        'email',
        'stsrc',
        'userin',
        'created_at',
        'userupd',
        'update_at'
    ];
    public function trpenawarans(){
        return $this->hasMany(trpenawaran::class, 'IdPelanggan', 'id');
    }
}
