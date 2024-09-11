<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabKotaJawaTimurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ref_kab_kotas')->insert([
            ['nama_kab_kota' => 'Blitar', 'provinsi_id' => 21, 'isKota' => true],
            ['nama_kab_kota' => 'Batu', 'provinsi_id' => 21, 'isKota' => true],
            ['nama_kab_kota' => 'Madiun', 'provinsi_id' => 21, 'isKota' => true],
            ['nama_kab_kota' => 'Mojokerto', 'provinsi_id' => 21, 'isKota' => true],
            ['nama_kab_kota' => 'Pasuruan', 'provinsi_id' => 21, 'isKota' => true],
            ['nama_kab_kota' => 'Probolinggo', 'provinsi_id' => 21, 'isKota' => true],
            ['nama_kab_kota' => 'Surabaya', 'provinsi_id' => 21, 'isKota' => true],
            ['nama_kab_kota' => 'Banyuwangi', 'provinsi_id' => 21, 'isKota' => false],
            ['nama_kab_kota' => 'Blitar', 'provinsi_id' => 21, 'isKota' => false],
            ['nama_kab_kota' => 'Bondowoso', 'provinsi_id' => 21, 'isKota' => false],
            ['nama_kab_kota' => 'Bojonegoro', 'provinsi_id' => 21, 'isKota' => false],
            ['nama_kab_kota' => 'Jember', 'provinsi_id' => 21, 'isKota' => false],
            ['nama_kab_kota' => 'Jombang', 'provinsi_id' => 21, 'isKota' => false],
            ['nama_kab_kota' => 'Kediri', 'provinsi_id' => 21, 'isKota' => false],
            ['nama_kab_kota' => 'Lamongan', 'provinsi_id' => 21, 'isKota' => false],
            ['nama_kab_kota' => 'Lumajang', 'provinsi_id' => 21, 'isKota' => false],
            ['nama_kab_kota' => 'Malang', 'provinsi_id' => 21, 'isKota' => false],
            ['nama_kab_kota' => 'Ngawi', 'provinsi_id' => 21, 'isKota' => false],
            ['nama_kab_kota' => 'Nganjuk', 'provinsi_id' => 21, 'isKota' => false],
            ['nama_kab_kota' => 'Pacitan', 'provinsi_id' => 21, 'isKota' => false],
            ['nama_kab_kota' => 'Pamekasan', 'provinsi_id' => 21, 'isKota' => false],
            ['nama_kab_kota' => 'Ponorogo', 'provinsi_id' => 21, 'isKota' => false],
            ['nama_kab_kota' => 'Situbondo', 'provinsi_id' => 21, 'isKota' => false],
            ['nama_kab_kota' => 'Sumenep', 'provinsi_id' => 21, 'isKota' => false],
            ['nama_kab_kota' => 'Sidoarjo', 'provinsi_id' => 21, 'isKota' => false],
            ['nama_kab_kota' => 'Trenggalek', 'provinsi_id' => 21, 'isKota' => false],
            ['nama_kab_kota' => 'Tulungagung', 'provinsi_id' => 21, 'isKota' => false],
        ]);
    }
}
