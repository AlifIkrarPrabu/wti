@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative bg-slate-900 py-24 overflow-hidden">
    <!-- Dekorasi Digital Grid & Glow -->
    <div class="absolute inset-0 opacity-30">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full bg-[radial-gradient(#334155_1px,transparent_1px)] [background-size:20px_20px]"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-amber-500/20 rounded-full blur-[120px]"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-amber-500/10 border border-amber-500/20 text-amber-300 mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>
            <span class="text-xs font-semibold uppercase tracking-wider">Smart Connectivity</span>
        </div>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6">
            Smart <span class="text-amber-400">IoT Solutions</span>
        </h1>
        <p class="text-lg text-slate-300 max-w-3xl mx-auto leading-relaxed">
            Hubungkan aset fisik Anda ke dunia digital. Kami menghadirkan solusi IoT yang mengubah data mentah menjadi wawasan berharga untuk efisiensi operasional yang maksimal.
        </p>
    </div>
</section>

<!-- Main Content -->
<section class="bg-white py-20">
    <div class="container mx-auto px-4 max-w-6xl">
        
        <!-- IoT Ecosystem -->
        <div class="grid lg:grid-cols-2 gap-16 items-center mb-24">
            <div class="order-2 lg:order-1">
                <div class="relative inline-block mb-4">
                    <span class="text-amber-600 font-bold tracking-widest uppercase text-sm">The Ecosystem</span>
                    <div class="h-1 w-12 bg-amber-400 mt-1"></div>
                </div>
                <h2 class="text-3xl font-bold text-slate-800 mb-6 leading-tight">
                    Menghubungkan Titik-titik <br><span class="text-amber-500">Inovasi Bisnis Anda</span>
                </h2>
                <p class="text-slate-600 mb-8 text-lg leading-relaxed">
                    Solusi IoT kami mencakup seluruh spektrum teknologi, mulai dari sensor perangkat keras yang presisi hingga platform analitik berbasis cloud yang canggih.
                </p>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="flex gap-4 p-4 rounded-xl bg-slate-50 border border-slate-100">
                        <div class="text-amber-500 flex-shrink-0 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-800">Smart Sensors</h4>
                            <p class="text-xs text-slate-500">Pengumpulan data real-time yang akurat.</p>
                        </div>
                    </div>
                    <div class="flex gap-4 p-4 rounded-xl bg-slate-50 border border-slate-100">
                        <div class="text-amber-500 flex-shrink-0 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-800">Cloud Integration</h4>
                            <p class="text-xs text-slate-500">Sinkronisasi data terpusat dan aman.</p>
                        </div>
                    </div>
                    <div class="flex gap-4 p-4 rounded-xl bg-slate-50 border border-slate-100">
                        <div class="text-amber-500 flex-shrink-0 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2h2a2 2 0 002-2zm0 0V5a2 2 0 00-2-2H5a2 2 0 00-2 2v16a2 2 0 002 2h2a2 2 0 002-2z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-800">Advanced Analytics</h4>
                            <p class="text-xs text-slate-500">Prediksi tren dan pola perilaku.</p>
                        </div>
                    </div>
                    <div class="flex gap-4 p-4 rounded-xl bg-slate-50 border border-slate-100">
                        <div class="text-amber-500 flex-shrink-0 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-800">Control App</h4>
                            <p class="text-xs text-slate-500">Monitoring dari genggaman tangan.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="order-1 lg:order-2 flex justify-center">
                <div class="relative p-8">
                    <!-- Placeholder Visual Simbolis IoT -->
                    <div class="w-64 h-64 md:w-80 md:h-80 bg-gradient-to-tr from-amber-100 to-amber-50 rounded-full flex items-center justify-center relative shadow-inner">
                        <div class="absolute inset-0 animate-spin-slow border-2 border-dashed border-amber-300 rounded-full"></div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-32 h-32 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                        </svg>
                        <!-- Orbital Items -->
                        <div class="absolute -top-4 left-1/2 -translate-x-1/2 w-12 h-12 bg-white shadow-lg rounded-full flex items-center justify-center text-amber-500 border border-amber-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </div>
                        <div class="absolute -bottom-4 left-1/2 -translate-x-1/2 w-12 h-12 bg-white shadow-lg rounded-full flex items-center justify-center text-amber-500 border border-amber-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Vertical Markets -->
        <div class="text-center mb-16">
            <h2 class="text-2xl font-bold text-slate-800 mb-4">Penerapan Industri</h2>
            <p class="text-slate-500 max-w-2xl mx-auto">Kami menghadirkan solusi IoT yang disesuaikan untuk berbagai sektor industri utama.</p>
        </div>

        <div class="grid md:grid-cols-4 gap-6 mb-24">
            <!-- Smart Factory -->
            <div class="bg-slate-900 p-8 rounded-3xl text-white hover:bg-amber-600 transition-colors duration-500 group">
                <div class="w-12 h-12 bg-amber-500/20 rounded-xl flex items-center justify-center mb-6 text-amber-400 group-hover:bg-white/20 group-hover:text-white transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-balance">Smart Factory</h3>
                <p class="text-slate-400 text-sm group-hover:text-amber-50 transition">Otomasi jalur produksi dan pemeliharaan prediktif mesin.</p>
            </div>

            <!-- Smart Building -->
            <div class="bg-slate-900 p-8 rounded-3xl text-white hover:bg-amber-600 transition-colors duration-500 group">
                <div class="w-12 h-12 bg-amber-500/20 rounded-xl flex items-center justify-center mb-6 text-amber-400 group-hover:bg-white/20 group-hover:text-white transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-balance">Smart Building</h3>
                <p class="text-slate-400 text-sm group-hover:text-amber-50 transition">Manajemen energi efisien dan sistem keamanan gedung pintar.</p>
            </div>

            <!-- Smart Logistics -->
            <div class="bg-slate-900 p-8 rounded-3xl text-white hover:bg-amber-600 transition-colors duration-500 group">
                <div class="w-12 h-12 bg-amber-500/20 rounded-xl flex items-center justify-center mb-6 text-amber-400 group-hover:bg-white/20 group-hover:text-white transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1m-4-1a1 1 0 00-1 1H9" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-balance">Smart Logistics</h3>
                <p class="text-slate-400 text-sm group-hover:text-amber-50 transition">Pelacakan aset real-time dan manajemen rantai pasok.</p>
            </div>

            <!-- Smart Agriculture -->
            <div class="bg-slate-900 p-8 rounded-3xl text-white hover:bg-amber-600 transition-colors duration-500 group">
                <div class="w-12 h-12 bg-amber-500/20 rounded-xl flex items-center justify-center mb-6 text-amber-400 group-hover:bg-white/20 group-hover:text-white transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-balance">Smart Agriculture</h3>
                <p class="text-slate-400 text-sm group-hover:text-amber-50 transition">Pemantauan kondisi tanah dan irigasi otomatis.</p>
            </div>
        </div>

        <!-- Case Study Teaser -->
        <div class="relative rounded-[2rem] overflow-hidden bg-slate-50 border border-slate-100 p-8 md:p-16">
            <div class="absolute top-0 right-0 w-64 h-64 bg-amber-200/20 rounded-full blur-3xl -mr-20 -mt-20"></div>
            <div class="grid md:grid-cols-2 gap-12 items-center relative z-10">
                <div>
                    <span class="inline-block px-3 py-1 bg-amber-100 text-amber-700 text-xs font-bold rounded-lg mb-4 uppercase">Success Story</span>
                    <h3 class="text-3xl font-bold text-slate-800 mb-6 italic leading-snug">
                        "Implementasi IoT di pabrik kami meningkatkan efisiensi energi sebesar 30% dalam waktu 6 bulan."
                    </h3>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-slate-200"></div>
                        <div>
                            <p class="font-bold text-slate-800">Direktur Operasional</p>
                            <p class="text-sm text-slate-500 text-balance">Perusahaan Manufaktur Nasional</p>
                        </div>
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex justify-between items-center">
                        <span class="text-slate-600 font-medium">Pengurangan Biaya</span>
                        <span class="text-2xl font-bold text-emerald-500">22%</span>
                    </div>
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex justify-between items-center">
                        <span class="text-slate-600 font-medium">Waktu Downtime</span>
                        <span class="text-2xl font-bold text-emerald-500">-15%</span>
                    </div>
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex justify-between items-center">
                        <span class="text-slate-600 font-medium">Akurasi Data</span>
                        <span class="text-2xl font-bold text-emerald-500">99.8%</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<style>
    @keyframes spin-slow {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    .animate-spin-slow {
        animation: spin-slow 20s linear infinite;
    }
</style>
@endsection