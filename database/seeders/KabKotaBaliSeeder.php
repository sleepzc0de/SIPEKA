<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaBaliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Denpasar', 'provinsi_id' => 22, 'isKota' => true],
            ['nama_kab_kota' => 'Badung', 'provinsi_id' => 22, 'isKota' => false],
            ['nama_kab_kota' => 'Bangli', 'provinsi_id' => 22, 'isKota' => false],
            ['nama_kab_kota' => 'Buleleng', 'provinsi_id' => 22, 'isKota' => false],
            ['nama_kab_kota' => 'Gianyar', 'provinsi_id' => 22, 'isKota' => false],
            ['nama_kab_kota' => 'Jembrana', 'provinsi_id' => 22, 'isKota' => false],
            ['nama_kab_kota' => 'Karangasem', 'provinsi_id' => 22, 'isKota' => false],
            ['nama_kab_kota' => 'Klungkung', 'provinsi_id' => 22, 'isKota' => false],
            ['nama_kab_kota' => 'Tabanan', 'provinsi_id' => 22, 'isKota' => false],
        ]);
    }
}
