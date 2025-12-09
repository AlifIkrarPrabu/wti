<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('project_files', function (Blueprint $table) {
            $table->string('nama_perusahaan')->nullable()->after('file_name');
            $table->string('po_number')->nullable()->after('nama_perusahaan');
        });
    }

    public function down()
    {
        Schema::table('project_files', function (Blueprint $table) {
            $table->dropColumn(['nama_perusahaan', 'po_number']);
        });
    }
};
