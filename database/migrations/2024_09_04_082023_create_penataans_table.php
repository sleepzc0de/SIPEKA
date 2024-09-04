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
        Schema::create('penataans', function (Blueprint $table) {
            $table->id();
            $table->string('img_provinsi')->nullable();
            $table->string('ur_provinsi')->nullable();
            $table->string('ur_kab_kota')->nullable();
            $table->string('pic')->nullable();
            $table->string('status')->nullable();
            $table->json('approver')->nullable();
            $table->json('validator')->nullable();
            $table->json('konseptor')->nullable();
            $table->string('file_penataan')->nullable();
            $table->string('catatan_penataan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penataans');
    }
};
