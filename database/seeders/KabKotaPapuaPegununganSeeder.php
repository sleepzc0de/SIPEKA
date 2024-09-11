<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaPapuaPegununganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Jayawijaya', 'provinsi_id' => 36, 'isKota' => false],
            ['nama_kab_kota' => 'Lanny Jaya', 'provinsi_id' => 36, 'isKota' => false],
            ['nama_kab_kota' => 'Mamberamo Tengah', 'provinsi_id' => 36, 'isKota' => false],
            ['nama_kab_kota' => 'Nduga', 'provinsi_id' => 36, 'isKota' => false],
            ['nama_kab_kota' => 'Pegunungan Bintang', 'provinsi_id' => 36, 'isKota' => false],
            ['nama_kab_kota' => 'Tolikara', 'provinsi_id' => 36, 'isKota' => false],
            ['nama_kab_kota' => 'Yahukimo', 'provinsi_id' => 36, 'isKota' => false],
            ['nama_kab_kota' => 'Yalimo', 'provinsi_id' => 36, 'isKota' => false],
        ]);

    }
}
