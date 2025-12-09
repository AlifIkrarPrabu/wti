<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KalkulasiItem extends Model
{
    protected $fillable = [
        'kalkulasi_id',
        'type',
        'nama',
        'harga',
        'jumlah',
        'satuan',
        'deskripsi'
    ];
}
