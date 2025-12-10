<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('kalkulasi_anggarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_file_id')->constrained('project_files')->cascadeOnDelete();
            $table->enum('status', ['draft', 'final'])->default('draft');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kalkulasi_anggarans');
    }
};
