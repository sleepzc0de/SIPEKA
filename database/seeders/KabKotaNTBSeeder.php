<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaNTBSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Mataram', 'provinsi_id' => 24, 'isKota' => true],
            ['nama_kab_kota' => 'Bima', 'provinsi_id' => 24, 'isKota' => true],
            ['nama_kab_kota' => 'Bima', 'provinsi_id' => 24, 'isKota' => false],
            ['nama_kab_kota' => 'Dompu', 'provinsi_id' => 24, 'isKota' => false],
            ['nama_kab_kota' => 'Lombok Barat', 'provinsi_id' => 24, 'isKota' => false],
            ['nama_kab_kota' => 'Lombok Tengah', 'provinsi_id' => 24, 'isKota' => false],
            ['nama_kab_kota' => 'Lombok Timur', 'provinsi_id' => 24, 'isKota' => false],
            ['nama_kab_kota' => 'Lombok Utara', 'provinsi_id' => 24, 'isKota' => false],
            ['nama_kab_kota' => 'Sumbawa', 'provinsi_id' => 24, 'isKota' => false],
            ['nama_kab_kota' => 'Sumbawa Barat', 'provinsi_id' => 24, 'isKota' => false],
        ]);
    }
}
