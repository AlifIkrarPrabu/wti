<footer class="relative bg-wti-orange text-gray-900 overflow-hidden">
    <!-- Area Putih Abu-abu (Konten Utama) -->
    <!-- Tambahkan rounded-t-3xl untuk transisi yang lebih halus ke konten halaman -->
    <div class="bg-gray-50 pt-16 pb-40 px-4 sm:px-6 lg:px-8 rounded-t-3xl shadow-inner">
        <div class="container mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-y-10 gap-x-8">
                
                <!-- Column 1: Logo & Kontak Utama -->
                <div class="col-span-2 lg:col-span-2 space-y-4">
                    <a href="/">
                        <!-- Asumsi file logo ada di public/img/logo.png -->
                        <img src="/img/logo.png" alt="WTI Logo" class="h-10 mb-4">
                    </a>
                    <p class="text-sm text-gray-600 pr-8">
                        PT. Wise Tech Integra adalah mitra teknologi Anda, berdedikasi untuk mendorong transformasi digital melalui solusi integrasi dan konsultasi yang cerdas.
                    </p>

                    <!-- Informasi Kontak Cepat -->
                    <div class="space-y-2 pt-2 text-sm">
                        <div class="flex items-start text-gray-700">
                            <!-- Icon Mail -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-3 flex-shrink-0 text-wti-orange mt-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                            <span>sales@wise-tech.co.id</span>
                        </div>
                        <div class="flex items-start text-gray-700">
                            <!-- Icon Map Pin -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-3 flex-shrink-0 text-wti-orange mt-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                            <span>Jl. Galuh Mas Raya, Kayana A39, Karawang, Jawa Barat 41361</span>
                        </div>
                    </div>
                </div>

                <!-- Column 2: Navigasi Cepat -->
                <div class="col-span-1 lg:col-span-1">
                    <h5 class="text-base font-bold text-gray-800 uppercase tracking-wider mb-5">Navigasi</h5>
                    <ul class="space-y-3 text-sm text-gray-600">
                        <li><a href="/" class="hover:text-wti-orange transition duration-150">Home</a></li>
                        <li><a href="{{ route('career.index') }}" class="hover:text-wti-orange transition duration-150">Karir</a></li>
                        <li><a href="/contact" class="hover:text-wti-orange transition duration-150">Hubungi Kami</a></li>
                    </ul>
                </div>
                
                <!-- Column 3: Layanan Kami -->
                <div class="col-span-1 lg:col-span-1">
                    <h5 class="text-base font-bold text-gray-800 uppercase tracking-wider mb-5">Solusi Utama</h5>
                    <ul class="space-y-3 text-sm text-gray-600">
                        <li><a href="{{ route('services.data-centre') }}" class="hover:text-wti-orange transition duration-150">Data Centre Infrastructure</a></li>
                        <li><a href="{{ route('services.enterprise-network') }}" class="hover:text-wti-orange transition duration-150">Enterprise Network Infrastructure</a></li>
                        <li><a href="{{ route('services.enterprise-security') }}" class="hover:text-wti-orange transition duration-150">Enterprise Security Infrastructure</a></li>
                        <li><a href="{{ route('services.profesional-service') }}" class="hover:text-wti-orange transition duration-150">Profesional Service</a></li>
                        <li><a href="{{ route('services.iot') }}" class="hover:text-wti-orange transition duration-150">Internet of Things</a></li>
                        <li><a href="{{ route('services.waste-disposal') }}" class="hover:text-wti-orange transition duration-150">Waste Disposal</a></li>
                    </ul>
                </div>

                <!-- Column 4: Social Media -->
                <div class="col-span-2 md:col-span-1 lg:col-span-1">
                    <h5 class="text-base font-bold text-gray-800 uppercase tracking-wider mb-5">Ikuti Kami</h5>
                    <!-- Social Icons menggunakan Lucide Icons (asumsi telah di-setup atau menggunakan SVG inline yang sederhana) -->
                    <div class="flex space-x-3 mt-4">
                        <!-- LinkedIn (Sangat relevan untuk B2B IT) -->
                        <a href="#" target="_blank" class="text-gray-600 hover:text-blue-700 transition duration-200" title="LinkedIn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7H18v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7H10v-7a6 6 0 0 1 6-6z"/><rect width="4" height="12" x="2" y="9"/><circle cx="4" cy="4" r="2"/></svg>
                        </a>
                        <!-- Instagram -->
                        <a href="#" target="_blank" class="text-gray-600 hover:text-pink-600 transition duration-200" title="Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.5" y1="6.5" y2="6.5"/></svg>
                        </a>
                        <!-- Facebook -->
                        <a href="#" target="_blank" class="text-gray-600 hover:text-blue-500 transition duration-200" title="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright Section with Curved Bottom (Area Jingga) -->
    <!-- MENGURANGI TINGGI DARI h-40 MENJADI h-24 -->
    <div class="absolute bottom-0 left-0 w-full h-24 bg-wti-orange z-10" 
         style="clip-path: ellipse(150% 100% at 50% 100%);">
    </div>

    <!-- Teks Copyright -->
    <!-- MENGURANGI TINGGI DARI h-40 MENJADI h-24 dan menyesuaikan padding. -->
    <div class="relative w-full h-24 flex items-center justify-center z-20">
        <p class="text-center text-white text-xs md:text-sm">
            &copy; {{ date('Y') }} PT. WISE TECH INTEGRA. ALL RIGHTS RESERVED.
            <span class="block mt-1 opacity-80">
                Solusi Integrasi Teknologi Cerdas dan Konsultasi.
            </span>
        </p>
    </div>
</footer>
