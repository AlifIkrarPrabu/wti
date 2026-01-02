<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Wise Tech Integra')</title>
    <link rel="icon" type="image/png" href="{{ asset('img/logo2.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        /* CSS Sederhana untuk meniru layout */
        body { font-family: sans-serif; margin: 0; padding: 0; }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 15px; }
        .navbar { display: flex; justify-content: space-between; align-items: center; padding: 15px 0; }
        .nav-links a { margin-left: 20px; text-decoration: none; color: #333; }
        .btn-primary { background-color: #ff6600; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; display: inline-block; }
        .hero-section { background-color: #fff9f5; padding: 80px 0; text-align: center; }
        .section { padding: 50px 0; }
        .services-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center; }
        .footer { background-color: #333; color: white; padding: 40px 0; font-size: 0.9em; }
        .footer-grid { display: flex; justify-content: space-between; }
        .simple-solution { background-color: #fff9f5; padding: 50px 0; }
        .solution-list { list-style: none; padding: 0; }
        .solution-list li { margin-bottom: 15px; }
    </style>
</head>
<body>

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
    
</body>
</html>