<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaGorontaloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Gorontalo', 'provinsi_id' => 25, 'isKota' => true],
            ['nama_kab_kota' => 'Boalemo', 'provinsi_id' => 25, 'isKota' => false],
            ['nama_kab_kota' => 'Bone Bolango', 'provinsi_id' => 25, 'isKota' => false],
            ['nama_kab_kota' => 'Gorontalo Utara', 'provinsi_id' => 25, 'isKota' => false],
            ['nama_kab_kota' => 'Pohuwato', 'provinsi_id' => 25, 'isKota' => false],
        ]);
    }
}
