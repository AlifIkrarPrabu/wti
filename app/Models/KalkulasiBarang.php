<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KalkulasiBarang extends Model
{
    protected $table = 'kalkulasi_barang';

    protected $fillable = [
        'kalkulasi_anggaran_id',
        'nama',
        'harga',
        'satuan',
        'jumlah',
        'total',
    ];
}
