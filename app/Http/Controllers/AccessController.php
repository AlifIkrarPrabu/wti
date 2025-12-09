<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class AccessController extends Controller
{
    public function redirectToPortal(Request $request)
    {
        // Validasi input
        $request->validate([
            'access_id' => 'required|string|max:255',
        ], [
            'access_id.required' => 'ID Akses wajib diisi.',
            'access_id.string' => 'Format ID Akses tidak valid.',
        ]);

        $accessId = $request->input('access_id');

        // ==========================================================
        // KODE KHUSUS: WTI123 --> Redirect ke Website Accurate
        // ==========================================================
        if ($accessId === 'WTI123') {
            Log::info("Portal Access Success: ID [WTI123] redirect to Accurate website.");
            return redirect()->away('https://account.accurate.id/');
        }

        // ==========================================================
        // KODE KHUSUS: WTI1234 --> Redirect ke Budget Calculator
        // ==========================================================
        if ($accessId === 'WTI1234') {
            Log::info("Portal Access Success: ID [WTI1234] redirect to Budget Calculator.");
            return redirect()->route('portal.file.project');
        }

        // ==========================================================
        // LOGIKA DATABASE STANDAR
        // ==========================================================
        $user = User::where('system_id', $accessId)->first();

        if ($user) {
            $targetLink = $user->target_link;

            Log::info("Portal Access Success: User [{$accessId}] found. Redirecting to: {$targetLink}");

            if ($targetLink && filter_var($targetLink, FILTER_VALIDATE_URL)) {
                return redirect()->to($targetLink);
            } else {
                Log::error("Invalid target link for user {$accessId}: {$targetLink}");
                return back()->withErrors([
                    'access_id' => 'Link portal klien tidak valid atau tidak ditemukan.'
                ]);
            }
        }

        Log::warning("Portal Access Failed: ID Akses [{$accessId}] tidak ditemukan.");
        return back()->withErrors([
            'access_id' => 'ID Akses tidak valid. Silakan coba lagi.'
        ])->withInput();
    }
}
