<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

/**
 * Controller ini menangani seluruh logika akses portal, mulai dari
 * menampilkan form, memproses login, hingga logout.
 */
class PortalController extends Controller
{
    // --- ATUR KREDENSIAL DI SINI ---
    // Gunakan Hash::make('password') untuk membuat hash yang aman.
    private $validUsers = [
        'user@wisetech.co.id' => [
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // Password: 'password'
            'name' => 'John Doe (WTI)',
        ],
        'client@acme.com' => [
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // Password: 'password'
            'name' => 'Jane Smith (ACME)',
        ],
    ];
    // --------------------------------

    /**
     * Menampilkan formulir login portal.
     * Route: GET /portal (portal.form)
     */
    public function form() // METHOD SUDAH BENAR
    {
        if (Session::has('portal_access')) {
            // Jika sudah login, redirect ke halaman utama portal (yaitu dashboard)
            return redirect()->route('portal.dashboard');
        }

        // Tampilkan view form login portal
        return view('portal.login');
    }

    /**
     * Memproses permintaan login.
     * Route: POST /portal/access (portal.access)
     */
    public function access(Request $request) // METHOD SUDAH BENAR
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $email = $request->email;
        $password = $request->password;

        if (isset($this->validUsers[$email])) {
            $user = $this->validUsers[$email];

            // Cek password menggunakan Hash
            if (Hash::check($password, $user['password'])) {
                
                // Login Berhasil
                Session::put('portal_access', [
                    'email' => $email,
                    'name' => $user['name'],
                    'logged_in_at' => now(),
                ]);

                // Redirect ke dashboard portal
                return redirect()->route('portal.dashboard')->with('success', 'Selamat datang di Portal, ' . $user['name']);
            }
        }

        // Login Gagal
        return redirect()->route('portal.form')->withErrors(['login' => 'Kombinasi email dan password tidak valid.']);
    }

    /**
     * Menampilkan dashboard portal (membutuhkan otentikasi).
     * Route: /portal/dashboard (portal.dashboard)
     * CATATAN: Method ini belum ada di kode Anda sebelumnya. Ini wajib ada.
     */
    public function dashboard()
    {
        // Pastikan user sudah login sebelum menampilkan dashboard
        if (!Session::has('portal_access')) {
             return redirect()->route('portal.form')->withErrors(['auth' => 'Anda harus login untuk mengakses Dashboard.']);
        }
        
        return view('portal.dashboard', [
            'userName' => Session::get('portal_access.name')
        ]);
    }

    /**
     * Memproses logout portal.
     * Route: POST /portal/logout (portal.logout)
     */
    public function logout() // METHOD SUDAH BENAR
    {
        Session::forget('portal_access');
        return redirect('/')->with('success', 'Anda telah keluar dari Portal.');
    }
}
