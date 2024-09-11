<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaPapuaSelatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Asmat', 'provinsi_id' => 37, 'isKota' => false],
            ['nama_kab_kota' => 'Boven Digoel', 'provinsi_id' => 37, 'isKota' => false],
            ['nama_kab_kota' => 'Mappi', 'provinsi_id' => 37, 'isKota' => false],
            ['nama_kab_kota' => 'Merauke', 'provinsi_id' => 37, 'isKota' => false],
        ]);

    }
}
