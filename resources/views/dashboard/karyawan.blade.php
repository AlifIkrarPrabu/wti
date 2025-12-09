@extends('layouts.app') 

@section('content')
<div class="container mx-auto py-12 px-4 sm:px-6 lg:px-8">
    <div class="bg-white p-8 rounded-xl shadow-lg">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">Dashboard Karyawan</h1>
        <p class="text-lg text-gray-600 mb-8">Selamat datang, {{ Auth::user()->name }}! Silakan lihat tugas dan informasi Anda di sini.</p>
        
        <div class="bg-blue-50 border-l-4 border-blue-500 text-blue-700 p-4" role="alert">
            <p class="font-bold">Akses Karyawan</p>
            <p>Halaman ini adalah halaman default untuk user yang baru mendaftar (role: Karyawan).</p>
        </div>

        </div>
</div>
@endsection