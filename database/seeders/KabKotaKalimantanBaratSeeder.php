<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaKalimantanBaratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinsiId = 11; // ID untuk Kalimantan Barat

        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Pontianak', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Singkawang', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Bengkayang', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Kapuas Hulu', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Kayong Utara', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Ketapang', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Kubu Raya', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Landak', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Melawi', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Sambas', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Sanggau', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Sekadau', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Sintang', 'provinsi_id' => $provinsiId, 'isKota' => false],
        ]);
    }
}
