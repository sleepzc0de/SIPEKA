<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaSumateraSelatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinsiId = 3; // ID untuk Sumatera Selatan

        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Palembang', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Lubuklinggau', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Pagar Alam', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Prabumulih', 'provinsi_id' => $provinsiId, 'isKota' => true],
            ['nama_kab_kota' => 'Banyuasin', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Empat Lawang', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Lahat', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Muara Enim', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Muara Bangkahulu', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'OKI', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'OKU', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'OKU Selatan', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'OKU Timur', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Ogan Ilir', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Penukal Abab Lematang Ilir', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Seluma', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Musi Banyuasin', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Musi Rawas', 'provinsi_id' => $provinsiId, 'isKota' => false],
            ['nama_kab_kota' => 'Musi Rawas Utara', 'provinsi_id' => $provinsiId, 'isKota' => false],
        ]);
    }
}
