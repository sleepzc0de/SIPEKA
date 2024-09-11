<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaJambiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinsiId = 8; // ID untuk Jambi

        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Jambi', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Sungai Penuh', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Batanghari', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Bungo', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Kerinci', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Merangin', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Muaro Jambi', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Sarolangun', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Tebo', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Tanjung Jabung Barat', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Tanjung Jabung Timur', 'provinsi_id' => $provinsiId, 'isKota' => false],
        ]);
    }
}
