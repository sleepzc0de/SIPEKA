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
        Schema::create('ref_statuses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idPegawaiStatus');
            $table->foreignId('idPegawai')->constrained('ref_pegawais')->onDelete('cascade');
            $table->bigInteger('idRefStatus');
            $table->string('uraian');
            $table->date('tanggalMulai');
            $table->date('tanggalSelesai')->nullable();
            $table->string('noSK');
            $table->string('lampiran')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ref_statuses');
    }
};
