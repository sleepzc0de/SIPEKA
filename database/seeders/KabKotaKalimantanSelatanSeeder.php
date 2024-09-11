<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaKalimantanSelatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinsiId = 13; // ID untuk Kalimantan Selatan

        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Banjarmasin', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Banjarbaru', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Balangan', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Barito Kuala', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Hulu Sungai Selatan', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Hulu Sungai Tengah', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Hulu Sungai Utara', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Kotabaru', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Tabalong', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Tanah Bumbu', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Tanah Laut', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Tapin', 'provinsi_id' => $provinsiId, 'isKota' => false],
        ]);
    }
}
