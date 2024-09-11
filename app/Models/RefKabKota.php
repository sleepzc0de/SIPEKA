<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefKabKota extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kab_kota',
        'provinsi_id',
        'isKota',
        'latitude',
        'longitude'
    ];

    public function Provinsi(){
        return $this->belongsTo(RefProvinsi::class);
    }
}
