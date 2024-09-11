<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaBengkuluSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinsiId = 5; // ID untuk Bengkulu

        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Bengkulu', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Bengkulu Selatan', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Bengkulu Tengah', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Bengkulu Utara', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Kaur', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Kepahiang', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Lebong', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Mukomuko', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Rejang Lebong', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Seluma', 'provinsi_id' => $provinsiId, 'isKota' => false],
        ]);
    }
}
