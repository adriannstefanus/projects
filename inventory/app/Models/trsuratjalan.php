<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trsuratjalan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nosuratjalan',
        'noso',
        'nofakturjual',
        'tglfakturjual',
        'tglsuratjalan',
        'kepadanama',
        'nopo',
        'kepadatelp',
        'status',
        'stsrc',
        'userin',
        'created_at',
        'userupd',
        'updated_at'
        ];

        public function trpenawaran(){
            return $this->belongsTo(trpenawaran::class, 'idTrPenawaran');
        }
        public function user(){
            return $this->belongsTo(User::class, 'userin');
        }
}
