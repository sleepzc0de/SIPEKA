<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaKalimantanUtaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinsiId = 15; // ID untuk Kalimantan Utara

        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Tarakan', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Bulungan', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Malinau', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Nunukan', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Tana Tidung', 'provinsi_id' => $provinsiId, 'isKota' => false],
        ]);
    }
}
