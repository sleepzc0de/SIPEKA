<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefProvinsi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_provinsi',
        'gambar_provinsi'
    ];
}
