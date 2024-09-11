<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaKalimantanTimurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinsiId = 12; // ID untuk Kalimantan Timur

        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Balikpapan', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Bontang', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Samarinda', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Tarakan', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Berau', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Bulungan', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Kutai Barat', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Kutai Kartanegara', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Kutai Timur', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Mahakam Ulu', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Paser', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Penajam Paser Utara', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Tana Tidung', 'provinsi_id' => $provinsiId, 'isKota' => false],
        ]);
    }
}
