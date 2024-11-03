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
        Schema::create('verifikasi', function (Blueprint $table) {
            $table->id();
            $table->string('tanggalKirim')->nullable();
            $table->string('nik')->nullable();
            $table->string('nama')->nullable();
            $table->string('departemen')->nullable();
            $table->string('jamBangun')->nullable();
            $table->string('jamSampai')->nullable();
            $table->string('jamTidur')->nullable();
            $table->string('totalDurasiTidur')->nullable();
            $table->string('shift')->nullable();
            $table->string('keluhan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verifikasi');
    }
};
