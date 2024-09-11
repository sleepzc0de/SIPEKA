<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaJawaTengahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinsiId = 19; // ID untuk Jawa Tengah

        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Semarang', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Surakarta', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Magelang', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Pekalongan', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Tegal', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Banyumas', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Batang', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Blora', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Boyolali', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Brebes', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Cilacap', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Demak', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Grobogan', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Jepara', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Karanganyar', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Kebumen', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Kendal', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Klaten', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Kudus', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Pati', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Pemalang', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Purbalingga', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Purworejo', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Rembang', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Temanggung', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Tegal', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Wonosobo', 'provinsi_id' => $provinsiId, 'isKota' => false],
        ]);
    }
}
