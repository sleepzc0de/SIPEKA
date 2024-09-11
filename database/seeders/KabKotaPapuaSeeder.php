<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaPapuaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Jayapura', 'provinsi_id' => 34, 'isKota' => true],
            ['nama_kab_kota' => 'Asmat', 'provinsi_id' => 34, 'isKota' => false],
            ['nama_kab_kota' => 'Biak Numfor', 'provinsi_id' => 34, 'isKota' => false],
            ['nama_kab_kota' => 'Boven Digoel', 'provinsi_id' => 34, 'isKota' => false],
            ['nama_kab_kota' => 'Deiyai', 'provinsi_id' => 34, 'isKota' => false],
            ['nama_kab_kota' => 'Dogiyai', 'provinsi_id' => 34, 'isKota' => false],
            ['nama_kab_kota' => 'Intan Jaya', 'provinsi_id' => 34, 'isKota' => false],
            ['nama_kab_kota' => 'Jayapura', 'provinsi_id' => 34, 'isKota' => false],
            ['nama_kab_kota' => 'Jayawijaya', 'provinsi_id' => 34, 'isKota' => false],
            ['nama_kab_kota' => 'Keerom', 'provinsi_id' => 34, 'isKota' => false],
            ['nama_kab_kota' => 'Lanny Jaya', 'provinsi_id' => 34, 'isKota' => false],
            ['nama_kab_kota' => 'Mamberamo Raya', 'provinsi_id' => 34, 'isKota' => false],
            ['nama_kab_kota' => 'Mamberamo Tengah', 'provinsi_id' => 34, 'isKota' => false],
            ['nama_kab_kota' => 'Merauke', 'provinsi_id' => 34, 'isKota' => false],
            ['nama_kab_kota' => 'Mimika', 'provinsi_id' => 34, 'isKota' => false],
            ['nama_kab_kota' => 'Nabire', 'provinsi_id' => 34, 'isKota' => false],
            ['nama_kab_kota' => 'Nduga', 'provinsi_id' => 34, 'isKota' => false],
            ['nama_kab_kota' => 'Paniai', 'provinsi_id' => 34, 'isKota' => false],
            ['nama_kab_kota' => 'Pegunungan Bintang', 'provinsi_id' => 34, 'isKota' => false],
            ['nama_kab_kota' => 'Puncak', 'provinsi_id' => 34, 'isKota' => false],
            ['nama_kab_kota' => 'Puncak Jaya', 'provinsi_id' => 34, 'isKota' => false],
            ['nama_kab_kota' => 'Sarmi', 'provinsi_id' => 34, 'isKota' => false],
            ['nama_kab_kota' => 'Supiori', 'provinsi_id' => 34, 'isKota' => false],
            ['nama_kab_kota' => 'Tolikara', 'provinsi_id' => 34, 'isKota' => false],
            ['nama_kab_kota' => 'Waropen', 'provinsi_id' => 34, 'isKota' => false],
            ['nama_kab_kota' => 'Yahukimo', 'provinsi_id' => 34, 'isKota' => false],
            ['nama_kab_kota' => 'Yalimo', 'provinsi_id' => 34, 'isKota' => false],
        ]);

    }
}
