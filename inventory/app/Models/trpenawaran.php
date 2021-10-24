<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class trpenawaran extends Model
{
    use HasFactory, Sortable;
    public $sortable = [
        'NoSO',
        'TglSO',
        'TglJatuhTempoSO'
    ];
    protected $fillable = [
        'id',
        'tgljatuhtempo',
        'noso',
        'tglso',
        'tgljatuhtemposo',
        'IdPelanggan',
        'subtotal',
        'ppn',
        'total',
        'keterangan',
        'deal',
        'userin',
        'created_at',
        'userupd',
        'updated_at'
        ];

        public function customer(){
            return $this->belongsTo(Customer::class, 'IdPelanggan', 'id');
        }
        public function barangs(){
            return $this->hasMany(barang::class, 'NoSO', 'NoSO');
        }
        public function spks(){
            return $this->hasMany(spk::class, 'idTrPenawaran');
        }
        public function trsuratjalan(){
            return $this->hasOne(trsuratjalan::class, 'idTrPenawaran');
        }
        public function fakturjual(){
            return $this->hasOne(fakturjual::class, 'idTrPenawaran');
        }
        public function user(){
            return $this->belongsTo(User::class, 'userin');
        }
}
