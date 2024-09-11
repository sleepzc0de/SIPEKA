<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaSulawesiBaratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Mamuju', 'provinsi_id' => 26, 'isKota' => true],
            ['nama_kab_kota' => 'Majene', 'provinsi_id' => 26, 'isKota' => false],
            ['nama_kab_kota' => 'Mamuju Tengah', 'provinsi_id' => 26, 'isKota' => false],
            ['nama_kab_kota' => 'Polewali Mandar', 'provinsi_id' => 26, 'isKota' => false],
            ['nama_kab_kota' => 'Pasangkayu', 'provinsi_id' => 26, 'isKota' => false],
        ]);

    }
}
