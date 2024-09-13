<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // PegawaiRomadanSakemSeeder::class,
            ProvinsiSeeder::class,
            KabKotaAcehSeeder::class,
            KabKotaBaliSeeder::class,
            KabKotaBangkaBelitungSeeder::class,
            KabKotaBantenSeeder::class,
            KabKotaBengkuluSeeder::class,
            KabKotaDIYSeeder::class,
            KabKotaDKIJakartaSeeder::class,
            KabKotaGorontaloSeeder::class,
            KabKotaJambiSeeder::class,
            KabKotaJawaBaratSeeder::class,
            KabKotaJawaTengahSeeder::class,
            KabKotaJawaTimurSeeder::class,
            KabKotaKalimantanBaratSeeder::class,
            KabKotaKalimantanSelatanSeeder::class,
            KabKotaKalimantanTengahSeeder::class,
            KabKotaKalimantanTimurSeeder::class,
            KabKotaKalimantanUtaraSeeder::class,
            KabKotaKepulauanRiauSeeder::class,
            KabKotaLampungSeeder::class,
            KabKotaMalukuSeeder::class,
            KabKotaMalukuUtaraSeeder::class,
            KabKotaNTBSeeder::class,
            KabKotaNTTSeeder::class,
            KabKotaPapuaBaratSeeder::class,
            KabKotaPapuaBaratDayaSeeder::class,
            KabKotaPapuaPegununganSeeder::class,
            KabKotaPapuaSeeder::class,
            KabKotaPapuaSelatanSeeder::class,
            KabKotaPapuaTengahSeeder::class,
            KabKotaRiauSeeder::class,
            KabKotaSulawesiBaratSeeder::class,
            KabKotaSulawesiSelatanSeeder::class,
            KabKotaSulawesiTengahSeeder::class,
            KabKotaSulawesiTenggaraSeeder::class,
            KabKotaSulawesiUtaraSeeder::class,
            KabKotaSumateraBaratSeeder::class,
            KabKotaSumateraUtaraSeeder::class,
            KabKotaSumateraSelatanSeeder::class

        ]);
    }
}
