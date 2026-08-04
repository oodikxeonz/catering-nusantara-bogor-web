@extends('layouts.app')

@section('title', 'Daftar Menu & Paket - Catering Nusantara Bogor')

@section('content')

{{-- ============================================ --}}
{{-- 1. HERO HEADER SECTION (GELAP) --}}
{{-- ============================================ --}}
<section class="relative py-20 md:py-28 bg-cnb-black overflow-hidden border-b border-white/10">
    {{-- Background Image dengan Overlay --}}
    <div class="absolute inset-0 z-0">
        <img src="https://placehold.co/1600x600/1A1A1A/C9A227?text=Menu+Catering+Nusantara"
             class="w-full h-full object-cover opacity-25 scale-105 transition-transform duration-1000" alt="Menu Background">
        <div class="absolute inset-0 bg-gradient-to-b from-cnb-black/90 via-cnb-black/80 to-cnb-black"></div>
    </div>

    {{-- Line Garis Dekorasi Emas --}}
    <div class="absolute top-12 left-0 w-32 h-[2px] bg-gradient-to-r from-cnb-gold to-transparent"></div>

    <div class="container mx-auto px-6 relative z-10 text-center max-w-4xl">
        <span class="inline-block px-4 py-1.5 rounded-full bg-cnb-gold/10 border border-cnb-gold/30 text-cnb-gold text-xs md:text-sm font-semibold tracking-widest uppercase mb-4 shadow-sm">
            Cita Rasa Autentik
        </span>
        <h1 class="font-serif text-4xl md:text-6xl text-white font-bold mb-6 leading-tight">
            Pilihan Paket <span class="text-cnb-gold">Menu Spesial</span>
        </h1>
        <p class="text-white/70 font-poppins text-base md:text-lg max-w-2xl mx-auto font-light leading-relaxed">
            Nikmati hidangan khas Nusantara berkualitas tinggi untuk melengkapi setiap momen berharga Anda di wilayah Bogor dan sekitarnya.
        </p>
    </div>
</section>


{{-- ============================================ --}}
{{-- 2. SECTION TAMBAHAN: KEUNGGULAN KAMI (KREM/TERANG) --}}
{{-- ============================================ --}}



{{-- ============================================ --}}
{{-- 3. DAFTAR KATEGORI / TIPE PAKET MENU (PUTIH) --}}
{{-- ============================================ --}}
<section class="py-24 bg-white relative">
    <div class="max-w-6xl mx-auto px-6">
        
        <div class="text-center mb-16 max-w-2xl mx-auto">
            <span class="text-cnb-gold font-poppins text-xs md:text-sm tracking-[0.3em] uppercase font-semibold">PILIHAN TERBAIK</span>
            <h2 class="font-serif text-3xl md:text-4xl text-cnb-black font-bold mt-2 mb-3">
                Kategori <span class="text-cnb-gold">Paket Menu</span>
            </h2>
            <div class="w-16 h-[2px] bg-cnb-gold mx-auto mb-4"></div>
            <p class="text-cnb-gray text-base leading-relaxed">
                Pilih tingkatan paket sesuai dengan skala dan konsep acara Anda. Klik paket untuk melihat detail varian menu.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 sm:gap-10">
            @forelse($categories as $category)
                <a href="{{ route('menu.show', $category->slug) }}" 
                   class="group block relative overflow-hidden rounded-3xl bg-white border border-cnb-gold/20 shadow-xl hover:shadow-2xl hover:border-cnb-gold/50 transition-all duration-500 ease-out hover:-translate-y-2">
                    
                    {{-- Image Container --}}
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://placehold.co/600x450/1A1A1A/C9A227?text={{ urlencode($category->name) }}"
                             alt="{{ $category->name }}"
                             class="w-full h-full object-cover group-hover:scale-110 transition duration-700 ease-out">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                        
                        {{-- Badge Jumlah Varian Paket --}}
                        <div class="absolute top-4 right-4 bg-cnb-black/80 backdrop-blur-md border border-cnb-gold/40 px-3.5 py-1.5 rounded-full text-xs text-cnb-gold font-semibold shadow-md">
                            {{ $category->packages->count() ?? 6 }} Varian Tersedia
                        </div>
                    </div>

                    {{-- Body Content --}}
                    <div class="p-7 space-y-3 bg-gradient-to-b from-white to-cnb-cream/20">
                        <h3 class="font-serif font-bold text-2xl text-cnb-black group-hover:text-cnb-gold transition duration-300">
                            {{ $category->name }}
                        </h3>
                        <p class="text-sm text-cnb-gray line-clamp-2 leading-relaxed">
                            {{ $category->description ?? 'Pilihan paket istimewa dengan kombinasi lauk pauk lezat khas Nusantara untuk melengkapi acara Anda.' }}
                        </p>
                        
                        <div class="pt-4 flex items-center justify-between border-t border-cnb-gold/15 text-sm font-semibold text-cnb-black group-hover:text-cnb-gold transition duration-300">
                            <span>Lihat Varian Paket</span>
                            <span class="group-hover:translate-x-2 transition duration-300">&rarr;</span>
                        </div>
                    </div>
                </a>
            @empty
                {{-- Dummy Data Tampilan Awal (Paket Ekonomis, Standar, Premium) --}}
                @php
                    $dummyPackages = [
                        [
                            'title' => 'Paket Ekonomis',
                            'desc' => 'Pilihan hemat bernutrisi dan lezat, sangat cocok untuk acara harian, konsumsi panitia, atau seminar.',
                            'badge' => '6 Varian Menu',
                            'slug' => 'paket-ekonomis'
                        ],
                        [
                            'title' => 'Paket Standar',
                            'desc' => 'Menu lengkap dengan porsi memuaskan untuk acara syukuran, rapat kantor, dan gathering.',
                            'badge' => '6 Varian Menu',
                            'slug' => 'paket-standar'
                        ],
                        [
                            'title' => 'Paket Premium',
                            'desc' => 'Sajian megah kelas VIP dengan pilihan lauk utama istimewa untuk pernikahan dan tamu kehormatan.',
                            'badge' => '6 Varian Menu',
                            'slug' => 'paket-premium'
                        ],
                    ];
                @endphp

                @foreach($dummyPackages as $item)
                    <a href="{{ route('menu.show', $item['slug']) }}" 
                       class="group block relative overflow-hidden rounded-3xl bg-white border border-cnb-gold/20 shadow-xl hover:shadow-2xl hover:border-cnb-gold/50 transition-all duration-500 ease-out hover:-translate-y-2">
                        
                        {{-- Image Container --}}
                        <div class="relative h-64 overflow-hidden">
                            <img src="https://placehold.co/600x450/1A1A1A/C9A227?text={{ urlencode($item['title']) }}" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition duration-700 ease-out"
                                 alt="{{ $item['title'] }}">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                            
                            {{-- Badge --}}
                            <div class="absolute top-4 right-4 bg-cnb-black/80 backdrop-blur-md border border-cnb-gold/40 px-3.5 py-1.5 rounded-full text-xs text-cnb-gold font-semibold shadow-md">
                                {{ $item['badge'] }}
                            </div>
                        </div>

                        {{-- Body Content --}}
                        <div class="p-7 space-y-3 bg-gradient-to-b from-white to-cnb-cream/20">
                            <h3 class="font-serif font-bold text-2xl text-cnb-black group-hover:text-cnb-gold transition duration-300">
                                {{ $item['title'] }}
                            </h3>
                            <p class="text-sm text-cnb-gray leading-relaxed">
                                {{ $item['desc'] }}
                            </p>
                            
                            <div class="pt-4 flex items-center justify-between border-t border-cnb-gold/15 text-sm font-semibold text-cnb-black group-hover:text-cnb-gold transition duration-300">
                                <span>Lihat Varian Paket</span>
                                <span class="group-hover:translate-x-2 transition duration-300">&rarr;</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            @endforelse
        </div>

    </div>
</section>


{{-- ============================================ --}}
{{-- 4. SECTION BRANDING: CATERING NUSANTARA BOGOR (KREM) --}}
{{-- ============================================ --}}


@endsection