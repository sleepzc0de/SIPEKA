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
            $table->json('pic')->nullable();
            $table->string('status')->nullable();
            $table->json('approver')->nullable();
            $table->json('validator')->nullable();
            $table->json('konseptor')->nullable();
            $table->string('file_penataan')->nullable();
            $table->json('file_dukungan')->nullable();
            $table->string('catatan_penataan')->nullable();
            $table->boolean('isValided')->nullable();
            $table->boolean('isApproved')->nullable();
            $table->boolean('isConcepted')->nullable();
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
