<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaSulawesiTengahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Palu', 'provinsi_id' => 27, 'isKota' => true],
            ['nama_kab_kota' => 'Banggai', 'provinsi_id' => 27, 'isKota' => false],
            ['nama_kab_kota' => 'Banggai Kepulauan', 'provinsi_id' => 27, 'isKota' => false],
            ['nama_kab_kota' => 'Buol', 'provinsi_id' => 27, 'isKota' => false],
            ['nama_kab_kota' => 'Donggala', 'provinsi_id' => 27, 'isKota' => false],
            ['nama_kab_kota' => 'Morowali', 'provinsi_id' => 27, 'isKota' => false],
            ['nama_kab_kota' => 'Morowali Utara', 'provinsi_id' => 27, 'isKota' => false],
            ['nama_kab_kota' => 'Poso', 'provinsi_id' => 27, 'isKota' => false],
            ['nama_kab_kota' => 'Sigi', 'provinsi_id' => 27, 'isKota' => false],
            ['nama_kab_kota' => 'Tojo Una-Una', 'provinsi_id' => 27, 'isKota' => false],
            ['nama_kab_kota' => 'Toli-Toli', 'provinsi_id' => 27, 'isKota' => false],
        ]);
    }
}
