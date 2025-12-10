<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use App\Models\KalkulasiAnggaran;
use App\Models\KalkulasiBarang;
use App\Models\KalkulasiJasa;
use App\Models\ProjectFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KalkulasiAnggaranController extends Controller
{
    public function show(ProjectFile $file)
    {
        $kalkulasi = KalkulasiAnggaran::with(['barang', 'jasa'])
            ->where('project_file_id', $file->id)
            ->first();

        return view('portal.kalkulasi_anggaran', compact('file', 'kalkulasi'));
    }

    public function store(Request $request, $id)
{
    $kalkulasi = KalkulasiAnggaran::firstOrCreate(
        ['project_file_id' => $id],
        ['status' => 'draft']
    );

    // ================= PROTEKSI FINAL =================
    if ($kalkulasi->status === 'final') {
        return back()->with('error', 'Data sudah final dan tidak dapat diubah');
    }

    // ================= UPDATE BUDGET & STATUS =================
    if ($request->filled('budget')) {
        $kalkulasi->budget = $request->budget;
    }

    $kalkulasi->status = $request->status;
    $kalkulasi->save();

    // ================= HAPUS DATA LAMA =================
    $kalkulasi->barang()->delete();
    $kalkulasi->jasa()->delete();

    // ================= SIMPAN BARANG =================
    if ($request->barang && isset($request->barang['nama'])) {
        foreach ($request->barang['nama'] as $i => $nama) {
            $harga  = $request->barang['harga'][$i] ?? 0;
            $jumlah = $request->barang['jumlah'][$i] ?? 0;

            $kalkulasi->barang()->create([
                'nama'   => $nama,
                'harga'  => $harga,
                'satuan' => $request->barang['satuan'][$i] ?? '',
                'jumlah' => $jumlah,
                'total'  => $harga * $jumlah,
            ]);
        }
    }

    // ================= SIMPAN JASA =================
    if ($request->jasa && isset($request->jasa['nama'])) {
        foreach ($request->jasa['nama'] as $i => $nama) {
            $harga  = $request->jasa['harga'][$i] ?? 0;
            $jumlah = $request->jasa['jumlah'][$i] ?? 0;

            $kalkulasi->jasa()->create([
                'nama'      => $nama,
                'harga'     => $harga,
                'deskripsi' => $request->jasa['deskripsi'][$i] ?? '',
                'jumlah'    => $jumlah,
                'total'     => $harga * $jumlah,
            ]);
        }
    }

    return back()->with('success', 'Kalkulasi berhasil disimpan');
}


}
