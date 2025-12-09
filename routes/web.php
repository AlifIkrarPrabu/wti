<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Portal\PortalController;
use App\Http\Controllers\AccessController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectFileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// HOME
Route::get('/', function () {
    return view('home'); 
})->name('home');

// ==========================================================
// PORTAL - AKSES ID (Sistem Otentikasi Berbasis system_id)
// ==========================================================

// --- RUTE UNTUK GUEST (PENGGUNA BELUM LOGIN) ---
Route::middleware(['guest'])->group(function () {
    
    // Rute GET: Menampilkan formulir login
    // KOREKSI FINAL: Menggunakan 'portal.login' agar sesuai dengan nama file Blade Anda (resources/views/portal/login.blade.app).
    Route::get('/portal', function () {
        return view('portal.login'); // <-- DIUBAH KEMBALI KE 'portal.login'
    })->name('portal.login'); 

    // Rute POST: Memproses ID Akses dan melakukan REDIRECT EKSTERNAL
    // CATATAN: Logika baru untuk 'WTI1234' akan ditambahkan di Controller ini.
    Route::post('/portal', [AccessController::class, 'redirectToPortal'])->name('portal.access');
});


// --- RUTE INTERNAL UNTUK PENGGUNA YANG SUDAH LOGIN ---
Route::middleware(['auth'])->prefix('portal')->name('portal.')->group(function () {
    // Dashboard Portal (Hanya diakses setelah login sukses)
    Route::get('/dashboard', [PortalController::class, 'dashboard'])->name('dashboard');
    
    // Rute Logout
    Route::post('/logout', [PortalController::class, 'logout'])->name('logout');
});


// Redirect /dashboard ke /portal/dashboard (jika ada)
Route::get('/dashboard', function () {
    return redirect()->route('portal.file.project');
});

// ==========================================================
// FITUR KALKULASI ANGGARAN PROYEK
// ==========================================================

Route::get('/portal/file-project', [ProjectFileController::class, 'index'])->name('portal.file.project');
Route::post('/portal/file-project', [ProjectFileController::class, 'store'])->name('portal.file.project.store');
Route::put('/portal/file-project/{id}', [ProjectFileController::class, 'update'])->name('portal.file.project.update');
Route::delete('/portal/file-project/{id}', [ProjectFileController::class, 'destroy'])->name('portal.file.project.delete');

// Halaman kalkulasi per file proyek
Route::get('/portal/kalkulasi/{id}', [App\Http\Controllers\KalkulasiAnggaranController::class, 'show'])
    ->name('portal.kalkulasi.show');

// Simpan anggaran
Route::post('/portal/kalkulasi/{id}', [App\Http\Controllers\KalkulasiAnggaranController::class, 'store'])
    ->name('portal.kalkulasi.store');



// ==========================================================
// FITUR BARU: KARIR
// ==========================================================

// Rute GET: Halaman Karir
Route::get('/karir', [CareerController::class, 'index'])->name('career.index');

Route::get('/contact', function () {
    return view('contact'); // Memanggil view contact.blade.php
})->name('contact.index');

// Route untuk menampilkan halaman kontak (digunakan oleh menu navigasi)
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

// Route untuk memproses pengiriman form kontak (Route yang HILANG)
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');