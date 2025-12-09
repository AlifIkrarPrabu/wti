<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectFile;

class KalkulasiAnggaranController extends Controller
{
    public function show($id)
    {
        $file = ProjectFile::findOrFail($id);

        return view('portal.kalkulasi_anggaran', compact('file'));
    }

    public function store(Request $request, $id)
    {
        $budget = array_sum($request->rencana ?? []);
        $actual = array_sum($request->realisasi ?? []);
        $keuntungan = $budget - $actual;

        return back()->with([
            'budget' => $budget,
            'actual' => $actual,
            'keuntungan' => $keuntungan,
            'success' => 'Perhitungan berhasil!'
        ]);
    }
}
