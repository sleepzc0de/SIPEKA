<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaJawaBaratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinsiId = 18; // ID untuk Jawa Barat

        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Bandung', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Bekasi', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Bogor', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Cirebon', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Depok', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Sukabumi', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Tasikmalaya', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Bandung', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Bandung Barat', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Bekasi', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Bogor', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Cianjur', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Cirebon', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Garut', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Indramayu', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Karawang', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Kuningan', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Majalengka', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Pangandaran', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Purwakarta', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Subang', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Sukabumi', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Sumedang', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Tasikmalaya', 'provinsi_id' => $provinsiId, 'isKota' => false],
        ]);
    }
}
