@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative bg-slate-900 py-24 lg:py-32 overflow-hidden text-white">
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_20%_30%,#f59e0b,transparent)]"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-500/10 border border-amber-500/20 text-amber-500 mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                </svg>
                <span class="text-xs font-bold uppercase tracking-wider">Sustainable IT Solutions</span>
            </div>
            <h1 class="text-5xl lg:text-7xl font-black mb-6 leading-tight">
                Bertanggung Jawab Terhadap <span class="text-amber-500">E-Waste</span> Anda.
            </h1>
            <p class="text-xl text-slate-400 mb-10 leading-relaxed">
                Jangan biarkan perangkat lama menjadi beban lingkungan. Kami menyediakan layanan pembuangan dan daur ulang sampah elektronik yang aman, bersertifikat, dan ramah lingkungan.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="#pickup" class="px-8 py-4 bg-amber-500 text-slate-900 font-bold rounded-2xl hover:bg-amber-400 transition-all shadow-lg shadow-amber-500/20">
                    Jadwalkan Penjemputan
                </a>
                <a href="#compliance" class="px-8 py-4 bg-white/10 text-white font-bold rounded-2xl hover:bg-white/20 transition-all backdrop-blur-md">
                    Lihat Sertifikasi
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Stats / Why It Matters -->
<section class="py-16 bg-white border-b border-slate-100">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
            <div>
                <div class="text-4xl font-black text-slate-900 mb-2">100%</div>
                <div class="text-slate-500 font-medium">Data Destruction Guaranteed</div>
            </div>
            <div>
                <div class="text-4xl font-black text-slate-900 mb-2">0%</div>
                <div class="text-slate-500 font-medium">Landfill Policy</div>
            </div>
            <div>
                <div class="text-4xl font-black text-slate-900 mb-2">50k+</div>
                <div class="text-slate-500 font-medium">Tons Recycled Annually</div>
            </div>
        </div>
    </div>
</section>

<!-- Disposal Process -->
<section class="py-24 bg-slate-50">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-2xl mx-auto mb-20">
            <h2 class="text-amber-600 font-bold mb-4">Proses Pembuangan</h2>
            <h3 class="text-4xl font-black text-slate-900">Aman Bagi Data, Aman Bagi Alam</h3>
        </div>

        <div class="grid md:grid-cols-3 gap-8 relative">
            <!-- Step 1 -->
            <div class="bg-white p-10 rounded-[3rem] shadow-sm border border-slate-100 hover:shadow-xl transition-shadow relative z-10">
                <div class="w-16 h-16 bg-slate-900 text-amber-500 rounded-2xl flex items-center justify-center mb-8 rotate-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </div>
                <h4 class="text-2xl font-bold mb-4">Collection</h4>
                <p class="text-slate-500">Penjemputan perangkat IT lama (server, laptop, PC, kabel) langsung dari lokasi Anda dengan logistik yang aman.</p>
            </div>

            <!-- Step 2 -->
            <div class="bg-white p-10 rounded-[3rem] shadow-sm border border-slate-100 hover:shadow-xl transition-shadow relative z-10">
                <div class="w-16 h-16 bg-slate-900 text-amber-500 rounded-2xl flex items-center justify-center mb-8 -rotate-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <h4 class="text-2xl font-bold mb-4">Sanitization</h4>
                <p class="text-slate-500">Penghapusan data tingkat militer sebelum pemrosesan fisik untuk menjamin informasi sensitif perusahaan tidak bocor.</p>
            </div>

            <!-- Step 3 -->
            <div class="bg-white p-10 rounded-[3rem] shadow-sm border border-slate-100 hover:shadow-xl transition-shadow relative z-10">
                <div class="w-16 h-16 bg-slate-900 text-amber-500 rounded-2xl flex items-center justify-center mb-8 rotate-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h4 class="text-2xl font-bold mb-4">Eco-Recycling</h4>
                <p class="text-slate-500">Pemisahan komponen material (emas, tembaga, plastik) untuk didaur ulang kembali menjadi bahan baku baru.</p>
            </div>
        </div>
    </div>
</section>

<!-- Compliance Section -->
<section id="compliance" class="py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <div class="lg:w-1/2">
                <div class="p-4 bg-slate-100 rounded-[3rem] rotate-2">
                    <div class="bg-slate-900 rounded-[2.5rem] p-12 text-white">
                        <h4 class="text-3xl font-bold mb-6 italic">"Green Certification"</h4>
                        <p class="text-slate-400 mb-8 leading-relaxed">
                            Kami mematuhi standar internasional ISO 14001 dan R2 (Responsible Recycling) untuk memastikan setiap gram limbah ditangani secara etis.
                        </p>
                        <div class="flex gap-4">
                             <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center">ISO</div>
                             <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center">R2</div>
                             <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center">EPA</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/2">
                <h3 class="text-4xl font-black text-slate-900 mb-6 text-balance">Apa Saja yang Kami Terima?</h3>
                <ul class="grid grid-cols-2 gap-4">
                    <li class="flex items-center gap-3 p-4 bg-slate-50 rounded-2xl border border-slate-100 text-slate-700">
                        <span class="w-2 h-2 bg-amber-500 rounded-full"></span> Server & Storage
                    </li>
                    <li class="flex items-center gap-3 p-4 bg-slate-50 rounded-2xl border border-slate-100 text-slate-700">
                        <span class="w-2 h-2 bg-amber-500 rounded-full"></span> Networking Gear
                    </li>
                    <li class="flex items-center gap-3 p-4 bg-slate-50 rounded-2xl border border-slate-100 text-slate-700">
                        <span class="w-2 h-2 bg-amber-500 rounded-full"></span> Laptop & Desktop
                    </li>
                    <li class="flex items-center gap-3 p-4 bg-slate-50 rounded-2xl border border-slate-100 text-slate-700">
                        <span class="w-2 h-2 bg-amber-500 rounded-full"></span> Mobile Devices
                    </li>
                    <li class="flex items-center gap-3 p-4 bg-slate-50 rounded-2xl border border-slate-100 text-slate-700">
                        <span class="w-2 h-2 bg-amber-500 rounded-full"></span> Monitors & Display
                    </li>
                    <li class="flex items-center gap-3 p-4 bg-slate-50 rounded-2xl border border-slate-100 text-slate-700">
                        <span class="w-2 h-2 bg-amber-500 rounded-full"></span> Batteries & Cables
                    </li>
                </ul>
                <div class="mt-10 p-6 bg-amber-50 rounded-3xl border border-amber-100">
                    <p class="text-amber-800 text-sm italic">
                        *Kami juga menyediakan <strong>Certificate of Destruction</strong> sebagai bukti kepatuhan audit perusahaan Anda.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pickup Form Section -->
<section id="pickup" class="py-24 bg-slate-900 text-white overflow-hidden relative">
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto bg-white/5 backdrop-blur-xl p-8 lg:p-16 rounded-[4rem] border border-white/10">
            <div class="text-center mb-12">
                <h3 class="text-3xl font-bold mb-4">Jadwalkan Penjemputan E-Waste</h3>
                <p class="text-slate-400">Tim kami akan menghubungi Anda dalam 24 jam untuk koordinasi logistik.</p>
            </div>
            
            <form class="grid md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-slate-400 mb-2">Nama Perusahaan</label>
                    <input type="text" class="w-full bg-slate-800 border-none rounded-2xl p-4 focus:ring-2 focus:ring-amber-500 transition-all text-white">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-400 mb-2">Estimasi Volume (Kg/Unit)</label>
                    <input type="text" class="w-full bg-slate-800 border-none rounded-2xl p-4 focus:ring-2 focus:ring-amber-500 transition-all text-white">
                </div>
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-slate-400 mb-2">Alamat Penjemputan</label>
                    <textarea rows="3" class="w-full bg-slate-800 border-none rounded-2xl p-4 focus:ring-2 focus:ring-amber-500 transition-all text-white"></textarea>
                </div>
                <div class="md:col-span-2">
                    <button type="submit" class="w-full py-5 bg-amber-500 text-slate-900 font-bold rounded-2xl hover:bg-amber-400 transition-all transform hover:scale-[1.02]">
                        Kirim Permintaan Penjemputan
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection