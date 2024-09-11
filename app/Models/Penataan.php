<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penataan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_provinsi',
        'id_kab_kota',
        'pic',
        'status',
        'approver',
        'validator',
        'konseptor',
        'file_penataan',
        'file_dukungan',
        'catatan_penataan',
        'isValided',
        'isApproved',
        'isConcepted'
    ];

    protected $casts = [
        'konseptor' => 'array',
        'approver' => 'array',
        'validator' => 'array',
        'pic'=>'array',
        'file_dukungan'=>'array',
    ];

    public function kabkota()
    {
        return $this->belongsTo(RefKabKota::class, 'id_kab_kota', 'id');
    }

    public function provinsi()
    {
        return $this->belongsTo(RefProvinsi::class, 'id_provinsi', 'id');
    }
}
