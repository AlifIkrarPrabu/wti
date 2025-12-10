@extends('layouts.app')

@section('title', 'Kalkulasi Anggaran - ' . $file->file_name)

@section('content')
<div class="min-h-screen bg-gray-100 p-6">
<div class="max-w-5xl mx-auto bg-white p-8 rounded-xl shadow-lg border">

    {{-- TITLE --}}
    <h1 class="text-3xl font-bold text-blue-900 mb-1">Kalkulasi Anggaran</h1>
    <p class="text-gray-600 mb-6">Proyek: <strong>{{ $file->file_name }}</strong></p>

    {{-- FORM --}}
    <form action="{{ route('portal.kalkulasi.store', $file->id) }}" method="POST">
        @csrf
        <input type="hidden" name="status" id="statusInput" value="{{ $kalkulasi->status ?? 'draft' }}">

        {{-- INPUT ATAS --}}
        <div class="space-y-4 mb-8">

            {{-- BARANG --}}
            <div class="flex gap-4 items-center">
                <input type="text" id="inputBarang"
                    class="flex-1 p-3 border rounded-full"
                    placeholder="Nama Barang.....">
                <button type="button"
                    onclick="tambahBarang()"
                    class="px-6 py-2 bg-orange-500 text-white rounded-full">
                    Tambah Barang
                </button>
            </div>

            {{-- JASA --}}
            <div class="flex gap-4 items-center">
                <input type="text" id="inputJasa"
                    class="flex-1 p-3 border rounded-full"
                    placeholder="Jenis Jasa.....">
                <button type="button"
                    onclick="tambahJasa()"
                    class="px-6 py-2 bg-orange-500 text-white rounded-full">
                    Tambah Jasa
                </button>
            </div>

        </div>

        {{-- ====================== DAFTAR BARANG ====================== --}}
        <h2 class="text-xl font-bold text-center mb-4">Daftar Barang</h2>

        <div class="overflow-x-auto mb-10">
            <table class="w-full border text-sm text-center">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border p-2">No</th>
                        <th class="border p-2">Nama Barang</th>
                        <th class="border p-2">Harga</th>
                        <th class="border p-2">Satuan</th>
                        <th class="border p-2">Jumlah</th>
                        <th class="border p-2">Total</th>
                    </tr>
                </thead>
                <tbody id="barangTable">

                    @if(isset($kalkulasi))
                        @foreach($kalkulasi->barang as $i => $item)
                        <tr>
                            <td class="border p-2">{{ $i + 1 }}</td>
                            <td class="border p-2">
                                {{ $item->nama }}
                                <input type="hidden" name="barang[nama][]" value="{{ $item->nama }}">
                            </td>
                            <td class="border p-2">
                                <input type="number" name="barang[harga][]" value="{{ $item->harga }}" class="border rounded p-1 w-full">
                            </td>
                            <td class="border p-2">
                                <input type="text" name="barang[satuan][]" value="{{ $item->satuan }}" class="border rounded p-1 w-full">
                            </td>
                            <td class="border p-2">
                                <input type="number" name="barang[jumlah][]" value="{{ $item->jumlah }}" class="border rounded p-1 w-full">
                            </td>
                            <td class="border p-2">{{ number_format($item->total, 0, ',', '.') }}</td>
                        </tr>
                        @endforeach
                    @endif

                </tbody>
            </table>
        </div>
            <div class="text-right font-bold text-lg mt-2">
                Total Barang: Rp <span id="totalBarang">0</span>
            </div>


        {{-- ====================== DAFTAR JASA ====================== --}}
        <h2 class="text-xl font-bold text-center mb-4">Daftar Jasa</h2>

        <div class="overflow-x-auto mb-8">
            <table class="w-full border text-sm text-center">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border p-2">No</th>
                        <th class="border p-2">Jenis Jasa</th>
                        <th class="border p-2">Harga</th>
                        <th class="border p-2">Deskripsi</th>
                        <th class="border p-2">Jumlah</th>
                        <th class="border p-2">Total</th>
                    </tr>
                </thead>
                <tbody id="jasaTable">

                    @if(isset($kalkulasi))
                        @foreach($kalkulasi->jasa as $i => $item)
                        <tr>
                            <td class="border p-2">{{ $i + 1 }}</td>
                            <td class="border p-2">
                                {{ $item->nama }}
                                <input type="hidden" name="jasa[nama][]" value="{{ $item->nama }}">
                            </td>
                            <td class="border p-2">
                                <input type="number" name="jasa[harga][]" value="{{ $item->harga }}" class="border rounded p-1 w-full">
                            </td>
                            <td class="border p-2">
                                <input type="text" name="jasa[deskripsi][]" value="{{ $item->deskripsi }}" class="border rounded p-1 w-full">
                            </td>
                            <td class="border p-2">
                                <input type="number" name="jasa[jumlah][]" value="{{ $item->jumlah }}" class="border rounded p-1 w-full">
                            </td>
                            <td class="border p-2">{{ number_format($item->total, 0, ',', '.') }}</td>
                        </tr>
                        @endforeach
                    @endif

                </tbody>
            </table>
        </div>
            <div class="text-right font-bold text-lg mt-2">
                Total Jasa: Rp <span id="totalJasa">0</span>
            </div>
            <div class="text-right font-extrabold text-xl mt-4 text-blue-700">
                Grand Total: Rp <span id="grandTotal">0</span>
            </div>



        {{-- BUTTON --}}
        <div class="flex justify-end gap-4 mt-8">
            <button type="submit" onclick="setStatus('draft')" class="px-8 py-3 bg-green-500 text-white rounded-full">
                Submit
            </button>

            <button type="submit" onclick="setStatus('final')" class="px-8 py-3 bg-red-500 text-white rounded-full">
                Finish
            </button>
        </div>

    </form>
</div>
</div>

{{-- ====================== SCRIPT ====================== --}}
<script>
let barangCount = document.querySelectorAll('#barangTable tr').length;
let jasaCount   = document.querySelectorAll('#jasaTable tr').length;

function formatRupiah(angka) {
    return angka.toLocaleString('id-ID');
}

function hitungBarang() {
    let totalBarang = 0;

    document.querySelectorAll('#barangTable tr').forEach(row => {
        const harga = row.querySelector('input[name="barang[harga][]"]');
        const jumlah = row.querySelector('input[name="barang[jumlah][]"]');
        const totalCell = row.cells[5];

        if (harga && jumlah) {
            const total = (harga.value || 0) * (jumlah.value || 0);
            totalCell.innerText = formatRupiah(total);
            totalBarang += total;
        }
    });

    document.getElementById('totalBarang').innerText = formatRupiah(totalBarang);
    return totalBarang;
}

function hitungJasa() {
    let totalJasa = 0;

    document.querySelectorAll('#jasaTable tr').forEach(row => {
        const harga = row.querySelector('input[name="jasa[harga][]"]');
        const jumlah = row.querySelector('input[name="jasa[jumlah][]"]');
        const totalCell = row.cells[5];

        if (harga && jumlah) {
            const total = (harga.value || 0) * (jumlah.value || 0);
            totalCell.innerText = formatRupiah(total);
            totalJasa += total;
        }
    });

    document.getElementById('totalJasa').innerText = formatRupiah(totalJasa);
    return totalJasa;
}

function hitungGrandTotal() {
    const barang = hitungBarang();
    const jasa   = hitungJasa();
    document.getElementById('grandTotal').innerText = formatRupiah(barang + jasa);
}

document.addEventListener('input', function (e) {
    if (e.target.matches('input')) {
        hitungGrandTotal();
    }
});

function tambahBarang() {
    const nama = document.getElementById('inputBarang').value;
    if (!nama) return;

    barangCount++;
    document.getElementById('barangTable').insertAdjacentHTML('beforeend', `
        <tr>
            <td class="border p-2">${barangCount}</td>
            <td class="border p-2">
                ${nama}
                <input type="hidden" name="barang[nama][]" value="${nama}">
            </td>
            <td class="border p-2"><input type="number" name="barang[harga][]" class="border rounded p-1 w-full"></td>
            <td class="border p-2"><input type="text" name="barang[satuan][]" class="border rounded p-1 w-full"></td>
            <td class="border p-2"><input type="number" name="barang[jumlah][]" class="border rounded p-1 w-full"></td>
            <td class="border p-2">0</td>
        </tr>
    `);

    document.getElementById('inputBarang').value = '';
}

function tambahJasa() {
    const nama = document.getElementById('inputJasa').value;
    if (!nama) return;

    jasaCount++;
    document.getElementById('jasaTable').insertAdjacentHTML('beforeend', `
        <tr>
            <td class="border p-2">${jasaCount}</td>
            <td class="border p-2">
                ${nama}
                <input type="hidden" name="jasa[nama][]" value="${nama}">
            </td>
            <td class="border p-2"><input type="number" name="jasa[harga][]" class="border rounded p-1 w-full"></td>
            <td class="border p-2"><input type="text" name="jasa[deskripsi][]" class="border rounded p-1 w-full"></td>
            <td class="border p-2"><input type="number" name="jasa[jumlah][]" class="border rounded p-1 w-full"></td>
            <td class="border p-2">0</td>
        </tr>
    `);

    document.getElementById('inputJasa').value = '';
}

function setStatus(status) {
    document.getElementById('statusInput').value = status;
}

// Hitung saat halaman pertama kali dibuka
hitungGrandTotal();
</script>
@endsection