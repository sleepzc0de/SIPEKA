<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaSulawesiUtaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Manado', 'provinsi_id' => 28, 'isKota' => true],
            ['nama_kab_kota' => 'Bitung', 'provinsi_id' => 28, 'isKota' => true],
            ['nama_kab_kota' => 'Tomohon', 'provinsi_id' => 28, 'isKota' => true],
            ['nama_kab_kota' => 'Kotamobagu', 'provinsi_id' => 28, 'isKota' => true],
            ['nama_kab_kota' => 'Bolaang Mongondow', 'provinsi_id' => 28, 'isKota' => false],
            ['nama_kab_kota' => 'Bolaang Mongondow Selatan', 'provinsi_id' => 28, 'isKota' => false],
            ['nama_kab_kota' => 'Bolaang Mongondow Timur', 'provinsi_id' => 28, 'isKota' => false],
            ['nama_kab_kota' => 'Bolaang Mongondow Utara', 'provinsi_id' => 28, 'isKota' => false],
            ['nama_kab_kota' => 'Kepulauan Sangihe', 'provinsi_id' => 28, 'isKota' => false],
            ['nama_kab_kota' => 'Kepulauan Talaud', 'provinsi_id' => 28, 'isKota' => false],
            ['nama_kab_kota' => 'Kepulauan Siau Tagulandang Biaro', 'provinsi_id' => 28, 'isKota' => false],
            ['nama_kab_kota' => 'Minahasa', 'provinsi_id' => 28, 'isKota' => false],
            ['nama_kab_kota' => 'Minahasa Selatan', 'provinsi_id' => 28, 'isKota' => false],
            ['nama_kab_kota' => 'Minahasa Tenggara', 'provinsi_id' => 28, 'isKota' => false],
            ['nama_kab_kota' => 'Minahasa Utara', 'provinsi_id' => 28, 'isKota' => false],
        ]);
    }
}
