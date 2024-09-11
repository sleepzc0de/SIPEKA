<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaDIYSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Yogyakarta', 'provinsi_id' => 20, 'isKota' => true],
            ['nama_kab_kota' => 'Bantul', 'provinsi_id' => 20, 'isKota' => false],
            ['nama_kab_kota' => 'Gunungkidul', 'provinsi_id' => 20, 'isKota' => false],
            ['nama_kab_kota' => 'Kulon Progo', 'provinsi_id' => 20, 'isKota' => false],
            ['nama_kab_kota' => 'Sleman', 'provinsi_id' => 20, 'isKota' => false],
        ]);
    }
}
