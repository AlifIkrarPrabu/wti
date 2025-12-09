<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 

class PortalController extends Controller
{
    /**
     * Tampilkan halaman input ID Portal.
     */
    public function showPortalForm()
    {
        // Jika pengguna sudah memiliki akses di session, arahkan mereka ke link tujuan
        if (session('portal_access')) {
            // Kita arahkan ke target link, tapi jika target link adalah Google (misalnya), 
            // kita mungkin ingin kembali ke halaman portal agar tidak terjebak.
            // Untuk tujuan demo, kita biarkan saja.
        }
        return view('portal.index');
    }

    /**
     * Proses autentikasi ID Portal.
     */
    public function accessPortal(Request $request)
    {
        // 1. Validasi Input
        $request->validate([
            'system_id' => ['required', 'string', 'max:255'],
        ]);

        // 2. Cari ID di database
        $user = User::where('system_id', $request->system_id)->first();

        if ($user) {
            // ID Ditemukan:
            // Simpan data akses ke dalam session (menggantikan Auth::login)
            $request->session()->put('portal_access', [
                'id' => $user->system_id,
                'name' => $user->name,
                'target_link' => $user->target_link,
            ]);

            // Arahkan ke link tujuan (sistem mereka)
            return redirect($user->target_link);
        }

        // ID Tidak Ditemukan:
        return back()->withErrors([
            'system_id' => 'ID yang Anda masukkan salah. Silakan coba lagi.',
        ])->onlyInput('system_id');
    }

    /**
     * Logout Portal (Hanya menghapus session).
     */
    public function logoutPortal(Request $request)
    {
        $request->session()->forget('portal_access'); // Hapus session portal
        return redirect('/portal')->with('status', 'Anda telah keluar dari Portal.');
    }
}
