<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penataan extends Model
{
    use HasFactory;
    protected $fillable = [
        'img_provinsi',
        'ur_provinsi',
        'ur_kab_kota',
        'pic',
        'status',
        'approver',
        'validator',
        'konseptor',
        'file_penataan',
        'catatan_penataan'
    ];
}
