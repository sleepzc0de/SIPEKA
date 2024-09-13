<?php

namespace Database\Seeders;

use App\Models\ref_jabatan;
use App\Models\ref_pangkat;
use App\Models\ref_pegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PegawaiRomadanSakemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Membaca file JSON pegawai
         $pegawaiData = json_decode(file_get_contents(database_path('data/romadan/pegawai.json')), true);
         foreach ($pegawaiData['data'] as $pegawai) {
             // Insert data ke tabel Pegawai
             $newPegawai = ref_pegawai::create([
                 'idPegawai' => $pegawai['idPegawai'],
                 'nip18' => $pegawai['nip18'],
                 'nip9' => $pegawai['nip9'],
                 'nama' => $pegawai['nama'],
                 'email' => $pegawai['email'],
                 'noHp' => $pegawai['noHp'],
                 'tanggalLahir' => $pegawai['tanggalLahir'],
                 'idrefJenisKelamin' => $pegawai['idrefJenisKelamin'],
                 'jenisKelamin' => $pegawai['jenisKelamin'],
                 'gravatar' => $pegawai['gravatar']
             ]);
         }


    }
}
