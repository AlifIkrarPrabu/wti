@extends('layouts.app') 

@section('content')
<div class="container mx-auto py-12 px-4 sm:px-6 lg:px-8">
    <div class="bg-white p-8 rounded-xl shadow-lg">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">Dashboard Admin</h1>
        <p class="text-lg text-gray-600 mb-8">Selamat datang, {{ Auth::user()->name }}! Anda memiliki akses penuh ke sistem.</p>
        
        <div class="mt-10 p-6 border rounded-xl bg-gray-50">
            <h2 class="text-2xl font-semibold mb-4 text-wti-orange">Tambah Akun Karyawan Baru</h2>
            
            @if(session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('admin.create_karyawan') }}">
                @csrf
                
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <input id="name" type="text" name="name" required 
                           class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2 border @error('name') border-red-500 @enderror">
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Karyawan</label>
                    <input id="email" type="email" name="email" required 
                           class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2 border @error('email') border-red-500 @enderror">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" type="password" name="password" required 
                           class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2 border @error('password') border-red-500 @enderror">
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300">
                    Buat Akun Karyawan
                </button>
            </form>
        </div>
        
    </div>
</div>
@endsection