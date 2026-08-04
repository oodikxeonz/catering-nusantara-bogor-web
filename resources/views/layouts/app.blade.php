<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Catering Nusantara Bogor')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-cnb-cream text-cnb-black min-h-screen flex flex-col justify-between">

    {{-- NAVBAR --}}
    <nav class="sticky top-0 z-50 bg-cnb-black/95 backdrop-blur text-cnb-cream shadow-lg border-b border-cnb-gold/20">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="font-serif font-bold text-xl tracking-wide">
                Catering <span class="text-cnb-gold">Nusantara</span>
            </a>
            <div class="space-x-8 text-sm font-medium hidden md:flex">
                <a href="{{ route('home') }}" class="hover:text-cnb-gold transition">Beranda</a>
                <a href="{{ route('menu.index') }}" class="hover:text-cnb-gold transition">Menu</a>
                <a href="{{ route('gallery') }}" class="hover:text-cnb-gold transition">Galeri</a>
                <a href="{{ route('about') }}" class="hover:text-cnb-gold transition">Tentang</a>
            </div>
            <a href="https://wa.me/628561155113" target="_blank"
               class="bg-cnb-gold text-cnb-black text-sm font-semibold px-5 py-2.5 rounded-full hover:bg-cnb-gold-light transition-all duration-300 shadow-md">
                Pesan Sekarang
            </a>
        </div>
    </nav>

    {{-- MAIN CONTENT --}}
    <main class="flex-grow">
        @yield('content')
    </main>

    {{-- FOOTER (mt-20 dihapus untuk menghilangkan gap garis putih) --}}
    

    <a href="https://wa.me/628561155113" target="_blank"
       aria-label="Chat WhatsApp"
       class="fixed bottom-6 right-6 bg-green-500 hover:bg-green-600 text-white rounded-full w-14 h-14 flex items-center justify-center shadow-2xl z-50 transition-all duration-300 hover:scale-110">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
            <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2 22l5.29-1.39c1.44.79 3.06 1.2 4.71 1.2h.01c5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.05 2h-.01zm5.8 14.1c-.24.68-1.4 1.32-1.93 1.4-.5.08-1.12.11-1.8-.11-.42-.13-.96-.31-1.65-.6-2.9-1.25-4.8-4.17-4.94-4.36-.14-.19-1.19-1.58-1.19-3.01 0-1.43.75-2.13 1.02-2.42.27-.29.58-.36.78-.36.2 0 .39 0 .56.01.18.01.42-.07.66.5.24.58.83 2.01.9 2.16.07.15.12.32.02.51-.1.19-.15.31-.29.48-.15.17-.31.38-.44.51-.15.15-.3.31-.13.6.17.29.75 1.24 1.62 2.01 1.11.99 2.05 1.3 2.34 1.44.29.15.46.13.63-.08.17-.2.72-.84.92-1.13.19-.29.39-.24.66-.14.27.1 1.69.8 1.98.94.29.15.48.22.55.34.07.13.07.72-.17 1.4z"/>
        </svg>
    </a>

</body>
</html>