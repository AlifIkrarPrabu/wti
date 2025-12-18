@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative bg-white py-20 lg:py-32 overflow-hidden">
    <div class="container mx-auto px-4 relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-12">
            <div class="lg:w-1/2">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-50 border border-emerald-100 text-emerald-600 mb-6">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                    </span>
                    <span class="text-xs font-bold uppercase tracking-wider">Expert Consultation</span>
                </div>
                <h1 class="text-5xl lg:text-7xl font-black text-slate-900 mb-6 leading-[1.1]">
                    Your Partner in <span class="text-emerald-600">Digital</span> Transformation.
                </h1>
                <p class="text-lg text-slate-600 mb-8 leading-relaxed max-w-xl">
                    Lebih dari sekadar penyedia teknologi. Kami adalah partner strategis yang membantu Anda merancang, mengimplementasikan, dan mengoptimalkan ekosistem IT untuk mencapai tujuan bisnis.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#consultation" class="px-8 py-4 bg-slate-900 text-white font-bold rounded-2xl hover:bg-emerald-600 transition-all text-center">
                        Mulai Konsultasi
                    </a>
                    <a href="#services" class="px-8 py-4 bg-emerald-50 text-emerald-700 font-bold rounded-2xl hover:bg-emerald-100 transition-all text-center">
                        Jelajahi Layanan
                    </a>
                </div>
            </div>
            <div class="lg:w-1/2 relative">
                <!-- Decorative Elements -->
                <div class="absolute -top-10 -right-10 w-64 h-64 bg-emerald-200/30 rounded-full blur-3xl"></div>
                <div class="bg-slate-50 rounded-[3rem] p-4 border border-slate-100 shadow-2xl relative overflow-hidden">
                    <div class="aspect-video bg-emerald-900 rounded-[2.5rem] flex items-center justify-center relative group overflow-hidden">
                        <!-- Placeholder Representing Team/Professional Interaction -->
                        <div class="absolute inset-0 bg-gradient-to-br from-emerald-800 to-teal-900 flex flex-col items-center justify-center p-8 text-center">
                           <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 text-emerald-400/50 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                           </svg>
                           <h4 class="text-white text-xl font-bold">Trusted Experts</h4>
                           <p class="text-emerald-200/70 text-sm mt-2">Certified professionals with decades of combined experience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Offerings -->
<section id="services" class="py-24 bg-slate-50">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mb-16">
            <h2 class="text-emerald-600 font-bold mb-3">Our Expertise</h2>
            <h3 class="text-4xl font-extrabold text-slate-900">Layanan Profesional yang Kami Tawarkan</h3>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- IT Consulting -->
            <div class="bg-white p-8 rounded-3xl border border-slate-100 hover:border-emerald-500 transition-all group">
                <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center text-emerald-600 mb-6 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>
                </div>
                <h4 class="text-xl font-bold text-slate-900 mb-4">IT Consulting</h4>
                <p class="text-slate-500 text-sm leading-relaxed">Perencanaan strategis Roadmap IT untuk menyelaraskan teknologi dengan visi bisnis jangka panjang Anda.</p>
            </div>

            <!-- Implementation -->
            <div class="bg-white p-8 rounded-3xl border border-slate-100 hover:border-emerald-500 transition-all group">
                <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center text-emerald-600 mb-6 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                    </svg>
                </div>
                <h4 class="text-xl font-bold text-slate-900 mb-4">Implementation</h4>
                <p class="text-slate-500 text-sm leading-relaxed">Eksekusi teknis yang presisi, mulai dari instalasi perangkat keras hingga konfigurasi sistem software yang kompleks.</p>
            </div>

            <!-- Project Management -->
            <div class="bg-white p-8 rounded-3xl border border-slate-100 hover:border-emerald-500 transition-all group">
                <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center text-emerald-600 mb-6 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg>
                </div>
                <h4 class="text-xl font-bold text-slate-900 mb-4">Project Management</h4>
                <p class="text-slate-500 text-sm leading-relaxed">Memastikan proyek IT Anda selesai tepat waktu, sesuai anggaran, dan mencapai target performa yang diinginkan.</p>
            </div>

            <!-- Audit & Optimization -->
            <div class="bg-white p-8 rounded-3xl border border-slate-100 hover:border-emerald-500 transition-all group">
                <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center text-emerald-600 mb-6 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                </div>
                <h4 class="text-xl font-bold text-slate-900 mb-4">Optimization</h4>
                <p class="text-slate-500 text-sm leading-relaxed">Audit infrastruktur secara berkala untuk menemukan celah efisiensi dan mengoptimalkan performa aset IT yang ada.</p>
            </div>
        </div>
    </div>
</section>

<!-- Methodology Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-16 items-center">
            <div class="lg:w-1/2">
                <h3 class="text-3xl font-bold text-slate-900 mb-8">Metodologi Kerja Kami</h3>
                <div class="space-y-8">
                    <div class="flex gap-6 relative">
                        <div class="absolute top-10 left-5 bottom-0 w-px bg-slate-100"></div>
                        <div class="w-10 h-10 rounded-full bg-emerald-600 text-white flex flex-shrink-0 items-center justify-center font-bold z-10">1</div>
                        <div>
                            <h5 class="font-bold text-lg text-slate-900">Discovery & Assessment</h5>
                            <p class="text-slate-500 text-sm">Kami menganalisis kondisi saat ini dan memahami tantangan unik bisnis Anda.</p>
                        </div>
                    </div>
                    <div class="flex gap-6 relative">
                        <div class="absolute top-10 left-5 bottom-0 w-px bg-slate-100"></div>
                        <div class="w-10 h-10 rounded-full bg-emerald-600 text-white flex flex-shrink-0 items-center justify-center font-bold z-10">2</div>
                        <div>
                            <h5 class="font-bold text-lg text-slate-900">Strategy Design</h5>
                            <p class="text-slate-500 text-sm">Penyusunan rencana teknis dan pemilihan solusi yang paling efisien untuk masalah Anda.</p>
                        </div>
                    </div>
                    <div class="flex gap-6">
                        <div class="w-10 h-10 rounded-full bg-emerald-600 text-white flex flex-shrink-0 items-center justify-center font-bold z-10">3</div>
                        <div>
                            <h5 class="font-bold text-lg text-slate-900">Execution & Support</h5>
                            <p class="text-slate-500 text-sm">Implementasi dilakukan oleh tenaga ahli tersertifikasi dengan dukungan purna jual.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/2 bg-emerald-600 rounded-[3rem] p-12 text-white">
                <h4 class="text-2xl font-bold mb-6">Mengapa Professional Services?</h4>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-emerald-300 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Mengurangi risiko kegagalan implementasi teknologi baru.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-emerald-300 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Menghemat biaya jangka panjang melalui efisiensi desain.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-emerald-300 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Akses ke tenaga ahli tersertifikasi tingkat internasional.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-emerald-300 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Fokus pada bisnis inti Anda sementara kami menangani IT-nya.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section id="consultation" class="py-20">
    <div class="container mx-auto px-4">
        <div class="bg-slate-900 rounded-[4rem] p-8 lg:p-20 relative overflow-hidden text-center">
            <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_center,rgba(16,185,129,0.1),transparent)]"></div>
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 relative z-10">Siap Untuk Bertransformasi?</h2>
            <p class="text-slate-400 max-w-2xl mx-auto mb-10 relative z-10 text-lg">
                Jadwalkan sesi konsultasi gratis selama 30 menit dengan ahli teknologi kami untuk mendiskusikan tantangan bisnis Anda.
            </p>
            <div class="relative z-10">
                <button class="px-12 py-5 bg-emerald-600 text-white font-bold rounded-2xl hover:bg-emerald-500 transition-all shadow-xl shadow-emerald-900/40">
                    Jadwalkan Konsultasi Sekarang
                </button>
            </div>
        </div>
    </div>
</section>
@endsection