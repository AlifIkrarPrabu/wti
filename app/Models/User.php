<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     * Mengganti 'email', 'password', 'role' dengan 'system_id' dan 'target_link'.
     */
    protected $fillable = [
        'name',
        'system_id', // ID yang akan diinput pengguna di portal
        'target_link', // Link sistem tujuan
    ];

    /**
     * The attributes that should be hidden for serialization.
     */
    protected $hidden = [
        // Tidak ada yang disembunyikan
    ];

    /**
     * The attributes that should be cast.
     */
    protected $casts = [
        // Dikosongkan
    ];
}
