@extends('layouts.admin')

@section('title', 'Dashboard Admin - Catering Nusantara Bogor')

@section('content')
<div class="space-y-8">

    {{-- Welcome Banner --}}
    <div class="bg-linear-to-r from-cnb-wood-dark to-cnb-wood-medium text-white p-6 sm:p-8 rounded-2xl shadow-xl batik-pattern relative overflow-hidden">
        <div class="relative z-10 max-w-2xl">
            <span class="bg-cnb-gold text-cnb-wood-dark text-xs font-bold px-3.5 py-1.5 rounded-full inline-block mb-3 tracking-wider uppercase">Panel Pengelolaan Website</span>
            <h1 class="font-serif text-2xl sm:text-4xl font-bold text-cnb-wood-dark mb-2 leading-tight">
                Selamat Datang, Ibu Admin
            </h1>
            <p class="text-cnb-wood-medium/80 font-sans text-sm sm:text-base font-light leading-relaxed">
                Di sini Ibu bisa dengan mudah menambah menu baru, mengubah harga, maupun mengatur ketersediaan makanan di website.
            </p>
        </div>
    </div>

    {{-- Stat Cards Grid --}}
    <div>
        <h2 class="font-serif text-lg sm:text-xl font-bold text-cnb-wood-dark mb-4">Ringkasan Data Website</h2>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
            {{-- Total Kategori --}}
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-cnb-gray/20 flex items-center gap-5 hover:border-cnb-gold transition">
                <div class="w-14 h-14 rounded-xl bg-cnb-gold/15 border border-cnb-gold/30 flex items-center justify-center shrink-0">
                    <svg class="w-7 h-7 text-cnb-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                    </svg>
                </div>
                <div>
                    <p class="text-xs font-bold uppercase tracking-wider text-cnb-gray">Total Kategori</p>
                    <p class="text-3xl font-serif font-bold text-cnb-wood-dark mt-0.5">{{ $totalCategories }}</p>
                    <span class="text-[11px] text-cnb-gold font-semibold">Kategori Menu</span>
                </div>
            </div>

            {{-- Total Paket --}}
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-cnb-gray/20 flex items-center gap-5 hover:border-cnb-gold transition">
                <div class="w-14 h-14 rounded-xl bg-cnb-gold/15 border border-cnb-gold/30 flex items-center justify-center shrink-0">
                    <svg class="w-7 h-7 text-cnb-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                </div>
                <div>
                    <p class="text-xs font-bold uppercase tracking-wider text-cnb-gray">Total Paket Menu</p>
                    <p class="text-3xl font-serif font-bold text-cnb-wood-dark mt-0.5">{{ $totalPackages }}</p>
                    <span class="text-[11px] text-cnb-gold font-semibold">Varian Siap Pesan</span>
                </div>
            </div>

            {{-- Total Produk / Lauk --}}
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-cnb-gray/20 flex items-center gap-5 hover:border-cnb-gold transition">
                <div class="w-14 h-14 rounded-xl bg-cnb-gold/15 border border-cnb-gold/30 flex items-center justify-center shrink-0">
                    <svg class="w-7 h-7 text-cnb-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                </div>
                <div>
                    <p class="text-xs font-bold uppercase tracking-wider text-cnb-gray">Total Lauk & Isian</p>
                    <p class="text-3xl font-serif font-bold text-cnb-wood-dark mt-0.5">{{ $totalProducts }}</p>
                    <span class="text-[11px] text-cnb-gold font-semibold">Item Makanan</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Quick Action Buttons --}}
    <div class="bg-white p-6 sm:p-8 rounded-2xl shadow-sm border border-cnb-gray/20 space-y-5">
        <h2 class="font-serif text-xl font-bold text-cnb-wood-dark">Pintasan Cepat</h2>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <a href="{{ route('admin.category.index') }}"
               class="group p-5 rounded-xl bg-cnb-cream hover:bg-cnb-gold border border-cnb-gray/20 hover:border-cnb-gold transition-all text-left flex items-center gap-4">
                <div class="w-10 h-10 rounded-lg bg-cnb-gold/20 group-hover:bg-cnb-wood-dark/20 flex items-center justify-center shrink-0 transition">
                    <svg class="w-5 h-5 text-cnb-wood-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-serif font-bold text-base text-cnb-wood-dark">Kelola Kategori</h3>
                    <p class="text-xs text-cnb-gray group-hover:text-cnb-wood-dark transition">Tambah atau ubah jenis kategori</p>
                </div>
            </a>

            <a href="{{ route('admin.menu.index') }}"
               class="group p-5 rounded-xl bg-cnb-cream hover:bg-cnb-gold border border-cnb-gray/20 hover:border-cnb-gold transition-all text-left flex items-center gap-4">
                <div class="w-10 h-10 rounded-lg bg-cnb-gold/20 group-hover:bg-cnb-wood-dark/20 flex items-center justify-center shrink-0 transition">
                    <svg class="w-5 h-5 text-cnb-wood-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-serif font-bold text-base text-cnb-wood-dark">Kelola Paket Menu</h3>
                    <p class="text-xs text-cnb-gray group-hover:text-cnb-wood-dark transition">Atur harga per pax & foto</p>
                </div>
            </a>

            <a href="{{ route('admin.product.index') }}"
               class="group p-5 rounded-xl bg-cnb-cream hover:bg-cnb-gold border border-cnb-gray/20 hover:border-cnb-gold transition-all text-left flex items-center gap-4">
                <div class="w-10 h-10 rounded-lg bg-cnb-gold/20 group-hover:bg-cnb-wood-dark/20 flex items-center justify-center shrink-0 transition">
                    <svg class="w-5 h-5 text-cnb-wood-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-serif font-bold text-base text-cnb-wood-dark">Kelola Lauk / Isian</h3>
                    <p class="text-xs text-cnb-gray group-hover:text-cnb-wood-dark transition">Atur lauk pendamping menu</p>
                </div>
            </a>
        </div>
    </div>

    {{-- Tips Guidance Box --}}
    <div class="bg-cnb-gold/10 border border-cnb-gold/30 rounded-2xl p-6 flex items-start gap-4">
        <div class="w-10 h-10 rounded-lg bg-cnb-gold/30 flex items-center justify-center shrink-0 mt-0.5">
            <svg class="w-5 h-5 text-cnb-wood-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
        </div>
        <div class="text-sm space-y-1 text-cnb-wood-dark">
            <h4 class="font-bold text-base">Petunjuk Praktis Penggunaan:</h4>
            <p class="leading-relaxed text-cnb-gray">
                1. Jika ada menu yang sedang habis atau libur produksi, Ibu cukup menekan tombol sakelar <strong class="text-cnb-wood-dark">ON / OFF</strong> di halaman kelola paket untuk menyembunyikannya dari pembeli di website.<br>
                2. Untuk mengubah harga per pax atau porsi minimal, buka menu <strong class="text-cnb-wood-dark">Kelola Paket Menu</strong> lalu klik tombol <strong class="text-cnb-wood-dark">Ubah</strong>.
            </p>
        </div>
    </div>

</div>
@endsection