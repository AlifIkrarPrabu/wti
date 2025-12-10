<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KalkulasiJasa extends Model
{
    protected $table = 'kalkulasi_jasa';

    protected $fillable = [
        'kalkulasi_anggaran_id',
        'nama',
        'harga',
        'deskripsi',
        'jumlah',
        'total',
    ];
}
