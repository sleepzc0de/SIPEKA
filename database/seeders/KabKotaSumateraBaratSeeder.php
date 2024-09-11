<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaSumateraBaratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinsiId = 4; // ID untuk Sumatera Barat

        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Padang', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Bukittinggi', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Payakumbuh', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Solok', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Agam', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Dharmasraya', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Kepulauan Mentawai', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Lima Puluh Kota', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Padang Pariaman', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Pasaman', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Pasaman Barat', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Pesisir Selatan', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Sijunjung', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Solok Selatan', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Tanah Datar', 'provinsi_id' => $provinsiId, 'isKota' => false],
        ]);
    }
}
