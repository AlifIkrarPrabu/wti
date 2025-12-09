<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Menampilkan halaman Karir PT. Wise Tech Integra.
     */
    public function index()
    {
        // Data lowongan pekerjaan (contoh)
        $jobs = [
            [
                'title' => 'System Integration Engineer',
                'location' => 'Jakarta Selatan',
                'type' => 'Full-Time',
                'description' => 'Bertanggung jawab dalam implementasi dan integrasi solusi infrastruktur IT, seperti server, storage, dan network security.'
            ],
            [
                'title' => 'Cloud Migration Specialist (AWS/Azure)',
                'location' => 'Remote/Hybrid',
                'type' => 'Full-Time',
                'description' => 'Memimpin perencanaan dan eksekusi migrasi infrastruktur klien ke platform cloud (AWS/Azure).'
            ],
            [
                'title' => 'Cybersecurity Analyst',
                'location' => 'Jakarta Pusat',
                'type' => 'Contract',
                'description' => 'Melakukan pengujian penetrasi (pentesting), analisis kerentanan, dan memberikan rekomendasi keamanan.'
            ],
        ];

        return view('career.index', compact('jobs'));
    }
}
