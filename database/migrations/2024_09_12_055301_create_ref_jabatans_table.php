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
        Schema::create('ref_jabatans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idJabatan');
            $table->foreignId('idPegawai')->constrained('ref_pegawais')->onDelete('cascade');
            $table->bigInteger('idJabatanAtasan')->nullable();
            $table->bigInteger('idRefNamaJabatan');
            $table->string('namaJabatan');
            $table->string('statusJabatan');
            $table->string('esl1')->nullable();
            $table->string('esl2')->nullable();
            $table->string('esl3')->nullable();
            $table->string('esl4')->nullable();
            $table->bigInteger('idOrganisasi');
            $table->string('kodeOrganisasi');
            $table->string('kodeIndukOrganisasi');
            $table->string('organisasi');
            $table->date('tanggalMulai');
            $table->string('jenisJabatan');
            $table->string('noSK');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ref_jabatans');
    }
};
