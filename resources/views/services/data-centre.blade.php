@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative bg-slate-900 py-24 overflow-hidden">
    <!-- Dekorasi Latar Belakang -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-blue-600 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 -right-24 w-80 h-80 bg-cyan-500 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6">
            Data Centre <span class="text-blue-400">Infrastructure</span>
        </h1>
        <p class="text-lg text-slate-300 max-w-2xl mx-auto leading-relaxed">
            Membangun fondasi digital yang tangguh melalui desain infrastruktur pusat data yang aman, efisien, dan siap menghadapi masa depan.
        </p>
    </div>
</section>

<!-- Content Section -->
<section class="bg-white py-20">
    <div class="container mx-auto px-4 max-w-6xl">
        
        <!-- Intro & Overview -->
        <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
            <div>
                <h2 class="text-2xl font-bold text-slate-800 mb-6 border-l-4 border-blue-500 pl-4">Solusi Menyeluruh untuk Bisnis Modern</h2>
                <p class="text-slate-600 mb-4 leading-relaxed">
                    Kami memahami bahwa Data Centre adalah jantung dari operasi TI bisnis Anda. Layanan kami mencakup seluruh siklus hidup infrastruktur, mulai dari konsultasi awal hingga pemeliharaan berkelanjutan.
                </p>
                <p class="text-slate-600 leading-relaxed">
                    Dengan standar internasional (seperti TIA-942), kami memastikan infrastruktur Anda memiliki tingkat redundansi yang tepat (Tier 1-4) untuk menjamin ketersediaan layanan maksimal bagi pelanggan Anda.
                </p>
            </div>
            <div class="bg-slate-100 rounded-2xl p-8 shadow-inner border border-slate-200">
                <div class="flex items-center gap-4 mb-4 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                    <span class="font-bold text-lg">Keamanan & Standarisasi</span>
                </div>
                <p class="text-slate-500 italic text-sm">
                    "Kami mengintegrasikan sistem keamanan fisik, pencegah kebakaran, dan manajemen daya yang cerdas dalam setiap inci desain infrastruktur Anda."
                </p>
            </div>
        </div>

        <!-- Service Pillars (Grid Ikon) -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-20">
            <!-- Pillar 1 -->
            <div class="p-6 bg-slate-50 rounded-xl border border-slate-100 hover:shadow-lg transition group">
                <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-4 group-hover:bg-blue-600 group-hover:text-white transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <h3 class="font-bold text-slate-800 mb-2">Design & Build</h3>
                <p class="text-slate-600 text-sm">Perencanaan ruang, tata letak rak, dan konstruksi sipil data center sesuai standar Tier.</p>
            </div>

            <!-- Pillar 2 -->
            <div class="p-6 bg-slate-50 rounded-xl border border-slate-100 hover:shadow-lg transition group">
                <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-4 group-hover:bg-blue-600 group-hover:text-white transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="font-bold text-slate-800 mb-2">Power Management</h3>
                <p class="text-slate-600 text-sm">Sistem kelistrikan, UPS (Uninterruptible Power Supply), genset, dan PDU cerdas.</p>
            </div>

            <!-- Pillar 3 -->
            <div class="p-6 bg-slate-50 rounded-xl border border-slate-100 hover:shadow-lg transition group">
                <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-4 group-hover:bg-blue-600 group-hover:text-white transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A10.003 10.003 0 0012 20.354m1.916-8.103c.311-.18.664-.251 1.023-.194l2.521.403a2 2 0 011.527 2.46l-.612 2.857a2 2 0 01-1.391 1.507l-2.825.87c-1.477.455-3.074-.313-3.733-1.715l-.619-1.318" />
                    </svg>
                </div>
                <h3 class="font-bold text-slate-800 mb-2">Cooling System</h3>
                <p class="text-slate-600 text-sm">Sistem pendingin (Precision Air Conditioning) untuk menjaga suhu ideal server.</p>
            </div>

            <!-- Pillar 4 -->
            <div class="p-6 bg-slate-50 rounded-xl border border-slate-100 hover:shadow-lg transition group">
                <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-4 group-hover:bg-blue-600 group-hover:text-white transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                </div>
                <h3 class="font-bold text-slate-800 mb-2">Monitoring</h3>
                <p class="text-slate-600 text-sm">Sistem DCIM (Data Center Infrastructure Management) 24/7 untuk monitoring real-time.</p>
            </div>
        </div>

        <!-- Detail Layanan List -->
        <div class="bg-blue-50 rounded-2xl p-10">
            <h2 class="text-2xl font-bold text-slate-800 mb-8 text-center">Apa yang Kami Tawarkan?</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="space-y-4">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-5 h-5 bg-blue-500 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800">Fire Suppression System</h4>
                            <p class="text-slate-600 text-sm">Sistem pemadam kebakaran gas (FM200/Novec) yang aman untuk perangkat elektronik.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-5 h-5 bg-blue-500 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800">Raised Floor System</h4>
                            <p class="text-slate-600 text-sm">Pemasangan lantai panggung untuk manajemen kabel dan distribusi udara dingin.</p>
                        </div>
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-5 h-5 bg-blue-500 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800">CCTV & Access Control</h4>
                            <p class="text-slate-600 text-sm">Keamanan fisik berlapis dengan sistem biometrik dan pemantauan kamera IP.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-5 h-5 bg-blue-500 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800">Network Cabling (Structured)</h4>
                            <p class="text-slate-600 text-sm">Instalasi kabel serat optik dan UTP yang rapi dan terorganisir.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="mt-20 text-center">
            <h3 class="text-xl font-bold text-slate-800 mb-6">Siap Membangun Data Centre Anda?</h3>
            <a href="{{ route('contact.index') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-10 rounded-full transition shadow-lg hover:shadow-blue-200">
                Konsultasi Sekarang
            </a>
        </div>
    </div>
</section>
@endsection