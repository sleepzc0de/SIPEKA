<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaKalimantanTengahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinsiId = 14; // ID untuk Kalimantan Tengah

        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Palangka Raya', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Barito Selatan', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Barito Utara', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Gunung Mas', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Kapuas', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Katingan', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Kotawaringin Barat', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Kotawaringin Timur', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Lamandau', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Murung Raya', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Pulang Pisau', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Seruyan', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Sukamara', 'provinsi_id' => $provinsiId, 'isKota' => false],
        ]);
    }
}
