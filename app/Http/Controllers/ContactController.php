<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // Digunakan untuk mencatat data form

class ContactController extends Controller
{
    /**
     * Menampilkan halaman Kontak.
     */
    public function index()
    {
        // Mengarahkan ke view yang sudah Anda buat
        return view('contact'); 
    }

    /**
     * Memproses pengiriman formulir kontak.
     */
    public function submit(Request $request)
    {
        // 1. Validasi Data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // 2. Logika Pemrosesan (Contoh: Mengirim Email atau Menyimpan ke DB)
        // Karena ini hanya simulasi, kita akan mencatatnya ke log Laravel
        Log::info('Formulir Kontak Diterima:', [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
        ]);
        
        // Di aplikasi nyata, di sini Anda akan menggunakan Mail::send(...) atau Job

        // 3. Redirect pengguna kembali dengan pesan sukses
        // Asumsi ada route 'home' atau 'contact.index' untuk redirect
        return redirect()->route('contact.index')->with('success', 'Terima kasih! Pesan Anda telah kami terima.');
    }
}
