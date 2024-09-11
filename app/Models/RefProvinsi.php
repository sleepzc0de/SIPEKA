<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefProvinsi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_provinsi',
        'nama_ibukota',
        'gambar_provinsi'
    ];

    public function KabKota(){
        return $this->hasMany(RefKabKota::class);
    }


}
