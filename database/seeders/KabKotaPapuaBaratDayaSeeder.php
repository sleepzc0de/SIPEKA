<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaPapuaBaratDayaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Sorong', 'provinsi_id' => 38, 'isKota' => true],
            ['nama_kab_kota' => 'Sorong', 'provinsi_id' => 38, 'isKota' => false],
            ['nama_kab_kota' => 'Sorong Selatan', 'provinsi_id' => 38, 'isKota' => false],
            ['nama_kab_kota' => 'Maybrat', 'provinsi_id' => 38, 'isKota' => false],
            ['nama_kab_kota' => 'Tambrauw', 'provinsi_id' => 38, 'isKota' => false],
            ['nama_kab_kota' => 'Raja Ampat', 'provinsi_id' => 38, 'isKota' => false],
        ]);

    }
}
