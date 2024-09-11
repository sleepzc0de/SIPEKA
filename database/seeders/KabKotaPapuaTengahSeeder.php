<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaPapuaTengahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Deiyai', 'provinsi_id' => 35, 'isKota' => false],
            ['nama_kab_kota' => 'Dogiyai', 'provinsi_id' => 35, 'isKota' => false],
            ['nama_kab_kota' => 'Intan Jaya', 'provinsi_id' => 35, 'isKota' => false],
            ['nama_kab_kota' => 'Mimika', 'provinsi_id' => 35, 'isKota' => false],
            ['nama_kab_kota' => 'Nabire', 'provinsi_id' => 35, 'isKota' => false],
            ['nama_kab_kota' => 'Paniai', 'provinsi_id' => 35, 'isKota' => false],
            ['nama_kab_kota' => 'Puncak', 'provinsi_id' => 35, 'isKota' => false],
            ['nama_kab_kota' => 'Puncak Jaya', 'provinsi_id' => 35, 'isKota' => false],
        ]);

    }
}
