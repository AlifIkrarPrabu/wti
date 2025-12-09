<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectFile;

class ProjectFileController extends Controller
{
    public function index(Request $request)
    {
        // Ambil keyword dari input search
        $search = $request->search;

        // Query dasar
        $query = ProjectFile::orderBy('created_at', 'desc');

        // Jika ada pencarian
        if ($search) {
            $query->where('file_name', 'like', '%' . $search . '%');
        }

        // Ambil hasil
        $files = $query->get();

        // Kirim data + keyword ke view
        return view('portal.file_project', compact('files', 'search'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'file_name' => 'required',
            'description' => 'nullable',
            'nama_perusahaan' => 'nullable',
            'po_number' => 'nullable'
        ]);

        ProjectFile::create([
            'file_name' => $request->file_name,
            'description' => $request->description,
            'nama_perusahaan' => $request->nama_perusahaan,
            'po_number' => $request->po_number,
        ]);

        return back()->with('success', 'File berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'file_name' => 'required',
            'description' => 'nullable'
        ]);

        $file = ProjectFile::findOrFail($id);
        $file->update($request->only('file_name', 'description', 'nama_perusahaan', 'po_number'));

        return back()->with('success', 'File berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $file = ProjectFile::findOrFail($id);
        $file->delete();

        return back()->with('success', 'File berhasil dihapus!');
    }
}
