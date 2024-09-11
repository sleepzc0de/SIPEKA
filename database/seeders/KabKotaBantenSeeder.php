<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaBantenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinsiId = 16; // ID untuk Banten

        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Cilegon', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Serang', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Tangerang', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Tangerang Selatan', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Banten', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Lebak', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Pandeglang', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Serang', 'provinsi_id' => $provinsiId, 'isKota' => false],
        ]);
    }
}
