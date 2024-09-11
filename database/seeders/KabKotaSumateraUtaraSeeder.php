<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaSumateraUtaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinsiId = 2; // ID untuk Sumatera Utara

        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Medan', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Binjai', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Padangsidimpuan', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Pematangsiantar', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Tebing Tinggi', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Sibolga', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Aceh Tenggara', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Asahan', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Batu Bara', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Dairi', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Deli Serdang', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Humbang Hasundutan', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Karo', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Labuhanbatu', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Labuhanbatu Selatan', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Labuhanbatu Utara', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Mandailing Natal', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Nias', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Nias Barat', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Nias Selatan', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Nias Utara', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Pakpak Bharat', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Samosir', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Serdang Bedagai', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Simalungun', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Tapanuli Selatan', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Tapanuli Tengah', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Tapanuli Utara', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Toba', 'provinsi_id' => $provinsiId, 'isKota' => false],
        ]);
    }
}
