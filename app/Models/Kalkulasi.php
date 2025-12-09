<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kalkulasi extends Model
{
    protected $fillable = ['project_file_id', 'status'];

    public function items()
    {
        return $this->hasMany(KalkulasiItem::class);
    }
}
