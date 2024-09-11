<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaMalukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Ambon', 'provinsi_id' => 32, 'isKota' => true],
            ['nama_kab_kota' => 'Tual', 'provinsi_id' => 32, 'isKota' => true],
            ['nama_kab_kota' => 'Buru', 'provinsi_id' => 32, 'isKota' => false],
            ['nama_kab_kota' => 'Buru Selatan', 'provinsi_id' => 32, 'isKota' => false],
            ['nama_kab_kota' => 'Kepulauan Aru', 'provinsi_id' => 32, 'isKota' => false],
            ['nama_kab_kota' => 'Maluku Barat Daya', 'provinsi_id' => 32, 'isKota' => false],
            ['nama_kab_kota' => 'Maluku Tengah', 'provinsi_id' => 32, 'isKota' => false],
            ['nama_kab_kota' => 'Maluku Tenggara', 'provinsi_id' => 32, 'isKota' => false],
            ['nama_kab_kota' => 'Seram Bagian Barat', 'provinsi_id' => 32, 'isKota' => false],
            ['nama_kab_kota' => 'Seram Bagian Timur', 'provinsi_id' => 32, 'isKota' => false],
        ]);

    }
}
