<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ref_pegawais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idPegawai')->nullable();
            $table->string('nip18',18)->unique()->nullable();
            $table->string('nip9',18)->unique()->nullable();
            $table->string('nama')->nullable();
            $table->string('email')->nullable();
            $table->string('noHp')->nullable();
            $table->date('tanggalLahir')->nullable();
            $table->char('idRefJenisKelamin',1)->nullable();
            $table->string('jenisKelamin')->nullable();
            $table->timestamps();
        });

    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ref_pegawais');
    }
};
