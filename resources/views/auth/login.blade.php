@extends('layouts.app') 

@section('content')
<div class="container mx-auto py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md mx-auto bg-white p-8 rounded-xl shadow-lg">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Login ke Dashboard</h2>
        
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Alamat Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus 
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-wti-orange focus:border-wti-orange p-2 border @error('email') border-red-500 @enderror">
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input id="password" type="password" name="password" required 
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-wti-orange focus:border-wti-orange p-2 border @error('password') border-red-500 @enderror">
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="w-full bg-wti-orange hover:bg-orange-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300">
                Login
            </button>
        </form>
    </div>
</div>
@endsection