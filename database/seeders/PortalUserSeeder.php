<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB; // Tambahkan ini jika Anda ingin menggunakan truncate

class PortalUserSeeder extends Seeder
{
    /**
     * Jalankan seeder database.
     */
    public function run(): void
    {
        // Opsional: Hapus data lama untuk memastikan database bersih sebelum seed baru
        DB::table('users')->truncate(); 

        // Data Klien (Sistem ID dan Link Tujuan)
        $users = [
            // KLIEN BARU: Accurate dengan ID Khusus (Ini ID yang harus Anda coba!)
            [
                'name' => 'Klien Accurate Baru',
                'system_id' => 'ACCURATE456', 
                'target_link' => 'https://accurate.id/login', // Link login Accurate
            ],
            // Klien Demo yang Anda masukkan sebelumnya
            [
                'name' => 'Pengguna Uji Coba (Lama)',
                'system_id' => 'WTI123',
                'target_link' => 'https://account.accurate.id/', 
            ],
            // Klien Demo Lain (misalnya diarahkan ke Google)
            [
                'name' => 'Klien Demo B (Google)',
                'system_id' => 'DEMO999',
                'target_link' => 'https://google.com/', 
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
