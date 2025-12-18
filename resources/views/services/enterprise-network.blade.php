@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative bg-slate-900 py-24 overflow-hidden">
    <!-- Dekorasi Arsitektur Jaringan (Subtle Grid & Lines) -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#1e293b_1px,transparent_1px),linear-gradient(to_bottom,#1e293b_1px,transparent_1px)] [background-size:40px_40px] opacity-20"></div>
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-indigo-600/20 rounded-full blur-[120px] -mr-64 -mt-64"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-indigo-500/10 border border-indigo-500/20 text-indigo-300 mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                </svg>
                <span class="text-xs font-semibold uppercase tracking-widest">Enterprise Grade Connectivity</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 leading-tight">
                Robust <span class="text-indigo-400">Network</span> <br>Infrastructure
            </h1>
            <p class="text-xl text-slate-400 leading-relaxed mb-8">
                Bangun fondasi digital bisnis Anda dengan infrastruktur jaringan yang aman, skalabel, dan berkinerja tinggi. Dirancang untuk menangani beban kerja masa depan.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="#solutions" class="px-8 py-4 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-xl transition-all shadow-lg shadow-indigo-500/25">
                    Lihat Solusi
                </a>
                <div class="flex items-center gap-3 px-6 py-4 bg-slate-800/50 border border-slate-700 rounded-xl text-slate-300">
                    <span class="flex h-3 w-3 relative">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
                    </span>
                    99.9% Uptime Guaranteed
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Pillars -->
<section id="solutions" class="bg-white py-24">
    <div class="container mx-auto px-4 max-w-6xl">
        <div class="text-center mb-16">
            <h2 class="text-indigo-600 font-bold tracking-widest uppercase text-sm mb-3">Core Pillars</h2>
            <h3 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6">Arsitektur Jaringan Modern</h3>
            <p class="text-slate-500 max-w-2xl mx-auto">Kami mengintegrasikan teknologi hardware dan software terbaik untuk memastikan bisnis Anda tetap terhubung tanpa hambatan.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- SD-WAN & Routing -->
            <div class="p-8 rounded-3xl bg-slate-50 border border-slate-100 hover:shadow-2xl hover:shadow-indigo-500/10 transition-all duration-300 group">
                <div class="w-14 h-14 bg-indigo-600 rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-indigo-200 group-hover:scale-110 transition-transform">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                </div>
                <h4 class="text-2xl font-bold text-slate-800 mb-4">SD-WAN & Routing</h4>
                <p class="text-slate-600 leading-relaxed mb-6">
                    Optimalkan lalu lintas data antar kantor cabang dengan teknologi Software-Defined Networking untuk efisiensi biaya dan performa tinggi.
                </p>
                <ul class="space-y-3 text-sm text-slate-500">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Traffic Prioritization
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Zero-Touch Provisioning
                    </li>
                </ul>
            </div>

            <!-- Core Switching -->
            <div class="p-8 rounded-3xl bg-slate-900 text-white shadow-xl shadow-slate-900/40 relative overflow-hidden group">
                <div class="absolute top-0 right-0 w-32 h-32 bg-indigo-500/10 rounded-full blur-3xl"></div>
                <div class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center mb-8 backdrop-blur-md group-hover:scale-110 transition-transform">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                    </svg>
                </div>
                <h4 class="text-2xl font-bold mb-4">Core Switching</h4>
                <p class="text-slate-400 leading-relaxed mb-6">
                    Pusat distribusi data berkecepatan tinggi (10G/40G/100G) dengan latensi rendah untuk kebutuhan data center dan kampus enterprise.
                </p>
                <ul class="space-y-3 text-sm text-slate-400">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-indigo-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        High Density Ports
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-indigo-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Redundant Power Supplies
                    </li>
                </ul>
            </div>

            <!-- Wireless Mobility -->
            <div class="p-8 rounded-3xl bg-slate-50 border border-slate-100 hover:shadow-2xl hover:shadow-indigo-500/10 transition-all duration-300 group">
                <div class="w-14 h-14 bg-indigo-600 rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-indigo-200 group-hover:scale-110 transition-transform">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0" />
                    </svg>
                </div>
                <h4 class="text-2xl font-bold text-slate-800 mb-4">Wi-Fi 6/6E Mobility</h4>
                <p class="text-slate-600 leading-relaxed mb-6">
                    Solusi nirkabel cerdas dengan cakupan luas dan keamanan WPA3 untuk mendukung produktivitas karyawan di mana saja.
                </p>
                <ul class="space-y-3 text-sm text-slate-500">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        AI-Driven Radio Mgmt
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Seamless Roaming
                    </li>
                </ul>
            </div>
        </div>

        <!-- Infrastructure Features -->
        <div class="mt-24 pt-24 border-t border-slate-100">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h3 class="text-3xl font-bold text-slate-900 mb-6">Mengapa Infrastruktur Kami Berbeda?</h3>
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="w-10 h-10 flex-shrink-0 bg-indigo-100 rounded-full flex items-center justify-center text-indigo-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M2.166 4.9L10 1.554L17.834 4.9c.452.194.752.67.752 1.19v4.79c0 5.621-3.341 10.39-8.088 12.12a.8.8 0 01-.596 0C5.257 21.27 1.916 16.501 1.916 10.88V6.09c0-.52.3-1.003.75-1.19zM10 3.014L4.5 5.37v4.51c0 4.14 2.384 7.685 5.5 9.105c3.116-1.42 5.5-4.965 5.5-9.105V5.37L10 3.014zm0 4.486a1 1 0 011 1v2h2a1 1 0 110 2h-2v2a1 1 0 11-2 0v-2H7a1 1 0 110-2h2v-2a1 1 0 011-1z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h5 class="font-bold text-slate-800">Security-First Approach</h5>
                                <p class="text-slate-500 text-sm">Keamanan tidak ditempelkan di akhir, tapi diintegrasikan ke dalam setiap lapisan switch, router, dan access point.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-10 h-10 flex-shrink-0 bg-indigo-100 rounded-full flex items-center justify-center text-indigo-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                                </svg>
                            </div>
                            <div>
                                <h5 class="font-bold text-slate-800">Observability & Analytics</h5>
                                <p class="text-slate-500 text-sm">Dashboard tunggal untuk memantau kesehatan seluruh perangkat jaringan secara real-time dengan bantuan AI.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-10 h-10 flex-shrink-0 bg-indigo-100 rounded-full flex items-center justify-center text-indigo-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z" />
                                </svg>
                            </div>
                            <div>
                                <h5 class="font-bold text-slate-800">Agile Scalability</h5>
                                <p class="text-slate-500 text-sm">Mudah menambah kapasitas dan jangkauan seiring dengan pertumbuhan bisnis Anda tanpa merombak total sistem.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-indigo-600 rounded-[2rem] p-1 overflow-hidden shadow-2xl">
                        <!-- Visualisasi Rack/Server Representatif -->
                        <div class="bg-slate-900 rounded-[1.8rem] p-8 space-y-4">
                            @for ($i = 0; $i < 4; $i++)
                            <div class="flex items-center gap-4 border-b border-slate-800 pb-4 last:border-0 last:pb-0">
                                <div class="flex gap-1">
                                    <div class="w-2 h-2 rounded-full bg-emerald-500 shadow-[0_0_8px_rgba(16,185,129,0.5)]"></div>
                                    <div class="w-2 h-2 rounded-full bg-emerald-500/20"></div>
                                </div>
                                <div class="flex-1 bg-slate-800 h-6 rounded flex items-center px-3 justify-between">
                                    <div class="w-1/3 bg-slate-700 h-2 rounded"></div>
                                    <div class="flex gap-2">
                                        <div class="w-4 h-1 bg-indigo-500 rounded"></div>
                                        <div class="w-4 h-1 bg-indigo-500 rounded"></div>
                                    </div>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>
                    <!-- Stats Badge -->
                    <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-2xl shadow-xl border border-slate-100 max-w-[200px]">
                        <p class="text-slate-500 text-xs uppercase font-bold tracking-tighter mb-1">Latency Reduction</p>
                        <p class="text-3xl font-extrabold text-indigo-600">45ms <span class="text-sm font-normal text-slate-400">avg</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="bg-indigo-600 py-16">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-white mb-6">Siap Mengamankan Jaringan Bisnis Anda?</h2>
        <p class="text-indigo-100 mb-10 max-w-xl mx-auto">Konsultasikan kebutuhan infrastruktur Anda dengan ahli jaringan kami sekarang juga.</p>
        <button class="px-10 py-4 bg-white text-indigo-600 font-bold rounded-xl hover:bg-slate-100 transition-colors shadow-xl">
            Hubungi Spesialis Kami
        </button>
    </div>
</section>
@endsection