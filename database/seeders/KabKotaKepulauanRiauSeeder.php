<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaKepulauanRiauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinsiId = 7; // ID untuk Kepulauan Riau

        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Batam', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Tanjung Pinang', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Bintan', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Karimun', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Anambas', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Lingga', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Natuna', 'provinsi_id' => $provinsiId, 'isKota' => false],
        ]);
    }
}
