<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KalkulasiAnggaran extends Model
{
    protected $fillable = [
        'project_file_id',
        'status',
    ];

    public function barang()
    {
        return $this->hasMany(KalkulasiBarang::class);
    }

    public function jasa()
    {
        return $this->hasMany(KalkulasiJasa::class);
    }
}
