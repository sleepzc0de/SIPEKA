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
        Schema::table('penataans', function (Blueprint $table) {
            $table->unsignedBigInteger('id_kab_kota')->nullable();
            $table->foreign('id_kab_kota')->references('id')->on('ref_kab_kotas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('penataans', function (Blueprint $table) {
            $table->dropColumn('id_kab_kota');
        });
    }
};
