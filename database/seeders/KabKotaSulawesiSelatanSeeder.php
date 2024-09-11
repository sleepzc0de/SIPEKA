<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaSulawesiSelatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Makassar', 'provinsi_id' => 30, 'isKota' => true],
            ['nama_kab_kota' => 'Parepare', 'provinsi_id' => 30, 'isKota' => true],
            ['nama_kab_kota' => 'Palopo', 'provinsi_id' => 30, 'isKota' => true],
            ['nama_kab_kota' => 'Bantaeng', 'provinsi_id' => 30, 'isKota' => false],
            ['nama_kab_kota' => 'Barru', 'provinsi_id' => 30, 'isKota' => false],
            ['nama_kab_kota' => 'Bone', 'provinsi_id' => 30, 'isKota' => false],
            ['nama_kab_kota' => 'Bulukumba', 'provinsi_id' => 30, 'isKota' => false],
            ['nama_kab_kota' => 'Enrekang', 'provinsi_id' => 30, 'isKota' => false],
            ['nama_kab_kota' => 'Gowa', 'provinsi_id' => 30, 'isKota' => false],
            ['nama_kab_kota' => 'Jeneponto', 'provinsi_id' => 30, 'isKota' => false],
            ['nama_kab_kota' => 'Kepulauan Selayar', 'provinsi_id' => 30, 'isKota' => false],
            ['nama_kab_kota' => 'Luwu', 'provinsi_id' => 30, 'isKota' => false],
            ['nama_kab_kota' => 'Luwu Timur', 'provinsi_id' => 30, 'isKota' => false],
            ['nama_kab_kota' => 'Luwu Utara', 'provinsi_id' => 30, 'isKota' => false],
            ['nama_kab_kota' => 'Maros', 'provinsi_id' => 30, 'isKota' => false],
            ['nama_kab_kota' => 'Pangkajene dan Kepulauan', 'provinsi_id' => 30, 'isKota' => false],
            ['nama_kab_kota' => 'Pinrang', 'provinsi_id' => 30, 'isKota' => false],
            ['nama_kab_kota' => 'Sidenreng Rappang', 'provinsi_id' => 30, 'isKota' => false],
            ['nama_kab_kota' => 'Sinjai', 'provinsi_id' => 30, 'isKota' => false],
            ['nama_kab_kota' => 'Soppeng', 'provinsi_id' => 30, 'isKota' => false],
            ['nama_kab_kota' => 'Takalar', 'provinsi_id' => 30, 'isKota' => false],
            ['nama_kab_kota' => 'Tana Toraja', 'provinsi_id' => 30, 'isKota' => false],
            ['nama_kab_kota' => 'Toraja Utara', 'provinsi_id' => 30, 'isKota' => false],
            ['nama_kab_kota' => 'Wajo', 'provinsi_id' => 30, 'isKota' => false],
        ]);

    }
}
