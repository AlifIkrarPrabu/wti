@extends('layouts.app') 

@section('title', 'Karir - Bergabunglah dengan Wise Tech Integra')

@section('content')
<div style="padding: 60px 20px; max-width: 1000px; margin: auto;">
    
    <header style="text-align: center; margin-bottom: 50px;">
        <h1 style="color: #003366; font-size: 2.5em; margin-bottom: 10px;">
            Membangun Masa Depan Teknologi Bersama Kami
        </h1>
        <p style="color: #666; font-size: 1.1em;">
            PT. Wise Tech Integra mencari talenta terbaik di bidang IT untuk bergabung dalam tim kami. 
            Jika Anda siap berinovasi dan bersemangat dalam dunia integrasi sistem dan keamanan siber, mari berkarya bersama!
        </p>
    </header>

    <h2 style="color: #ff8c00; border-bottom: 2px solid #ff8c00; padding-bottom: 10px; margin-bottom: 30px;">
        Lowongan Pekerjaan Terbaru
    </h2>

    @if (count($jobs) > 0)
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;">
            @foreach ($jobs as $job)
                {{-- Job Card --}}
                <div style="border: 1px solid #ddd; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                    <h3 style="color: #003366; margin-top: 0;">{{ $job['title'] }}</h3>
                    <p style="font-size: 0.9em; color: #555;">
                        Lokasi: <strong>{{ $job['location'] }}</strong> | Tipe: <strong>{{ $job['type'] }}</strong>
                    </p>
                    <p style="font-size: 0.95em; margin-bottom: 15px;">{{ $job['description'] }}</p>
                    <a href="#" style="
                        display: inline-block; 
                        padding: 8px 15px; 
                        background-color: #ff8c00; 
                        color: white; 
                        text-decoration: none; 
                        border-radius: 4px;
                    ">
                        Lamar Sekarang
                    </a>
                </div>
            @endforeach
        </div>
    @else
        <p style="text-align: center; color: #888;">Saat ini belum ada lowongan pekerjaan yang tersedia. Silakan cek kembali nanti!</p>
    @endif
</div>
@endsection