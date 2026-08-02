<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin - Catering Nusantara Bogor')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-cnb-cream">

    @auth('admin')
    <nav class="p-4 bg-cnb-black text-cnb-cream flex justify-between items-center">
        <span class="font-serif font-semibold">Admin Panel — <span class="text-cnb-gold">Catering Nusantara</span></span>
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit" class="text-sm hover:text-cnb-gold">Logout</button>
        </form>
    </nav>
    @endauth

    <main class="p-6 max-w-5xl mx-auto">
        @yield('content')
    </main>

    @livewireScripts
</body>
</html>