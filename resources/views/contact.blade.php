@extends('layouts.app') 

@section('title', 'Hubungi Kami - Wise Tech Integra')

@section('content')

    {{-- HEADER KONTEN (TIDAK LAGI HERO SECTION BESAR) --}}
    <div class="pt-12 pb-6 px-4 max-w-7xl mx-auto sm:px-6 lg:px-8 text-center">
        {{-- CATATAN: Mengganti warna border dan teks dari custom-orange ke orange-600 untuk kepastian warna --}}
        <h1 class="text-blue-800 text-4xl sm:text-5xl font-extrabold mb-2">
            Hubungi Kami
        </h1>
        <p class="text-gray-600 text-lg max-w-3xl mx-auto">
            Siap berkolaborasi dalam proyek digital Anda? Kami akan senang mendengar ide Anda.
        </p>
    </div>
    
    {{-- KONTEN UTAMA KONTAK --}}
    <div class="pb-12 px-4 max-w-7xl mx-auto sm:px-6 lg:px-8">


        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            
            {{-- Bagian Kiri: Informasi Kontak (Pindah ke 2 kolom) --}}
            <div class="lg:col-span-2">
                {{-- CATATAN: Mengganti warna border dari custom-orange ke orange-600 --}}
                <h2 class="text-3xl font-bold text-gray-900 border-b-2 border-orange-600 pb-2 mb-8">
                    Informasi Kontak
                </h2>
                
                {{-- Menggunakan grid 3 kolom di desktop untuk informasi kontak --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-lg text-gray-700">
                    
                    {{-- Alamat --}}
                    {{-- CATATAN: Mengganti warna teks dari custom-orange ke orange-600 dan custom-blue ke blue-800 --}}
                    <div class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-orange-600 mr-4 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                        <div>
                            <p class="font-semibold text-blue-800">Alamat Kantor:</p>
                            <p>Jl. Galuh Mas Raya, Kayana A39, Karawang, Jawa Barat 41361</p>
                        </div>
                    </div>
                    
                    {{-- Telepon --}}
                    {{-- CATATAN: Mengganti warna teks dari custom-orange ke orange-600 dan custom-blue ke blue-800 --}}
                    <div class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-orange-600 mr-4 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.63A2 2 0 0 1 3.08 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        <div>
                            <p class="font-semibold text-blue-800">Telepon:</p>
                            <a href="tel:+6285183292424" class="hover:underline">+62 851-8329-2424</a>
                        </div>
                    </div>

                    {{-- Email --}}
                    {{-- CATATAN: Mengganti warna teks dari custom-orange ke orange-600 dan custom-blue ke blue-800 --}}
                    <div class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-orange-600 mr-4 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                        <div>
                            <p class="font-semibold text-blue-800">Email:</p>
                            <a href="mailto:sales@wise-tech.co.id" class="hover:underline">sales@wise-tech.co.id</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
        {{-- Peta Lokasi (sesuai gambar Anda) --}}
        <div class="mt-12">
            {{-- CATATAN: Mengganti warna border dari custom-orange ke orange-600 --}}
            <h2 class="text-3xl font-bold text-gray-900 border-b-2 border-orange-600 pb-2 mb-8">
                Lokasi Kami
            </h2>
            <div class="bg-gray-200 h-96 w-full rounded-xl overflow-hidden shadow-lg">
                {{-- Placeholder untuk Peta Google Maps/iframe --}}
                <iframe 
                    src="https://maps.google.com/maps?q=Jl.%20Galuh%20Mas%20Raya,%20Kayana%20A39,%20Karawang&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
            </div>
            
            {{-- Tombol "Lihat kami di Google Maps" --}}
            <div class="text-center mt-6">
                <a href="https://www.google.com/maps/place/Jl.+Galuh+Mas+Raya,+Kayana+A39,+Karawang" 
                   target="_blank" 
                   {{-- PERBAIKAN: Menggunakan kelas warna standar Tailwind CSS (bg-orange-600) agar warna oranye solid terjamin muncul. --}}
                   class="inline-flex items-center justify-center py-3 px-8 border border-transparent 
                          rounded-lg text-lg font-medium text-white 
                          bg-orange-600 
                          transition duration-150 ease-in-out 
                          hover:bg-orange-700 
                          focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-600"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                    Lihat kami di Google Maps
                </a>
            </div>
        </div>
    </div>
@endsection
