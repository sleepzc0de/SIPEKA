<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaDKIJakartaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinsiId = 17; // ID untuk DKI Jakarta

        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Jakarta Barat', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Jakarta Pusat', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Jakarta Selatan', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Jakarta Timur', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Jakarta Utara', 'provinsi_id' => $provinsiId, 'isKota' => true],
        ]);
    }
}
