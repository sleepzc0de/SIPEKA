<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaMalukuUtaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Ternate', 'provinsi_id' => 31, 'isKota' => true],
            ['nama_kab_kota' => 'Tidore Kepulauan', 'provinsi_id' => 31, 'isKota' => true],
            ['nama_kab_kota' => 'Halmahera Barat', 'provinsi_id' => 31, 'isKota' => false],
            ['nama_kab_kota' => 'Halmahera Tengah', 'provinsi_id' => 31, 'isKota' => false],
            ['nama_kab_kota' => 'Halmahera Timur', 'provinsi_id' => 31, 'isKota' => false],
            ['nama_kab_kota' => 'Halmahera Selatan', 'provinsi_id' => 31, 'isKota' => false],
            ['nama_kab_kota' => 'Halmahera Utara', 'provinsi_id' => 31, 'isKota' => false],
            ['nama_kab_kota' => 'Kepulauan Sula', 'provinsi_id' => 31, 'isKota' => false],
            ['nama_kab_kota' => 'Pulau Morotai', 'provinsi_id' => 31, 'isKota' => false],
            ['nama_kab_kota' => 'Pulau Taliabu', 'provinsi_id' => 31, 'isKota' => false],
        ]);

    }
}
