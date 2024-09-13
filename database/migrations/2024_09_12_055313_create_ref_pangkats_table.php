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
        Schema::create('ref_pangkats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idPegawaiPangkat'); // Corresponds to idPegawaiPangkat from the JSON
            $table->foreignId('idPegawai')->constrained('ref_pegawais')->onDelete('cascade');
            $table->bigInteger('idRefPangkat');
            $table->string('namaPangkat');
            $table->string('kodeGolongan');
            $table->string('noSK');
            $table->date('tanggalMulai');
            $table->string('lampiran')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ref_pangkats');
    }
};
