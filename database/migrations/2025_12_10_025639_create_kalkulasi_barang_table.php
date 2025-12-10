<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('kalkulasi_barang', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kalkulasi_anggaran_id')->constrained()->cascadeOnDelete();
            $table->string('nama');
            $table->decimal('harga', 15, 2)->default(0);
            $table->string('satuan')->nullable();
            $table->integer('jumlah')->default(1);
            $table->decimal('total', 15, 2)->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kalkulasi_barang');
    }
};
