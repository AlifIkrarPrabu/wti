<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center py-4 px-4 sm:px-6 lg:px-8">
        
        <div class="flex items-center space-x-2">
            <a href="/">
                <!-- Asumsi file logo ada di public/img/logo.png -->
                <img src="/img/logo.png" alt="WTI Logo" class="h-8"> 
            </a>
        </div>
        
        <!-- NAVIGASI DESKTOP -->
        <nav class="hidden md:flex items-center space-x-6"> 
            <!-- Home -->
            <a href="/" class="text-gray-600 hover:text-wti-orange transition duration-150 whitespace-nowrap py-4">Home</a>
            
            <!-- Layanan Kami Dropdown (TETAP SEBAGAI DROPDOWN) -->
<div class="relative group">
    <button class="flex items-center text-gray-600 hover:text-wti-orange transition duration-150 whitespace-nowrap py-4">
        Layanan Kami
        <svg class="w-4 h-4 ml-1 transform transition duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
    </button>
    
    <!-- Menyesuaikan lebar dropdown menjadi lebih kecil (misalnya w-80) dan hanya 2 kolom -->
    <div class="absolute hidden group-hover:block left-1/2 transform -translate-x-1/2 mt-0 w-80 bg-white p-6 rounded-xl shadow-2xl border border-gray-100 transition duration-300 z-50">
        <!-- Menggunakan grid 2 kolom dengan 6 item baru -->
        <div class="grid grid-cols-2 gap-x-6 gap-y-3">
            <a href="/services/data-centre" class="text-sm text-gray-800 hover:text-wti-orange transition duration-150">Data Centre Infrastructure</a>
            <a href="/services/enterprise-network" class="text-sm text-gray-800 hover:text-wti-orange transition duration-150">Enterprise Network Infrastructure</a>
            <a href="/services/enterprise-security" class="text-sm text-gray-800 hover:text-wti-orange transition duration-150">Enterprise Security Infrastructure</a>
            <a href="/services/profesional-service" class="text-sm text-gray-800 hover:text-wti-orange transition duration-150">Profesional Service</a>
            <a href="/services/internet-of-things" class="text-sm text-gray-800 hover:text-wti-orange transition duration-150">Internet of Things</a>
            <a href="/services/waste-disposal" class="text-sm text-gray-800 hover:text-wti-orange transition duration-150">Waste Disposal</a>
        </div>
    </div>
</div>

            
            <a href="{{ route('contact.index') }}" class="text-gray-600 hover:text-wti-orange transition duration-150 whitespace-nowrap py-4">Kontak</a>

            <!-- KARIR -->
            <a href="{{ route('career.index') }}" class="text-gray-600 hover:text-wti-orange transition duration-150 whitespace-nowrap py-4">Karir</a>
        </nav>
        
        <!-- === BAGIAN TOMBOL PORTAL DEKSTOP BARU === -->
        <div class="flex items-center">
            @if(session('portal_access'))
                {{-- Logika jika sudah login Portal --}}
                <div class="relative group hidden md:flex items-center ml-8 space-x-4">
                    <span class="text-gray-600 text-sm font-semibold whitespace-nowrap">Halo, {{ session('portal_access.name') }}</span>
                    <form method="POST" action="{{ route('portal.logout') }}">
                        @csrf
                        <button type="submit" class="text-gray-600 hover:text-red-600 font-semibold transition duration-150">
                            Logout Portal
                        </button>
                    </form>
                </div> 
            @else
                {{-- Logika jika belum login Portal --}}
                <a href="{{ route('portal.login') }}" class="bg-wti-orange hover:bg-orange-700 text-white font-semibold py-2 px-6 rounded-lg transition duration-300 hidden md:block whitespace-nowrap ml-8">
                    Portal
                </a>
            @endif 
            
            <!-- Tombol Toggler Mobile -->
            <button id="mobile-menu-button" class="md:hidden p-2 rounded-lg text-gray-600 hover:bg-gray-100 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
        <!-- === AKHIR BAGIAN TOMBOL DEKSTOP BARU === -->
    </div>

    <!-- === MOBILE MENU BARU === -->
    <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg pb-4">
        
        <a href="/" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 border-t mt-1 pt-2">Home</a>
        
        <button id="mobile-layanan-button" class="flex justify-between items-center w-full px-4 py-2 text-gray-800 hover:bg-gray-100 font-semibold border-t mt-2 pt-2 focus:outline-none">
            Layanan Kami
            <svg id="layanan-arrow" class="w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
        </button>
        <div id="mobile-layanan-content" class="hidden px-8 space-y-1 text-sm text-gray-600 pb-2">
            <a class="block py-1 hover:text-wti-orange">IT Consulting</a>
            <a class="block py-1 hover:text-wti-orange">Migrasi Cloud</a>
            <a class="block py-1 hover:text-wti-orange">Cybersecurity</a>
            <a class="block py-1 hover:text-wti-orange">Pengembangan Aplikasi</a>
            <a class="block py-1 hover:text-wti-orange">Asesmen IT</a>
        </div>
        
        <!-- Karir -->
        <a href="{{ route('career.index') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 border-t mt-1">Karir</a>
        
        <!-- Kontak (TAUTAN LANGSUNG) -->
        <a href="{{ route('contact.index') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 font-semibold border-t mt-1">Kontak</a>

        {{-- LOGIKA PORTAL UNTUK MOBILE MENU --}}
        <div class="px-4 pt-4 border-t mt-2">
            @if(session('portal_access'))
                {{-- Logika jika sudah login Portal --}}
                <span class="block text-center text-gray-600 font-semibold py-2">Halo, {{ session('portal_access.name') }}</span>
                <form method="POST" action="{{ route('portal.logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-center text-gray-600 hover:text-red-600 font-semibold py-2 border rounded-lg transition duration-150">
                        Logout Portal
                    </button>
                </form>
            @else
                {{-- Logika jika belum login Portal --}}
                <a href="{{ route('portal.login') }}" class="block text-center bg-wti-orange hover:bg-orange-700 text-white font-semibold py-2 rounded-lg transition duration-300">
                    Portal
                </a>
            @endif 
        </div>
        {{-- AKHIR LOGIKA PORTAL UNTUK MOBILE MENU --}}

    </div>
</header>
<!-- Catatan: Anda perlu memastikan ada JavaScript yang mengaktifkan Mobile Menu (toggle visibility) dan Dropdown Layanan di mobile. -->
