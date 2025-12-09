@extends('layouts.app')

@section('content')

    <section class="bg-gray-50 py-24 relative overflow-hidden">
        <div class="absolute top-10 left-5 w-4 h-4 bg-wti-orange rounded-full opacity-50"></div>
        <div class="absolute bottom-20 right-10 w-6 h-6 bg-wti-orange rounded-full opacity-30"></div>
        
        <div class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-4 sm:px-6 lg:px-8">
            <div class="lg:w-1/2 text-center lg:text-left mb-10 lg:mb-0">
                <h1 class="text-5xl font-extrabold text-gray-900 leading-snug">
                    We create <span class="text-wti-orange">solutions</span> for your business
                </h1>
                <p class="mt-4 text-lg text-gray-600 max-w-lg">
                    PT. Wise Tech Integra adalah penyedia solusi IT yang berfokus pada implementasi infrastruktur, integrasi sistem, dan layanan tenaga kerja IT.
Didirikan oleh profesional berpengalaman, kami menghadirkan solusi andal dan tepat sasaran untuk menyederhanakan operasional IT, meningkatkan keamanan, dan mendukung bisnis dari skala kecil hingga besar.</p>
            </div>
            <div class="lg:w-1/2 flex justify-center">
                <img src="/img/logo.png" alt="Hero Illustration" class="max-w-full h-auto">
            </div>
        </div>
    </section>

    <section class="py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-2">Produk dan Solusi Kami</h2>
        <p class="text-center text-gray-500 mb-12">Some of our brilliant digital solutions with our solid team</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="p-6 text-center border border-gray-100 rounded-xl shadow-md transition duration-300 hover:shadow-xl">
                <img src="/img/data.jpg" alt="SEO Icon" class="h-16 mx-auto mb-4 p-2 bg-yellow-100 rounded-full">
                <h4 class="text-xl font-semibold text-gray-800 mb-1">Data Centre Infrastructure</h4>
                <p class="text-gray-500 text-sm">Server, Storage, Data Centre Utility.</p>
            </div>
            <div class="p-6 text-center border border-gray-100 rounded-xl shadow-md transition duration-300 hover:shadow-xl">
                <img src="/img/network.jpg" alt="Marketing Icon" class="h-16 mx-auto mb-4 p-2 bg-green-100 rounded-full">
                <h4 class="text-xl font-semibold text-gray-800 mb-1">Enterprise Network Infrastructure</h4>
                <p class="text-gray-500 text-sm">Switching and Routing, Structured Cabling, Wireless Network (Wi-Fi)</p>
            </div>
            <div class="p-6 text-center border border-gray-100 rounded-xl shadow-md transition duration-300 hover:shadow-xl">
                <img src="/img/security.jpg" alt="PPC Icon" class="h-16 mx-auto mb-4 p-2 bg-purple-100 rounded-full">
                <h4 class="text-xl font-semibold text-gray-800 mb-1">Enterprise Security Infrastructure</h4>
                <p class="text-gray-500 text-sm">Next-Gen Firewall, Endpoint Protection, Network Surveillance (CCTV), Door Lock System</p>
            </div>
            <div class="p-6 text-center border border-gray-100 rounded-xl shadow-md transition duration-300 hover:shadow-xl">
                <img src="/img/service.jpg" alt="Web Dev Icon" class="h-16 mx-auto mb-4 p-2 bg-red-100 rounded-full">
                <h4 class="text-xl font-semibold text-gray-800 mb-1">Profesional Service</h4>
                <p class="text-gray-500 text-sm">System Integration & Migration, IT Consultation, IT Outsourcing / Managed Services.</p>
            </div>
        </div>

        <div class="mt-6 flex flex-wrap justify-center gap-6"> 
             
            <div class="p-6 text-center border border-gray-100 rounded-xl shadow-md transition duration-300 hover:shadow-xl w-full md:w-[calc(50%-12px)] lg:w-[calc(25%-12px)]">
                <img src="/img/iot.jpg" alt="Web Dev Icon" class="h-16 mx-auto mb-4 p-2 bg-red-100 rounded-full">
                <h4 class="text-xl font-semibold text-gray-800 mb-1">Internet of Things</h4>
                <p class="text-gray-500 text-sm">Sensor & Edge Device, Real-time Monitoring Dashboard, Integrasi ke sistem ERP/SCADA.</p>
            </div>
            <div class="p-6 text-center border border-gray-100 rounded-xl shadow-md transition duration-300 hover:shadow-xl w-full md:w-[calc(50%-12px)] lg:w-[calc(25%-12px)]">
                <img src="/img/waste.jpg" alt="Web Dev Icon" class="h-16 mx-auto mb-4 p-2 bg-red-100 rounded-full">
                <h4 class="text-xl font-semibold text-gray-800 mb-1">Waste Disposal</h4>
                <p class="text-gray-500 text-sm">Keamanan data, meminimalkan risiko lingkungan, dan mengoptimalkan penggunaan sumber daya.</p>
            </div>
        </div>
    </div>
</section>
    
    <section class="bg-orange-50 py-20 relative overflow-hidden">
        <div class="container mx-auto flex flex-col-reverse lg:flex-row items-center justify-between px-4 sm:px-6 lg:px-8">
            <div class="lg:w-1/2 flex justify-center mb-10 lg:mb-0">
                <img src="/img/penyedia.jpg" alt="Solution Illustration" class="max-w-full h-auto">
            </div>
            <div class="lg:w-1/2 lg:pl-16 text-center lg:text-left">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Penyediaan Barang IT</h2>
                <p class="text-gray-600 mb-8 max-w-lg">
                    We understand that real businesses need simple solutions. Let's take one step at a time with us.
                </p>
                <ol class="space-y-4 text-lg text-gray-700">
                    <li class="flex items-center"><span class="font-bold text-wti-orange mr-4 w-6 h-6 rounded-full bg-white flex items-center justify-center shadow-md">1</span> Komputer & Aksesoris</li>
                    <li class="flex items-center"><span class="font-bold text-wti-orange mr-4 w-6 h-6 rounded-full bg-white flex items-center justify-center shadow-md">2</span> Software & Lisensi</li>
                    <li class="flex items-center"><span class="font-bold text-wti-orange mr-4 w-6 h-6 rounded-full bg-white flex items-center justify-center shadow-md">3</span> infrastruktur Tambahan</li>
                    <li class="flex items-center"><span class="font-bold text-wti-orange mr-4 w-6 h-6 rounded-full bg-white flex items-center justify-center shadow-md">4</span> Perangkat IT & Sensor</li>
                </ol>
            </div>
        </div>
    </section>
    
    <section class="py-20">
    <div class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-4 sm:px-6 lg:px-8">
        <div class="lg:w-1/2 text-center lg:text-left mb-10 lg:mb-0">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Pengalaman Jasa IT</h2>
            <p class="text-gray-600 mb-6 max-w-lg">
                Kami percaya pada kekuatan data dan implementasi nyata di lapangan. Pendekatan kami didorong oleh analitik, memungkinkan kami mengambil keputusan cerdas untuk mengoptimalkan upaya digital Anda. Kami menyediakan solusi kuat yang disesuaikan untuk bisnis Anda.
            </p>
        </div>
        
        <div class="lg:w-1/2 flex justify-center lg:pl-16">
            <div class="grid grid-cols-2 gap-4 max-w-xl">
                <img src="/img/it1.png" 
                     alt="Tim bekerja di kantor" 
                     class="w-full h-40 object-cover rounded-lg shadow-md transition duration-300 hover:shadow-xl transform hover:scale-105">
                
                <img src="/img/it2.png" 
                     alt="Anggota tim rapat" 
                     class="w-full h-40 object-cover rounded-lg shadow-md transition duration-300 hover:shadow-xl transform hover:scale-105 mt-4 lg:mt-0">
                
                <img src="/img/it3.png" 
                     alt="Proyek pengembangan" 
                     class="w-full h-40 object-cover rounded-lg shadow-md transition duration-300 hover:shadow-xl transform hover:scale-105">
                
                <img src="/img/it4.png" 
                     alt="Kerja lapangan" 
                     class="w-full h-40 object-cover rounded-lg shadow-md transition duration-300 hover:shadow-xl transform hover:scale-105 mt-4 lg:mt-0">
            </div>
        </div>
    </div>
</section>
    
    <section class="bg-gray-50 py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Pelanggan Kami</h2>
        
        <div class="flex overflow-x-auto space-x-6 pb-4">
            
            <div class="flex-shrink-0 w-40 sm:w-56 bg-white p-6 rounded-xl shadow-lg border border-gray-100 flex items-center justify-center h-28 transition duration-300 hover:shadow-xl">
                <img src="/img/intikom.png" alt="Client Logo 1" class="max-h-16 max-w-full opacity-70 hover:opacity-100 transition duration-300 object-contain">
            </div>

            <div class="flex-shrink-0 w-40 sm:w-56 bg-white p-6 rounded-xl shadow-lg border border-gray-100 flex items-center justify-center h-28 transition duration-300 hover:shadow-xl">
                <img src="/img/berca.jpg" alt="Client Logo 2" class="max-h-16 max-w-full opacity-70 hover:opacity-100 transition duration-300 object-contain">
            </div>

            <div class="flex-shrink-0 w-40 sm:w-56 bg-white p-6 rounded-xl shadow-lg border border-gray-100 flex items-center justify-center h-28 transition duration-300 hover:shadow-xl">
                <img src="/img/advics.jpg" alt="Client Logo 3" class="max-h-16 max-w-full opacity-70 hover:opacity-100 transition duration-300 object-contain">
            </div>

            <div class="flex-shrink-0 w-40 sm:w-56 bg-white p-6 rounded-xl shadow-lg border border-gray-100 flex items-center justify-center h-28 transition duration-300 hover:shadow-xl">
                <img src="/img/tjforge.jpg" alt="Client Logo 4" class="max-h-16 max-w-full opacity-70 hover:opacity-100 transition duration-300 object-contain">
            </div>
            
            <div class="flex-shrink-0 w-40 sm:w-56 bg-white p-6 rounded-xl shadow-lg border border-gray-100 flex items-center justify-center h-28 transition duration-300 hover:shadow-xl">
                <img src="/img/amns.jpg" alt="Client Logo 5" class="max-h-16 max-w-full opacity-70 hover:opacity-100 transition duration-300 object-contain">
            </div>

            <div class="flex-shrink-0 w-40 sm:w-56 bg-white p-6 rounded-xl shadow-lg border border-gray-100 flex items-center justify-center h-28 transition duration-300 hover:shadow-xl">
                <img src="/img/fuji.jpg" alt="Client Logo 6" class="max-h-16 max-w-full opacity-70 hover:opacity-100 transition duration-300 object-contain">
            </div>

            <div class="flex-shrink-0 w-40 sm:w-56 bg-white p-6 rounded-xl shadow-lg border border-gray-100 flex items-center justify-center h-28 transition duration-300 hover:shadow-xl">
                <img src="/img/indorama.jpg" alt="Client Logo 7" class="max-h-16 max-w-full opacity-70 hover:opacity-100 transition duration-300 object-contain">
            </div>

            <div class="flex-shrink-0 w-40 sm:w-56 bg-white p-6 rounded-xl shadow-lg border border-gray-100 flex items-center justify-center h-28 transition duration-300 hover:shadow-xl">
                <img src="/img/aicc.png" alt="Client Logo 9" class="max-h-16 max-w-full opacity-70 hover:opacity-100 transition duration-300 object-contain">
            </div>

            <div class="flex-shrink-0 w-40 sm:w-56 bg-white p-6 rounded-xl shadow-lg border border-gray-100 flex items-center justify-center h-28 transition duration-300 hover:shadow-xl">
                <img src="/img/tm.jpg" alt="Client Logo 10" class="max-h-16 max-w-full opacity-70 hover:opacity-100 transition duration-300 object-contain">
            </div>
            
            </div>
        </div>
</section>

@endsection