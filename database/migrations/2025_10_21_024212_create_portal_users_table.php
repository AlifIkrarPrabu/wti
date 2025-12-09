<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        // Hapus tabel users yang lama terlebih dahulu (jika ada)
        Schema::dropIfExists('users'); 
        
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // Kolom baru untuk otentikasi berbasis ID
            $table->string('system_id')->unique(); // ID unik untuk login (kunci otentikasi)
            $table->string('target_link'); // Link sistem tujuan setelah login
            $table->timestamps();
        });
    }

    /**
     * Batalkan migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
