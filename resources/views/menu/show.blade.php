@extends('layouts.app')

@section('title', ($category->name ?? 'Menu') . ' - Catering Nusantara Bogor')

@section('content')

    {{-- HERO --}}
    <section class="relative min-h-[60vh] flex items-center overflow-hidden bg-cnb-wood-dark">
        <div class="absolute inset-0">
            <img src="{{ isset($category) && $category->image ? asset('storage/' . $category->image) : 'https://placehold.co/1600x600/3E2A1E/C9A227?text=' . urlencode($category->name ?? 'Menu') }}"
                 class="w-full h-full object-cover opacity-35 scale-105 transition-transform duration-1000 ease-out hover:scale-100"
                 alt="{{ $category->name ?? 'Menu' }}">
            <div class="absolute inset-0 bg-gradient-to-r from-cnb-wood-dark/95 via-cnb-wood-dark/80 to-cnb-wood-dark/60"></div>
        </div>

        <div class="absolute top-20 left-0 w-32 h-[2px] bg-gradient-to-r from-cnb-gold to-transparent"></div>

        <div class="absolute top-8 right-8 bg-cnb-gold/10 backdrop-blur-md border border-cnb-gold/30 px-5 py-2 rounded-full hidden sm:flex items-center gap-2 shadow-lg">
            <svg class="w-3 h-3 text-cnb-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
            <span class="text-cnb-gold text-xs font-sans tracking-widest font-semibold">KATEGORI MENU</span>
        </div>

        <div class="container mx-auto px-6 relative z-10 py-20">
            <div class="max-w-4xl">
                <a href="{{ route('menu.index') }}" class="inline-flex items-center gap-2 text-cnb-gold hover:text-cnb-gold-light text-xs font-sans font-semibold tracking-wider uppercase mb-4 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
                    <span>Kembali ke Kategori Menu</span>
                </a>

                <h1 class="font-serif text-4xl sm:text-6xl lg:text-7xl font-bold text-white leading-tight mb-6 tracking-wide">
                    {{ $category->name ?? 'Varian Menu' }}
                    <span class="text-cnb-gold block mt-2">Pilihan Nusantara</span>
                </h1>

                <p class="text-white/80 font-sans text-base md:text-xl max-w-2xl mb-8 leading-relaxed font-light">
                    {{ $category->description ?? 'Berbagai varian hidangan segar, higienis, dan diolah dengan bumbu rempah autentik.' }}
                </p>
            </div>
        </div>
    </section>

    {{-- DAFTAR VARIAN MENU --}}
    <section class="py-24 bg-cnb-cream relative" x-data="menuDetailModal()">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-cnb-gold font-sans text-xs md:text-sm tracking-[0.3em] uppercase font-semibold">VARIAN HAKIKI</span>
                <h2 class="font-serif text-3xl md:text-4xl text-cnb-wood-dark mt-3 mb-4 font-bold">
                    Pilihan Paket <span class="text-cnb-gold">{{ $category->name ?? 'Menu' }}</span>
                </h2>
                <div class="w-16 h-[2px] bg-cnb-gold mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                @forelse($packages as $package)
                    <div class="group relative overflow-hidden rounded-3xl bg-white border border-cnb-wood-dark/10 shadow-lg hover:shadow-2xl hover:border-cnb-gold/50 transition-all duration-500 hover:-translate-y-3 flex flex-col justify-between">
                        <div>
                            <div class="relative h-60 overflow-hidden">
                                <img src="{{ $package->image ? asset('storage/' . $package->image) : 'https://placehold.co/500x400/5C4030/F3EAD9?text=' . urlencode($package->name) }}"
                                     alt="{{ $package->name }}"
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-cnb-wood-dark/70 via-transparent to-transparent"></div>
                                @if($package->is_best_seller)
                                    <div class="absolute top-4 left-4 bg-cnb-gold text-cnb-wood-dark text-xs font-sans font-bold px-3 py-1.5 rounded-full shadow-md flex items-center gap-1.5">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        Best Seller
                                    </div>
                                @endif
                                @if($package->is_customizable ?? false)
                                    <div class="absolute top-4 right-4 bg-cnb-gold text-cnb-wood-dark text-xs font-sans font-bold px-3 py-1.5 rounded-full shadow-md">
                                        Bisa Custom
                                    </div>
                                @endif
                            </div>

                            <div class="p-7">
                                <div class="flex items-start justify-between gap-3 mb-3">
                                    <h3 class="font-serif font-bold text-xl text-cnb-wood-dark group-hover:text-cnb-gold transition-colors duration-300">{{ $package->name }}</h3>
                                    <div class="text-right shrink-0">
                                        <span class="font-serif font-bold text-cnb-gold text-xl">
                                            Rp{{ number_format($package->price_per_pax, 0, ',', '.') }}
                                        </span>
                                        <span class="text-xs font-sans text-cnb-gray block">/pax</span>
                                    </div>
                                </div>

                                <p class="text-sm text-cnb-gray font-sans leading-relaxed mb-4 line-clamp-2">
                                    @if($package->description)
                                        {{ $package->description }}
                                    @else
                                        @forelse($package->products as $product)
                                            {{ $product->name }}{{ !$loop->last ? ' · ' : '' }}
                                        @empty
                                            Deskripsi lauk pauk dan isian menu dapat disesuaikan.
                                        @endforelse
                                    @endif
                                </p>

                                <div class="text-xs text-cnb-gray font-medium flex items-center gap-1.5">
                                    <svg class="w-3.5 h-3.5 text-cnb-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    <span>Minimal Order {{ $package->min_order }} pax</span>
                                </div>
                            </div>
                        </div>

                        <div class="p-7 pt-0">
                            <button
                                @click="openDetail({
                                    name: '{{ addslashes($package->name) }}',
                                    category: '{{ addslashes($category->name ?? 'Menu Catering') }}',
                                    price: {{ $package->price_per_pax }},
                                    minOrder: {{ $package->min_order }},
                                    description: '{{ addslashes($package->description ?? '') }}',
                                    image: '{{ $package->image ? asset('storage/' . $package->image) : 'https://placehold.co/500x400/5C4030/F3EAD9?text=' . urlencode($package->name) }}',
                                    products: '{{ addslashes($package->products->pluck('name')->implode(' · ')) }}',
                                    isBestSeller: {{ $package->is_best_seller ? 'true' : 'false' }},
                                })"
                                class="group/btn w-full inline-flex items-center justify-center gap-2 px-6 py-3.5 bg-cnb-wood-dark text-cnb-gold border border-cnb-gold/30 font-sans font-semibold rounded-full transition-all duration-300 hover:bg-cnb-gold hover:text-cnb-wood-dark hover:border-cnb-gold hover:shadow-[0_10px_25px_rgba(201,162,39,0.35)] hover:-translate-y-0.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                <span>Lihat Detail</span>
                                <svg class="w-4 h-4 transition-transform duration-300 group-hover/btn:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                            </button>
                        </div>
                    </div>
                @empty
                    @php
                        $dummyVariants = [
                            ['name' => 'Nasi Pasundan Empal', 'price' => 30000, 'items' => 'Nasi Putih · Empal Daging · Sambal · Lalapan · Kerupuk', 'min' => 20, 'desc' => 'Sajian nasi box khas Sunda dengan empal daging empuk dan bumbu rempah pilihan.'],
                            ['name' => 'Ayam Serundeng', 'price' => 28000, 'items' => 'Nasi Putih · Ayam Suwir Serundeng · Sayur Asem · Sambal', 'min' => 20, 'desc' => 'Ayam suwir gurih berbalut serundeng kelapa khas Nusantara.'],
                            ['name' => 'Ayam Bakar Nusantara', 'price' => 30000, 'items' => 'Nasi Putih · Ayam Bakar Bumbu Rempah · Lalapan · Sambal', 'min' => 20, 'desc' => 'Ayam bakar bumbu rempah pilihan dengan aroma khas panggangan.'],
                        ];
                    @endphp

                    @foreach($dummyVariants as $item)
                        <div class="group relative overflow-hidden rounded-3xl bg-white border border-cnb-wood-dark/10 shadow-lg hover:shadow-2xl hover:border-cnb-gold/50 transition-all duration-500 hover:-translate-y-3 flex flex-col justify-between">
                            <div>
                                <div class="relative h-60 overflow-hidden">
                                    <img src="https://placehold.co/500x400/5C4030/F3EAD9?text={{ urlencode($item['name']) }}"
                                         alt="{{ $item['name'] }}"
                                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                    <div class="absolute inset-0 bg-gradient-to-t from-cnb-wood-dark/70 via-transparent to-transparent"></div>
                                </div>

                                <div class="p-7">
                                    <div class="flex items-start justify-between gap-3 mb-3">
                                        <h3 class="font-serif font-bold text-xl text-cnb-wood-dark group-hover:text-cnb-gold transition-colors duration-300">{{ $item['name'] }}</h3>
                                        <div class="text-right shrink-0">
                                            <span class="font-serif font-bold text-cnb-gold text-xl">
                                                Rp{{ number_format($item['price'], 0, ',', '.') }}
                                            </span>
                                            <span class="text-xs font-sans text-cnb-gray block">/pax</span>
                                        </div>
                                    </div>
                                    <p class="text-sm text-cnb-gray font-sans leading-relaxed mb-4 line-clamp-2">{{ $item['desc'] }}</p>
                                    <div class="text-xs text-cnb-gray font-medium flex items-center gap-1.5">
                                        <svg class="w-3.5 h-3.5 text-cnb-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                        <span>Minimal Order {{ $item['min'] }} pax</span>
                                    </div>
                                </div>
                            </div>

                            <div class="p-7 pt-0">
                                <button
                                    @click="openDetail({
                                        name: '{{ addslashes($item['name']) }}',
                                        category: '{{ $category->name ?? 'Menu Catering' }}',
                                        price: {{ $item['price'] }},
                                        minOrder: {{ $item['min'] }},
                                        description: '{{ addslashes($item['desc']) }}',
                                        image: 'https://placehold.co/500x400/5C4030/F3EAD9?text={{ urlencode($item['name']) }}',
                                        products: '{{ addslashes($item['items']) }}',
                                        isBestSeller: false,
                                    })"
                                    class="group/btn w-full inline-flex items-center justify-center gap-2 px-6 py-3.5 bg-cnb-wood-dark text-cnb-gold border border-cnb-gold/30 font-sans font-semibold rounded-full transition-all duration-300 hover:bg-cnb-gold hover:text-cnb-wood-dark hover:border-cnb-gold hover:shadow-[0_10px_25px_rgba(201,162,39,0.35)] hover:-translate-y-0.5">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                    <span>Lihat Detail</span>
                                    <svg class="w-4 h-4 transition-transform duration-300 group-hover/btn:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                                </button>
                            </div>
                        </div>
                    @endforeach
                @endforelse
            </div>
        </div>

        {{-- MODAL DETAIL MENU --}}
        <div x-show="isOpen"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-50 bg-cnb-wood-dark/75 backdrop-blur-sm flex items-center justify-center p-4"
             style="display: none;"
             @keydown.escape.window="isOpen = false">

            <div @click.outside="isOpen = false"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-95 translate-y-4"
                 x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                 x-transition:leave-end="opacity-0 scale-95 translate-y-4"
                 class="bg-white rounded-3xl shadow-2xl max-w-xl w-full max-h-[92vh] overflow-y-auto">

                {{-- Header Foto --}}
                <div class="relative h-64 rounded-t-3xl overflow-hidden">
                    <img :src="selected.image" :alt="selected.name" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-cnb-wood-dark/80 via-cnb-wood-dark/20 to-transparent"></div>

                    {{-- Badge Best Seller di Modal --}}
                    <div x-show="selected.isBestSeller" class="absolute top-4 left-4 bg-cnb-gold text-cnb-wood-dark text-xs font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 shadow-md">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        Best Seller
                    </div>

                    {{-- Tombol Tutup --}}
                    <button @click="isOpen = false" class="absolute top-4 right-4 w-9 h-9 rounded-full bg-black/40 hover:bg-black/60 text-white flex items-center justify-center transition backdrop-blur-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>

                    {{-- Nama & Harga di atas foto --}}
                    <div class="absolute bottom-4 left-5 right-5">
                        <span class="text-cnb-gold/80 text-xs font-semibold tracking-wider uppercase" x-text="selected.category"></span>
                        <h3 class="font-serif font-bold text-2xl text-white leading-tight" x-text="selected.name"></h3>
                    </div>
                </div>

                {{-- Body Konten --}}
                <div class="p-6 space-y-5">

                    {{-- Harga & Min Order --}}
                    <div class="flex items-center justify-between bg-cnb-cream rounded-2xl px-5 py-4">
                        <div>
                            <p class="text-xs text-cnb-gray font-semibold">Harga per Pax</p>
                            <p class="font-serif font-bold text-2xl text-cnb-gold" x-text="'Rp ' + formatRupiah(selected.price)"></p>
                        </div>
                        <div class="text-right">
                            <p class="text-xs text-cnb-gray font-semibold">Minimal Order</p>
                            <p class="font-serif font-bold text-xl text-cnb-wood-dark" x-text="selected.minOrder + ' pax'"></p>
                        </div>
                    </div>

                    {{-- Deskripsi --}}
                    <div x-show="selected.description">
                        <h4 class="text-sm font-bold text-cnb-wood-dark mb-2 flex items-center gap-2">
                            <svg class="w-4 h-4 text-cnb-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                            Deskripsi
                        </h4>
                        <p class="text-sm text-cnb-gray font-sans leading-relaxed" x-text="selected.description"></p>
                    </div>

                    {{-- Daftar Lauk --}}
                    <div x-show="selected.products">
                        <h4 class="text-sm font-bold text-cnb-wood-dark mb-2 flex items-center gap-2">
                            <svg class="w-4 h-4 text-cnb-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                            Isi / Lauk Pauk
                        </h4>
                        <div class="flex flex-wrap gap-2">
                            <template x-for="(lauk, i) in selected.products.split(' · ')" :key="i">
                                <span class="bg-cnb-cream border border-cnb-gold/20 text-cnb-wood-dark text-xs font-semibold px-3 py-1.5 rounded-full" x-text="lauk"></span>
                            </template>
                        </div>
                    </div>

                    {{-- Porsi Input + Tombol Pesan --}}
                    <div class="border-t border-cnb-gold/15 pt-4 space-y-3">
                        <div>
                            <label class="text-xs font-bold text-cnb-wood-dark block mb-2">Jumlah Porsi (Pax)</label>
                            <div class="flex items-center gap-3">
                                <button @click="if(qty > selected.minOrder) qty -= 5" class="w-10 h-10 rounded-xl bg-cnb-wood-dark text-white font-bold flex items-center justify-center hover:bg-cnb-gold hover:text-cnb-wood-dark transition text-lg">-</button>
                                <input type="number" x-model.number="qty" :min="selected.minOrder" class="flex-1 text-center border border-cnb-gold/30 rounded-xl py-2.5 text-base font-bold text-cnb-wood-dark outline-none focus:border-cnb-gold">
                                <button @click="qty += 5" class="w-10 h-10 rounded-xl bg-cnb-wood-dark text-white font-bold flex items-center justify-center hover:bg-cnb-gold hover:text-cnb-wood-dark transition text-lg">+</button>
                            </div>
                            <p x-show="qty < selected.minOrder" class="text-amber-700 text-xs mt-1.5 font-semibold">
                                Minimal order <span x-text="selected.minOrder"></span> pax
                            </p>
                        </div>

                        <div class="bg-cnb-cream rounded-xl px-4 py-3 flex items-center justify-between">
                            <span class="text-xs text-cnb-gray font-semibold">Estimasi Harga:</span>
                            <span class="font-serif font-bold text-lg text-cnb-gold" x-text="'Rp ' + formatRupiah(qty * selected.price)"></span>
                        </div>

                        <button
                            @click="addToCart()"
                            :disabled="qty < selected.minOrder"
                            class="w-full inline-flex items-center justify-center gap-2.5 px-6 py-4 bg-cnb-gold text-cnb-wood-dark font-sans font-bold rounded-full transition-all duration-300 hover:bg-cnb-gold-light hover:shadow-[0_10px_25px_rgba(201,162,39,0.4)] hover:-translate-y-0.5 disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:translate-y-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 100 4 2 2 0 000-4z"/></svg>
                            <span>Tambah ke Keranjang</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function menuDetailModal() {
                return {
                    isOpen: false,
                    qty: 30,
                    selected: {},

                    openDetail(data) {
                        this.selected = data;
                        this.qty = data.minOrder || 30;
                        this.isOpen = true;
                    },

                    addToCart() {
                        if (this.qty < this.selected.minOrder) return;
                        window.dispatchEvent(new CustomEvent('add-to-cart', {
                            detail: {
                                name: this.selected.name,
                                category: this.selected.category,
                                price: this.selected.price,
                                minOrder: this.selected.minOrder,
                                qty: this.qty,
                            }
                        }));
                        this.isOpen = false;
                    },

                    formatRupiah(num) {
                        return new Intl.NumberFormat('id-ID').format(num || 0);
                    }
                }
            }
        </script>
    </section>

    {{-- CTA --}}
    <section class="relative py-24 bg-cnb-wood-dark overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="font-serif text-3xl md:text-5xl text-white font-bold mb-4 leading-tight">Punya Permintaan Menu <span class="text-cnb-gold">Khusus?</span></h2>
                <p class="text-white/70 font-sans text-base md:text-lg max-w-2xl mx-auto mb-10 font-light leading-relaxed">Kami fleksibel untuk menyesuaikan varian menu dan budget acara Anda. Hubungi kami untuk konsultasi.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="https://wa.me/628561155113" target="_blank"
                        class="inline-flex items-center gap-3 px-10 py-5 bg-cnb-gold text-cnb-wood-dark font-sans font-semibold rounded-full transition-all duration-300 hover:bg-cnb-gold-light hover:shadow-[0_10px_40px_rgba(201,162,39,0.4)] hover:-translate-y-1">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" /></svg>
                        <span>Konsultasi via WhatsApp</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
