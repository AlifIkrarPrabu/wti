<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectFile extends Model
{
    // Jika table bernama "project_files", tidak perlu deklarasi table

    // Kolom yang boleh diisi mass assignment
    protected $fillable = [
        'file_name',
        'nama_perusahaan',
        'po_number',
        'description',
        'file_path',   // jika kamu simpan path file
        'uploaded_by', // jika kamu ingin menyimpan user id
    ];
}
