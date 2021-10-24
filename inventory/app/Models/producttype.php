<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producttype extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'tipe',
        ];

    public function barangs(){
        return $this->hasMany(barang::class, 'idProductType');
    }

    public function barangbelis(){
        return $this->hasMany(barangbeli::class, 'idProductType');
    }
}
