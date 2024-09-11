<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ref_provinsis')->insert([
            ['nama_provinsi' => 'Nanggroe Aceh Darussalam', 'nama_ibukota' => 'Banda Aceh'],
            ['nama_provinsi' => 'Sumatera Utara', 'nama_ibukota' => 'Medan'],
            ['nama_provinsi' => 'Sumatera Selatan', 'nama_ibukota' => 'Palembang'],
            ['nama_provinsi' => 'Sumatera Barat', 'nama_ibukota' => 'Padang'],
            ['nama_provinsi' => 'Bengkulu', 'nama_ibukota' => 'Bengkulu'],
            ['nama_provinsi' => 'Riau', 'nama_ibukota' => 'Pekanbaru'],
            ['nama_provinsi' => 'Kepulauan Riau', 'nama_ibukota' => 'Tanjung Pinang'],
            ['nama_provinsi' => 'Jambi', 'nama_ibukota' => 'Jambi'],
            ['nama_provinsi' => 'Lampung', 'nama_ibukota' => 'Bandar Lampung'],
            ['nama_provinsi' => 'Bangka Belitung', 'nama_ibukota' => 'Pangkal Pinang'],
            ['nama_provinsi' => 'Kalimantan Barat', 'nama_ibukota' => 'Pontianak'],
            ['nama_provinsi' => 'Kalimantan Timur', 'nama_ibukota' => 'Samarinda'],
            ['nama_provinsi' => 'Kalimantan Selatan', 'nama_ibukota' => 'Banjarbaru'],
            ['nama_provinsi' => 'Kalimantan Tengah', 'nama_ibukota' => 'Palangkaraya'],
            ['nama_provinsi' => 'Kalimantan Utara', 'nama_ibukota' => 'Tanjung Selor'],
            ['nama_provinsi' => 'Banten', 'nama_ibukota' => 'Serang'],
            ['nama_provinsi' => 'DKI Jakarta', 'nama_ibukota' => 'Jakarta'],
            ['nama_provinsi' => 'Jawa Barat', 'nama_ibukota' => 'Bandung'],
            ['nama_provinsi' => 'Jawa Tengah', 'nama_ibukota' => 'Semarang'],
            ['nama_provinsi' => 'Daerah Istimewa Yogyakarta', 'nama_ibukota' => 'Yogyakarta'],
            ['nama_provinsi' => 'Jawa Timur', 'nama_ibukota' => 'Surabaya'],
            ['nama_provinsi' => 'Bali', 'nama_ibukota' => 'Denpasar'],
            ['nama_provinsi' => 'Nusa Tenggara Timur', 'nama_ibukota' => 'Kupang'],
            ['nama_provinsi' => 'Nusa Tenggara Barat', 'nama_ibukota' => 'Mataram'],
            ['nama_provinsi' => 'Gorontalo', 'nama_ibukota' => 'Gorontalo'],
            ['nama_provinsi' => 'Sulawesi Barat', 'nama_ibukota' => 'Mamuju'],
            ['nama_provinsi' => 'Sulawesi Tengah', 'nama_ibukota' => 'Palu'],
            ['nama_provinsi' => 'Sulawesi Utara', 'nama_ibukota' => 'Manado'],
            ['nama_provinsi' => 'Sulawesi Tenggara', 'nama_ibukota' => 'Kendari'],
            ['nama_provinsi' => 'Sulawesi Selatan', 'nama_ibukota' => 'Makassar'],
            ['nama_provinsi' => 'Maluku Utara', 'nama_ibukota' => 'Sofifi'],
            ['nama_provinsi' => 'Maluku', 'nama_ibukota' => 'Ambon'],
            ['nama_provinsi' => 'Papua Barat', 'nama_ibukota' => 'Manokwari'],
            ['nama_provinsi' => 'Papua', 'nama_ibukota' => 'Jayapura'],
            ['nama_provinsi' => 'Papua Tengah', 'nama_ibukota' => 'Nabire'],
            ['nama_provinsi' => 'Papua Pegunungan', 'nama_ibukota' => 'Jayawijaya'],
            ['nama_provinsi' => 'Papua Selatan', 'nama_ibukota' => 'Merauke'],
            ['nama_provinsi' => 'Papua Barat Daya', 'nama_ibukota' => 'Sorong'],
        ]);
    }
}
