<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel - Catering Nusantara Bogor')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-cnb-cream text-cnb-wood-dark min-h-screen font-sans" x-data="{ mobileMenuOpen: false }">

    @auth('admin')
    {{-- TOP NAVBAR --}}
    <header class="sticky top-0 z-40 bg-cnb-wood-dark text-white shadow-md border-b border-cnb-gold/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-0 flex items-stretch justify-between min-h-15">

            {{-- Brand --}}
            <a href="{{ route('admin.dashboard') }}" wire:navigate class="font-serif font-bold text-lg sm:text-xl tracking-wide flex items-center pr-6 border-r border-white/10">
                Admin <span class="text-cnb-gold ml-1.5">Catering</span>
            </a>

            {{-- Desktop Navigation Tabs --}}
            <nav class="hidden md:flex items-stretch flex-1 px-2">
                <a href="{{ route('admin.dashboard') }}" wire:navigate
                   class="flex items-center gap-2 px-5 text-sm font-semibold border-b-4 transition-colors duration-200
                          {{ request()->routeIs('admin.dashboard')
                             ? 'border-cnb-gold text-cnb-gold'
                             : 'border-transparent text-white/75 hover:text-white hover:border-white/30' }}">
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9 9 9M5 10v9a1 1 0 001 1h4v-5h4v5h4a1 1 0 001-1v-9"/>
                    </svg>
                    Dashboard
                </a>
                <a href="{{ route('admin.category.index') }}" wire:navigate
                   class="flex items-center gap-2 px-5 text-sm font-semibold border-b-4 transition-colors duration-200
                          {{ request()->routeIs('admin.category.index')
                             ? 'border-cnb-gold text-cnb-gold'
                             : 'border-transparent text-white/75 hover:text-white hover:border-white/30' }}">
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                    </svg>
                    Kategori
                </a>
                <a href="{{ route('admin.menu.index') }}" wire:navigate
                   class="flex items-center gap-2 px-5 text-sm font-semibold border-b-4 transition-colors duration-200
                          {{ request()->routeIs('admin.menu.index')
                             ? 'border-cnb-gold text-cnb-gold'
                             : 'border-transparent text-white/75 hover:text-white hover:border-white/30' }}">
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                    Paket Menu
                </a>
            </nav>

            {{-- Right Actions --}}
            <div class="flex items-center gap-2 pl-4">
                <a href="{{ route('home') }}" target="_blank"
                   class="hidden sm:inline-flex items-center gap-1.5 text-xs font-semibold text-white/70 hover:text-cnb-gold transition px-3 py-1.5 rounded-lg hover:bg-white/10">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                    </svg>
                    Lihat Web
                </a>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="bg-red-600/80 hover:bg-red-600 text-white text-xs font-bold px-4 py-2 rounded-lg transition">
                        Keluar
                    </button>
                </form>

                {{-- Hamburger (mobile only) --}}
                <button @click="mobileMenuOpen = !mobileMenuOpen"
                        class="md:hidden flex flex-col items-center justify-center w-10 h-10 rounded-lg hover:bg-white/10 transition gap-1.5 ml-1"
                        aria-label="Toggle Menu">
                    <span class="block w-5 h-0.5 bg-white rounded transition-all duration-300"
                          :class="mobileMenuOpen ? 'rotate-45 translate-y-2' : ''"></span>
                    <span class="block w-5 h-0.5 bg-white rounded transition-all duration-300"
                          :class="mobileMenuOpen ? 'opacity-0' : ''"></span>
                    <span class="block w-5 h-0.5 bg-white rounded transition-all duration-300"
                          :class="mobileMenuOpen ? '-rotate-45 -translate-y-2' : ''"></span>
                </button>
            </div>
        </div>

        {{-- Mobile Drawer Navigation --}}
        <div x-show="mobileMenuOpen"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-2"
             class="md:hidden bg-cnb-wood-dark border-t border-white/10 px-4 py-3 space-y-1"
             style="display: none;">

            <a href="{{ route('admin.dashboard') }}" wire:navigate @click="mobileMenuOpen = false"
               class="flex items-center gap-3 px-4 py-3.5 rounded-xl text-sm font-semibold transition
                      {{ request()->routeIs('admin.dashboard')
                         ? 'bg-cnb-gold text-cnb-wood-dark'
                         : 'text-white hover:bg-white/10' }}">
                <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9 9 9M5 10v9a1 1 0 001 1h4v-5h4v5h4a1 1 0 001-1v-9"/>
                </svg>
                Dashboard
            </a>
            <a href="{{ route('admin.category.index') }}" wire:navigate @click="mobileMenuOpen = false"
               class="flex items-center gap-3 px-4 py-3.5 rounded-xl text-sm font-semibold transition
                      {{ request()->routeIs('admin.category.index')
                         ? 'bg-cnb-gold text-cnb-wood-dark'
                         : 'text-white hover:bg-white/10' }}">
                <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                </svg>
                Kelola Kategori
            </a>
            <a href="{{ route('admin.menu.index') }}" wire:navigate @click="mobileMenuOpen = false"
               class="flex items-center gap-3 px-4 py-3.5 rounded-xl text-sm font-semibold transition
                      {{ request()->routeIs('admin.menu.index')
                         ? 'bg-cnb-gold text-cnb-wood-dark'
                         : 'text-white hover:bg-white/10' }}">
                <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                </svg>
                Kelola Paket Menu
            </a>
            <div class="border-t border-white/10 pt-2 pb-1">
                <a href="{{ route('home') }}" target="_blank"
                   class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-semibold text-cnb-gold hover:bg-white/10 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                    </svg>
                    Buka Tampilan Website
                </a>
            </div>
        </div>
    </header>
    @endauth

    {{-- MAIN CONTENT CONTAINER --}}
    <main class="max-w-7xl mx-auto p-4 sm:p-6 md:p-8">
        {{ $slot ?? '' }}
        @yield('content')
    </main>

    @livewireScripts
</body>
</html>