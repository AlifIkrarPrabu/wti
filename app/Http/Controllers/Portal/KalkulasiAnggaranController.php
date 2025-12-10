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

    public function store(Request $request, ProjectFile $file)
    {
        DB::transaction(function () use ($request, $file) {

            $kalkulasi = KalkulasiAnggaran::updateOrCreate(
                ['project_file_id' => $file->id],
                ['status' => $request->status]
            );

            // RESET DATA LAMA
            $kalkulasi->barang()->delete();
            $kalkulasi->jasa()->delete();

            // BARANG
            if ($request->barang) {
                foreach ($request->barang['nama'] as $i => $nama) {
                    $harga  = $request->barang['harga'][$i] ?? 0;
                    $jumlah = $request->barang['jumlah'][$i] ?? 1;

                    KalkulasiBarang::create([
                        'kalkulasi_anggaran_id' => $kalkulasi->id,
                        'nama' => $nama,
                        'harga' => $harga,
                        'satuan' => $request->barang['satuan'][$i] ?? null,
                        'jumlah' => $jumlah,
                        'total' => $harga * $jumlah,
                    ]);
                }
            }

            // JASA
            if ($request->jasa) {
                foreach ($request->jasa['nama'] as $i => $nama) {
                    $harga  = $request->jasa['harga'][$i] ?? 0;
                    $jumlah = $request->jasa['jumlah'][$i] ?? 1;

                    KalkulasiJasa::create([
                        'kalkulasi_anggaran_id' => $kalkulasi->id,
                        'nama' => $nama,
                        'harga' => $harga,
                        'deskripsi' => $request->jasa['deskripsi'][$i] ?? null,
                        'jumlah' => $jumlah,
                        'total' => $harga * $jumlah,
                    ]);
                }
            }
        });

        return back()->with('success', 'Kalkulasi berhasil disimpan');
    }
}
