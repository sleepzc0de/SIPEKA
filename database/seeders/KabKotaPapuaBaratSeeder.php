<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaPapuaBaratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Sorong', 'provinsi_id' => 33, 'isKota' => true],
            ['nama_kab_kota' => 'Fakfak', 'provinsi_id' => 33, 'isKota' => false],
            ['nama_kab_kota' => 'Kaimana', 'provinsi_id' => 33, 'isKota' => false],
            ['nama_kab_kota' => 'Manokwari', 'provinsi_id' => 33, 'isKota' => false],
            ['nama_kab_kota' => 'Manokwari Selatan', 'provinsi_id' => 33, 'isKota' => false],
            ['nama_kab_kota' => 'Maybrat', 'provinsi_id' => 33, 'isKota' => false],
            ['nama_kab_kota' => 'Pegunungan Arfak', 'provinsi_id' => 33, 'isKota' => false],
            ['nama_kab_kota' => 'Raja Ampat', 'provinsi_id' => 33, 'isKota' => false],
            ['nama_kab_kota' => 'Sorong', 'provinsi_id' => 33, 'isKota' => false],
            ['nama_kab_kota' => 'Sorong Selatan', 'provinsi_id' => 33, 'isKota' => false],
            ['nama_kab_kota' => 'Tambrauw', 'provinsi_id' => 33, 'isKota' => false],
            ['nama_kab_kota' => 'Teluk Bintuni', 'provinsi_id' => 33, 'isKota' => false],
            ['nama_kab_kota' => 'Teluk Wondama', 'provinsi_id' => 33, 'isKota' => false],
        ]);

    }
}
