<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaAcehSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinsiId = 1; // ID untuk Nanggroe Aceh Darussalam

        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Banda Aceh', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Sabang', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Aceh Besar', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Aceh Barat', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Aceh Barat Daya', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Aceh Jaya', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Aceh Selatan', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Aceh Singkil', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Aceh Tamiang', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Aceh Tengah', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Aceh Tenggara', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Aceh Timur', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Aceh Utara', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Bener Meriah', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Bireuen', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Gayo Lues', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Nagan Raya', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Pidie', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Pidie Jaya', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Simeulue', 'provinsi_id' => $provinsiId, 'isKota' => false],
        ]);
    }
}
