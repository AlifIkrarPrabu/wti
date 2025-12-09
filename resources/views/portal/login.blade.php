@extends('layouts.app') 

@section('title', 'Akses Portal Klien')

@section('content')
<style>
    .login-container {
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.2), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        border-radius: 1rem;
        overflow: hidden;
    }
    
    .form-panel-bg {
        background-color: #1E3A8A; 
    }

    .form-input {
        background-color: white;
        color: #1f2937;
        border: none;
    }

    .form-input:focus {
        border-color: transparent;
        box-shadow: 0 0 0 2px white;
    }
</style>

<div class="flex h-screen items-center justify-center bg-gray-100 p-4 font-sans">
    
    {{-- Container Split Screen --}}
    <div class="flex w-full max-w-5xl h-[550px] login-container bg-white">
        
        <!-- Bagian Kiri: Logo & Informasi (Latar Belakang Putih) --><div class="hidden lg:flex w-1/2 p-12 bg-white flex-col items-center justify-center text-center">
            <div class="space-y-6">
                {{-- MENGGANTI IKON SVG DENGAN GAMBAR LOGO ANDA --}}
                <img src="{{ asset('img/logo.png') }}" alt="Logo WTI" class="w-100 h-100 mx-auto object-contain">
                
                <h2 class="text-2xl font-extrabold text-gray-900 tracking-wide">
                    PT WISE TECH INTEGRA
                </h2>
                <p class="text-sm text-gray-500 max-w-xs mx-auto">
                    Portal Akses.
                </p>
            </div>
        </div>

        <!-- Bagian Kanan: Formulir Login (Latar Belakang Biru Tua) --><div class="w-full lg:w-1/2 p-8 sm:p-12 flex flex-col justify-center form-panel-bg text-white">
            
            {{-- Header Form --}}
            <h1 class="text-xl font-medium text-gray-200 text-left mb-2">Selamat Datang</h1>
            <p class="text-4xl font-extrabold text-white text-left mb-8">Akses Portal</p>
            
            {{-- Menampilkan status umum dari redirect --}}
            @if (session('status'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4 rounded-lg" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            
            <form method="POST" action="{{ route('portal.access') }}" class="space-y-6">
                @csrf
                
                {{-- ID Akses Label --}}
                <div>
                    <label for="access_id" class="block text-sm font-medium text-gray-200 mb-2">ID Akses</label>
                    <input 
                        id="access_id" 
                        type="text" 
                        name="access_id" 
                        placeholder="Masukkan ID Akses Unik" 
                        value="{{ old('access_id') }}"
                        required 
                        autofocus
                        class="form-input w-full px-4 py-3 border rounded-lg shadow-inner focus:outline-none focus:ring-2 focus:ring-white 
                        @error('access_id') border-red-500 @else border-transparent @enderror"
                    >
                    
                    {{-- Menampilkan pesan error --}}
                    @error('access_id')
                        <p class="text-red-300 text-sm mt-2 font-medium">{{ $message }}</p>
                    @enderror
                </div>
                
                {{-- Tombol Login --}}
                <div class="pt-4">
                    <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-xl text-lg font-bold text-blue-900 bg-white hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-blue-900 focus:ring-white transition duration-150">
                        MASUK
                    </button>
                </div>
                
            </form>
            
            <div class="mt-8 text-center">
                <a href="{{ route('contact.index') }}" class="text-sm text-gray-300 hover:text-white hover:underline">
                    Hubungi tim support jika mengalami masalah akses.
                </a>
            </div>
        </div>
        
    </div>
</div>
@endsection
