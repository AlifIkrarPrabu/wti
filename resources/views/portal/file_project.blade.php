@extends('layouts.app')

@section('title', 'Manajemen File Proyek')

@section('content')
<div class="min-h-screen bg-gray-50 p-6">

    <div class="max-w-6xl mx-auto bg-white p-8 rounded-xl shadow-lg border border-gray-200">

        <h1 class="text-3xl font-bold text-blue-900 mb-6 text-center">
            Manajemen File Proyek
        </h1>

        {{-- ALERT --}}
        @if (session('success'))
            <div class="mb-4 p-4 bg-green-100 border-l-4 border-green-600 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

        {{-- FORM TAMBAH FILE --}}
        <div class="mb-8 p-6 bg-gray-100 rounded-lg border">
            <h2 class="text-xl font-semibold mb-4 text-gray-800">Tambah File Baru</h2>

            <form action="{{ route('portal.file.project.store') }}" method="POST">
                @csrf

                {{-- ROW 1 --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-gray-700 font-medium">Nama Project</label>
                        <input type="text" name="file_name" class="w-full p-2 border rounded-lg" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Number PO</label>
                        <input type="text" name="po_number" class="w-full p-2 border rounded-lg" required>
                    </div>
                </div>

                {{-- ROW 2 --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-gray-700 font-medium">Nama Perusahaan</label>
                        <input type="text" name="nama_perusahaan" class="w-full p-2 border rounded-lg" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Deskripsi</label>
                        <input type="text" name="description" class="w-full p-2 border rounded-lg" required>
                    </div>
                </div>

                <button class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    + Tambah File
                </button>
            </form>
        </div>

        {{-- DAFTAR FILE --}}
        <h2 class="text-2xl font-bold text-gray-900 mb-4">Daftar File</h2>

        <form action="{{ route('portal.file.project') }}" method="GET" class="mb-4">
            <input
                type="text"
                name="search"
                placeholder="Cari nama project..."
                value="{{ request('search') }}"
                class="w-full md:w-1/3 p-2 border rounded-lg"
            >
        </form>

        {{-- TABLE --}}
        <div class="overflow-x-auto border rounded-xl">
            <div class="max-h-[450px] overflow-y-auto">
                <table class="min-w-full text-sm border-collapse">
                    <thead class="bg-gray-100 sticky top-0 z-10">
                        <tr>
                            <th class="px-2 py-2 border text-center text-gray-700 font-semibold">No</th>
                            <th class="px-2 py-2 border text-center text-gray-700 font-semibold">Nama Project</th>
                            <th class="px-2 py-2 border text-center text-gray-700 font-semibold">Nama Perusahaan</th>
                            <th class="px-2 py-2 border text-center text-gray-700 font-semibold">Number PO</th>
                            <th class="px-2 py-2 border text-center text-gray-700 font-semibold">Deskripsi</th>
                            <th class="px-2 py-2 border text-center text-gray-700 font-semibold">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($files as $index => $file)
                        <tr class="hover:bg-gray-50">
                            <td class="px-2 py-2 border text-center align-middle">
                                {{ $index + 1 }}
                            </td>

                            <td class="px-2 py-2 border text-center align-middle">
                                <a
                                    href="{{ route('portal.kalkulasi.show', $file->id) }}"
                                    class="text-blue-600 hover:underline hover:text-blue-800"
                                    title="Buka detail project"
                                >
                                    {{ $file->file_name }}
                                </a>
                            </td>

                            <td class="px-2 py-2 border text-center align-middle">
                                {{ $file->nama_perusahaan ?? '-' }}
                            </td>

                            <td class="px-2 py-2 border text-center align-middle">
                                {{ $file->po_number ?? '-' }}
                            </td>

                            <td class="px-2 py-2 border text-center align-middle" title="{{ $file->description }}">
                                {{ $file->description ?? '-' }}
                            </td>

                            <td class="px-2 py-2 border text-center align-middle">
                                <button
                                    onclick="openEditModal(
                                        {{ $file->id }},
                                        @js($file->file_name),
                                        @js($file->description),
                                        @js($file->nama_perusahaan),
                                        @js($file->po_number)
                                    )"
                                    class="px-2 py-0.5 bg-yellow-400 text-white rounded text-[11px]"
                                >
                                    Edit
                                </button>

                                <form
                                    action="{{ route('portal.file.project.delete', $file->id) }}"
                                    method="POST"
                                    class="inline"
                                    onsubmit="return confirm('Yakin ingin menghapus file ini?')"
                                >
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        class="px-2 py-0.5 bg-red-600 text-white rounded text-[11px]"
                                    >
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="px-2 py-2 border align-middle">
                                Belum ada data file
                            </td>
                        </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>
        </div>

    </div>
</div>

{{-- MODAL EDIT --}}
<div id="editModal" class="fixed inset-0 bg-black/40 hidden flex items-center justify-center z-[9999] backdrop-blur-sm">
    <div class="bg-white rounded-xl p-6 w-full max-w-xl shadow-xl border transform scale-90 opacity-0 transition-all duration-300" id="editModalBox">

        <h2 class="text-xl font-bold mb-6">Edit File</h2>

        <form id="editForm" method="POST">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block font-medium text-gray-700">Nama Project</label>
                    <input id="editFileName" name="file_name" class="w-full p-2 border rounded-lg" required>
                </div>
                <div>
                    <label class="block font-medium text-gray-700">Number PO</label>
                    <input id="editPo" name="po_number" class="w-full p-2 border rounded-lg">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                <div>
                    <label class="block font-medium text-gray-700">Nama Perusahaan</label>
                    <input id="editPerusahaan" name="nama_perusahaan" class="w-full p-2 border rounded-lg">
                </div>
                <div>
                    <label class="block font-medium text-gray-700">Deskripsi</label>
                    <input id="editDescription" name="description" class="w-full p-2 border rounded-lg">
                </div>
            </div>

            <div class="flex justify-end space-x-3">
                <button type="button" onclick="closeEditModal()" class="px-4 py-2 bg-gray-300 rounded">
                    Batal
                </button>
                <button class="px-4 py-2 bg-blue-600 text-white rounded">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>

<script>
function openEditModal(id, name, desc, perusahaan, po) {
    document.getElementById('editFileName').value = name ?? '';
    document.getElementById('editDescription').value = desc ?? '';
    document.getElementById('editPerusahaan').value = perusahaan ?? '';
    document.getElementById('editPo').value = po ?? '';

    document.getElementById('editForm').action = '/portal/file-project/' + id;

    document.getElementById('editModal').classList.remove('hidden');

    setTimeout(() => {
        document.getElementById('editModalBox').classList.remove('scale-90', 'opacity-0');
        document.getElementById('editModalBox').classList.add('scale-100', 'opacity-100');
    }, 10);
}

function closeEditModal() {
    document.getElementById('editModalBox').classList.add('scale-90', 'opacity-0');
    setTimeout(() => {
        document.getElementById('editModal').classList.add('hidden');
    }, 200);
}
</script>

@endsection
