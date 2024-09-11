<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaBangkaBelitungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinsiId = 10; // ID untuk Bangka Belitung

        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Pangkal Pinang', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Bangka', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Bangka Barat', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Bangka Selatan', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Bangka Tengah', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Belitung', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Belitung Timur', 'provinsi_id' => $provinsiId, 'isKota' => false],
        ]);
    }
}
