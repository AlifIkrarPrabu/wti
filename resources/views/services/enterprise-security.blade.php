@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative bg-slate-900 py-24 overflow-hidden">
    <!-- Dekorasi Latar Belakang Keamanan -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-indigo-600 rounded-full blur-[120px] -mr-48 -mt-48"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-emerald-500 rounded-full blur-[100px] -ml-24 -mb-24"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-300 mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 00-2 2zm10-10V7a4 4 0 00-8 0v4h8z" />
            </svg>
            <span class="text-xs font-semibold uppercase tracking-wider">Cybersecurity Solutions</span>
        </div>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6">
            Enterprise Security <span class="text-indigo-400">Infrastructure</span>
        </h1>
        <p class="text-lg text-slate-300 max-w-3xl mx-auto leading-relaxed">
            Lindungi aset digital dan data kritikal bisnis Anda dengan sistem pertahanan berlapis yang proaktif, cerdas, dan terintegrasi secara menyeluruh.
        </p>
    </div>
</section>

<!-- Main Content -->
<section class="bg-white py-20">
    <div class="container mx-auto px-4 max-w-6xl">
        
        <!-- Strategy Overview -->
        <div class="grid lg:grid-cols-2 gap-16 items-center mb-24">
            <div class="relative">
                <div class="absolute -top-4 -left-4 w-24 h-24 bg-indigo-100 rounded-2xl -z-10"></div>
                <h2 class="text-3xl font-bold text-slate-800 mb-6 leading-tight">
                    Pendekatan <span class="text-indigo-600">Zero Trust</span> untuk Keamanan Tanpa Celah
                </h2>
                <p class="text-slate-600 mb-6 text-lg">
                    Di era transformasi digital, perimeter keamanan tradisional tidak lagi cukup. Kami membantu Anda mengimplementasikan infrastruktur keamanan yang memvalidasi setiap akses di setiap langkah.
                </p>
                <div class="space-y-4">
                    <div class="flex items-start gap-4">
                        <div class="w-6 h-6 rounded bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <p class="text-slate-700 font-medium">Deteksi Ancaman Real-time (Threat Intelligence)</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-6 h-6 rounded bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <p class="text-slate-700 font-medium">Kepatuhan Terhadap Standar Global (ISO 27001, GDPR)</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-6 h-6 rounded bg-emerald-100 text-emerald-600 flex items-center justify-center flex-shrink-0 mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <p class="text-slate-700 font-medium">Respon Insiden & Mitigasi Cepat</p>
                    </div>
                </div>
            </div>
            <div class="bg-slate-50 border border-slate-200 rounded-3xl p-8 relative overflow-hidden">
                <div class="absolute top-0 right-0 p-4 opacity-10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-32 h-32" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h4 class="text-indigo-900 font-bold mb-4">Core Security Pillars</h4>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="w-10 h-10 bg-white shadow-sm rounded-lg flex items-center justify-center text-indigo-600 border border-slate-100">1</div>
                        <div>
                            <p class="font-bold text-slate-800">Identify</p>
                            <p class="text-sm text-slate-500 text-balance">Memahami aset, sistem, data, dan kemampuan yang membentuk risiko bisnis.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-10 h-10 bg-white shadow-sm rounded-lg flex items-center justify-center text-indigo-600 border border-slate-100">2</div>
                        <div>
                            <p class="font-bold text-slate-800">Protect</p>
                            <p class="text-sm text-slate-500 text-balance">Menerapkan perlindungan untuk menjamin penyampaian layanan infrastruktur kritikal.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-10 h-10 bg-white shadow-sm rounded-lg flex items-center justify-center text-indigo-600 border border-slate-100">3</div>
                        <div>
                            <p class="font-bold text-slate-800">Detect & Recover</p>
                            <p class="text-sm text-slate-500 text-balance">Menemukan kejadian keamanan siber secara cepat dan memulihkan kapasitas bisnis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Solutions Grid -->
        <h2 class="text-2xl font-bold text-slate-800 mb-10 text-center">Solusi Keamanan End-to-End</h2>
        <div class="grid md:grid-cols-3 gap-8 mb-20">
            <!-- Network Security -->
            <div class="group bg-white border border-slate-200 p-8 rounded-2xl hover:border-indigo-500 transition-all duration-300 hover:shadow-xl hover:shadow-indigo-50">
                <div class="w-14 h-14 bg-indigo-50 text-indigo-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-indigo-600 group-hover:text-white transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A10.003 10.003 0 0012 20.354m1.916-8.103c.311-.18.664-.251 1.023-.194l2.521.403a2 2 0 011.527 2.46l-.612 2.857a2 2 0 01-1.391 1.507l-2.825.87c-1.477.455-3.074-.313-3.733-1.715l-.619-1.318" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-3">Network Security</h3>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">
                    Implementasi Next-Generation Firewall (NGFW), Intrusion Prevention Systems (IPS), dan VPN yang aman untuk mengamankan lalu lintas data perusahaan.
                </p>
                <ul class="text-xs text-slate-500 space-y-2 border-t border-slate-100 pt-4">
                    <li>• Firewall Management</li>
                    <li>• DDoS Mitigation</li>
                    <li>• Network Access Control (NAC)</li>
                </ul>
            </div>

            <!-- Endpoint Protection -->
            <div class="group bg-white border border-slate-200 p-8 rounded-2xl hover:border-indigo-500 transition-all duration-300 hover:shadow-xl hover:shadow-indigo-50">
                <div class="w-14 h-14 bg-indigo-50 text-indigo-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-indigo-600 group-hover:text-white transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-3">Endpoint Security</h3>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">
                    Mengamankan laptop, server, dan perangkat mobile dari malware dan ransomware dengan solusi EDR (Endpoint Detection and Response).
                </p>
                <ul class="text-xs text-slate-500 space-y-2 border-t border-slate-100 pt-4">
                    <li>• Anti-Ransomware</li>
                    <li>• Device Control</li>
                    <li>• Mobile Device Management (MDM)</li>
                </ul>
            </div>

            <!-- Identity Management -->
            <div class="group bg-white border border-slate-200 p-8 rounded-2xl hover:border-indigo-500 transition-all duration-300 hover:shadow-xl hover:shadow-indigo-50">
                <div class="w-14 h-14 bg-indigo-50 text-indigo-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-indigo-600 group-hover:text-white transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-3">Identity & Access</h3>
                <p class="text-slate-600 text-sm leading-relaxed mb-4">
                    Memastikan hanya orang yang tepat yang dapat mengakses data sensitif dengan sistem autentikasi multifaktor dan manajemen hak istimewa.
                </p>
                <ul class="text-xs text-slate-500 space-y-2 border-t border-slate-100 pt-4">
                    <li>• Multi-Factor Authentication (MFA)</li>
                    <li>• Single Sign-On (SSO)</li>
                    <li>• Privileged Access Management (PAM)</li>
                </ul>
            </div>
        </div>

        <!-- Banner Info -->
        <div class="bg-indigo-900 rounded-3xl p-12 text-white flex flex-col md:flex-row items-center justify-between gap-8">
            <div class="max-w-md">
                <h3 class="text-2xl font-bold mb-4">Audit Keamanan Gratis</h3>
                <p class="text-indigo-200">
                    Masih ragu dengan ketahanan infrastruktur Anda? Dapatkan asesmen risiko dasar gratis dari tim ahli kami.
                </p>
            </div>
            <div class="flex-shrink-0">
                <a href="{{ route('contact.index') }}" class="px-8 py-4 bg-emerald-500 hover:bg-emerald-400 text-indigo-950 font-bold rounded-xl transition shadow-lg">
                    Dapatkan Free Audit
                </a>
            </div>
        </div>

    </div>
</section>
@endsection