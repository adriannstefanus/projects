<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fakturbeli extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'supplier',
        'nofaktur',
        'tglfaktur',
        'tgljatuhtempofaktur',
        'nopo',
        'tglpo',
        'tgljatuhtempopo',
        'subtotal',
        'ppn',
        'total',
        'keterangan',
        'stsrc',
        'userin',
        'created_at',
        'userupd',
        'updated_at',
        'tglretur',
        'statusretur',
    ];

    public function barangbelis(){
        return $this->hasMany(barangbeli::class, 'idFaktur');
    }

    public function supplier(){
        return $this->belongsTo(Supplier::class, 'idSupplier');
    }
}
