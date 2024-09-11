<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaSulawesiTenggaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Kendari', 'provinsi_id' => 29, 'isKota' => true],
            ['nama_kab_kota' => 'Baubau', 'provinsi_id' => 29, 'isKota' => true],
            ['nama_kab_kota' => 'Bombana', 'provinsi_id' => 29, 'isKota' => false],
            ['nama_kab_kota' => 'Buton', 'provinsi_id' => 29, 'isKota' => false],
            ['nama_kab_kota' => 'Buton Selatan', 'provinsi_id' => 29, 'isKota' => false],
            ['nama_kab_kota' => 'Buton Tengah', 'provinsi_id' => 29, 'isKota' => false],
            ['nama_kab_kota' => 'Buton Utara', 'provinsi_id' => 29, 'isKota' => false],
            ['nama_kab_kota' => 'Kolaka', 'provinsi_id' => 29, 'isKota' => false],
            ['nama_kab_kota' => 'Kolaka Timur', 'provinsi_id' => 29, 'isKota' => false],
            ['nama_kab_kota' => 'Kolaka Utara', 'provinsi_id' => 29, 'isKota' => false],
            ['nama_kab_kota' => 'Konawe', 'provinsi_id' => 29, 'isKota' => false],
            ['nama_kab_kota' => 'Konawe Kepulauan', 'provinsi_id' => 29, 'isKota' => false],
            ['nama_kab_kota' => 'Konawe Selatan', 'provinsi_id' => 29, 'isKota' => false],
            ['nama_kab_kota' => 'Konawe Utara', 'provinsi_id' => 29, 'isKota' => false],
            ['nama_kab_kota' => 'Muna', 'provinsi_id' => 29, 'isKota' => false],
            ['nama_kab_kota' => 'Muna Barat', 'provinsi_id' => 29, 'isKota' => false],
            ['nama_kab_kota' => 'Wakatobi', 'provinsi_id' => 29, 'isKota' => false],
        ]);

    }
}
