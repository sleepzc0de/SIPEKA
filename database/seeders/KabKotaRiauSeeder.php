<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaRiauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinsiId = 6; // ID untuk Riau

        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Pekanbaru', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Dumai', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Bengkalis', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Indragiri Hilir', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Indragiri Hulu', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Kampar', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Kuantan Singingi', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Pelalawan', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Rokan Hilir', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Rokan Hulu', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Siak', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Kepulauan Meranti', 'provinsi_id' => $provinsiId, 'isKota' => false],
        ]);
    }
}
