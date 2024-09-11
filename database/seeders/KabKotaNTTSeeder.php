<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaNTTSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Kupang', 'provinsi_id' => 23, 'isKota' => true],
            ['nama_kab_kota' => 'Alor', 'provinsi_id' => 23, 'isKota' => false],
            ['nama_kab_kota' => 'Belu', 'provinsi_id' => 23, 'isKota' => false],
            ['nama_kab_kota' => 'Ende', 'provinsi_id' => 23, 'isKota' => false],
            ['nama_kab_kota' => 'Flores Timur', 'provinsi_id' => 23, 'isKota' => false],
            ['nama_kab_kota' => 'Kupang', 'provinsi_id' => 23, 'isKota' => false], // Kupang is both city and regency
            ['nama_kab_kota' => 'Lembata', 'provinsi_id' => 23, 'isKota' => false],
            ['nama_kab_kota' => 'Manggarai', 'provinsi_id' => 23, 'isKota' => false],
            ['nama_kab_kota' => 'Manggarai Barat', 'provinsi_id' => 23, 'isKota' => false],
            ['nama_kab_kota' => 'Manggarai Timur', 'provinsi_id' => 23, 'isKota' => false],
            ['nama_kab_kota' => 'Nagekeo', 'provinsi_id' => 23, 'isKota' => false],
            ['nama_kab_kota' => 'Ngada', 'provinsi_id' => 23, 'isKota' => false],
            ['nama_kab_kota' => 'Sikka', 'provinsi_id' => 23, 'isKota' => false],
            ['nama_kab_kota' => 'Sumba Barat', 'provinsi_id' => 23, 'isKota' => false],
            ['nama_kab_kota' => 'Sumba Barat Daya', 'provinsi_id' => 23, 'isKota' => false],
            ['nama_kab_kota' => 'Sumba Tengah', 'provinsi_id' => 23, 'isKota' => false],
            ['nama_kab_kota' => 'Sumba Timur', 'provinsi_id' => 23, 'isKota' => false],
            ['nama_kab_kota' => 'Timor Tengah Selatan', 'provinsi_id' => 23, 'isKota' => false],
            ['nama_kab_kota' => 'Timor Tengah Utara', 'provinsi_id' => 23, 'isKota' => false],
        ]);
    }
}
