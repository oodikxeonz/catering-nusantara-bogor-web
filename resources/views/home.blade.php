@extends('layouts.app')

@section('title', 'Catering Nusantara Bogor - Nasi Box, Tumpeng & Snack Box')

@section('content')

    {{-- ============================================ --}}
    {{-- Motif & animasi khas — dipakai berulang agar identitas visual konsisten --}}
    {{-- ============================================ --}}
    <style>
        /* Motif kawung (batik) sebagai tekstur latar di section gelap */
        .cnb-batik-texture {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='84' height='84'%3E%3Cg fill='none' stroke='%23C9A227' stroke-width='1' opacity='0.5'%3E%3Ccircle cx='21' cy='21' r='14'/%3E%3Ccircle cx='63' cy='21' r='14'/%3E%3Ccircle cx='21' cy='63' r='14'/%3E%3Ccircle cx='63' cy='63' r='14'/%3E%3Ccircle cx='42' cy='42' r='14'/%3E%3C/g%3E%3C/svg%3E");
            background-size: 84px 84px;
        }

        @keyframes cnb-fade-up {
            from {
                opacity: 0;
                transform: translateY(18px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .cnb-animate-in>* {
            animation: cnb-fade-up 0.8s cubic-bezier(0.22, 1, 0.36, 1) both;
        }

        .cnb-animate-in>*:nth-child(1) {
            animation-delay: 0.05s;
        }

        .cnb-animate-in>*:nth-child(2) {
            animation-delay: 0.15s;
        }

        .cnb-animate-in>*:nth-child(3) {
            animation-delay: 0.25s;
        }

        .cnb-animate-in>*:nth-child(4) {
            animation-delay: 0.35s;
        }

        .cnb-animate-in>*:nth-child(5) {
            animation-delay: 0.45s;
        }

        @media (prefers-reduced-motion: reduce) {
            .cnb-animate-in>* {
                animation: none;
            }
        }
    </style>

    {{-- ============================================ --}}
    {{-- 1. HERO SECTION --}}
    {{-- ============================================ --}}
    <section class="relative min-h-[92vh] sm:min-h-screen flex items-center overflow-hidden bg-cnb-black">
        {{-- Jalinan bilah emas di tepi atas, kesan anyaman kain tradisional --}}
        <div class="absolute top-0 left-0 right-0 h-2 bg-gradient-to-r from-cnb-gold via-cnb-gold-light to-cnb-gold z-20">
        </div>

        {{-- Background Image dengan Overlay --}}
        <div class="absolute inset-0">
            <img src="https://placehold.co/1600x900/1A1A1A/C9A227?text=Foto+Hero+Catering"
                class="w-full h-full object-cover opacity-40 scale-105 transition-transform duration-[3000ms] ease-out hover:scale-100"
                alt="Hidangan Catering Nusantara Bogor">
            <div class="absolute inset-0 bg-gradient-to-r from-cnb-black/95 via-cnb-black/80 to-cnb-black/55"></div>
            <div class="absolute inset-0 cnb-batik-texture opacity-[0.06]"></div>
        </div>

        {{-- Line Garis Dekorasi Emas --}}
        <div class="absolute top-24 left-0 w-24 sm:w-32 h-[2px] bg-gradient-to-r from-cnb-gold to-transparent"></div>

        {{-- Badge Melayang --}}
        <div
            class="absolute top-8 right-6 sm:right-8 bg-cnb-gold/10 backdrop-blur-md border border-cnb-gold/30 px-4 sm:px-5 py-2 rounded-full hidden sm:block shadow-lg">
            <span class="text-cnb-gold text-xs font-sans tracking-widest font-semibold">✦ PREMIUM CATERING</span>
        </div>

        <div class="container mx-auto px-6 relative z-10 py-24 sm:py-28">
            <div class="max-w-4xl cnb-animate-in">
                {{-- Tagline / Sub-title --}}
                <div class="flex flex-wrap items-center gap-4 mb-6">
                    <span
                        class="text-cnb-gold font-sans text-xs md:text-sm tracking-[0.3em] uppercase font-semibold">Catering
                        Khas Nusantara · Bogor</span>
                    <span class="w-16 h-[1px] bg-cnb-gold hidden sm:block"></span>
                </div>

                {{-- Judul Utama --}}
                <h1
                    class="font-serif text-[clamp(2.25rem,5vw+1rem,4.75rem)] font-bold text-white leading-[1.1] mb-6 tracking-wide">
                    Kehangatan Rasa Nusantara
                    <span class="text-cnb-gold block mt-2">di Setiap Momen Spesial Anda</span>
                </h1>

                {{-- Deskripsi --}}
                <p class="text-white/80 font-sans text-base md:text-xl max-w-2xl mb-10 leading-relaxed font-light">
                    Nasi Box, Tumpeng, dan Snack Box dengan cita rasa autentik — dikemas rapi untuk acara kantor, keluarga,
                    hingga hajatan.
                </p>

                {{-- Tombol Aksi --}}
                <div class="flex flex-col sm:flex-row flex-wrap gap-4 mb-14 sm:mb-16">
                    <a href="{{ route('menu.index') }}"
                        class="group inline-flex items-center justify-center gap-3 px-8 py-4 bg-cnb-gold text-cnb-black font-sans font-semibold rounded-full transition-all duration-300 ease-out hover:bg-cnb-gold-light hover:shadow-[0_10px_30px_rgba(201,162,39,0.4)] hover:-translate-y-1">
                        <span>Lihat Menu</span>
                        <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                    <a href="https://wa.me/628561155113" target="_blank"
                        class="inline-flex items-center justify-center gap-3 px-8 py-4 border-2 border-white/30 text-white font-sans font-semibold rounded-full transition-all duration-300 ease-out hover:bg-white/10 hover:border-cnb-gold hover:-translate-y-1 backdrop-blur-sm">
                        <svg class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                        </svg>
                        <span>Chat WhatsApp</span>
                    </a>
                </div>

                {{-- Kartu Statistik --}}
                <div class="grid grid-cols-3 gap-3 sm:gap-6 max-w-3xl">
                    <div
                        class="bg-white/5 backdrop-blur-md border border-white/10 rounded-xl sm:rounded-2xl p-3 sm:p-6 text-center transition-all duration-300 hover:bg-white/10 hover:border-cnb-gold/50 hover:-translate-y-1">
                        <div class="text-lg sm:text-3xl font-serif font-bold text-cnb-gold">2+ Thn</div>
                        <div class="text-white/70 font-sans text-[11px] sm:text-sm mt-1">Pengalaman</div>
                    </div>
                    <div
                        class="bg-white/5 backdrop-blur-md border border-white/10 rounded-xl sm:rounded-2xl p-3 sm:p-6 text-center transition-all duration-300 hover:bg-white/10 hover:border-cnb-gold/50 hover:-translate-y-1">
                        <div class="text-lg sm:text-3xl font-serif font-bold text-cnb-gold">100%</div>
                        <div class="text-white/70 font-sans text-[11px] sm:text-sm mt-1">Halal & Higienis</div>
                    </div>
                    <div
                        class="bg-white/5 backdrop-blur-md border border-white/10 rounded-xl sm:rounded-2xl p-3 sm:p-6 text-center transition-all duration-300 hover:bg-white/10 hover:border-cnb-gold/50 hover:-translate-y-1">
                        <div class="text-lg sm:text-3xl font-serif font-bold text-cnb-gold">Fresh</div>
                        <div class="text-white/70 font-sans text-[11px] sm:text-sm mt-1">Setiap Hari</div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Tepi bergerigi seperti anyaman tikar — transisi ke section berikutnya --}}
        <svg class="absolute -bottom-px left-0 w-full h-10 sm:h-14 text-cnb-cream z-10" viewBox="0 0 1440 60"
            preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor"
                d="M0,32 Q30,4 60,32 T120,32 T180,32 T240,32 T300,32 T360,32 T420,32 T480,32 T540,32 T600,32 T660,32 T720,32 T780,32 T840,32 T900,32 T960,32 T1020,32 T1080,32 T1140,32 T1200,32 T1260,32 T1320,32 T1380,32 T1440,32 L1440,60 L0,60 Z" />
        </svg>
    </section>

    {{-- ============================================ --}}
    {{-- 2. KEUNGGULAN KAMI SECTION --}}
    {{-- ============================================ --}}
    <section class="pt-16 sm:pt-20 pb-20 sm:pb-24 bg-cnb-cream relative">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-14 sm:mb-16">
                <span class="text-cnb-gold font-sans text-xs md:text-sm tracking-[0.3em] uppercase font-semibold">Keunggulan
                    Kami</span>
                <h2 class="font-serif text-3xl md:text-4xl text-cnb-black mt-3 mb-4 font-bold">
                    Kenapa Pilih <span class="text-cnb-gold">Catering Nusantara?</span>
                </h2>
                <div class="w-16 h-[2px] bg-cnb-gold mx-auto"></div>
            </div>

            @php
                $features = [
                    [
                        'title' => 'Berpengalaman 2 Tahun',
                        'desc' => 'Dipercaya untuk berbagai acara di Bogor & sekitarnya.',
                        'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',
                    ],
                    [
                        'title' => 'Bisa Custom Paket',
                        'desc' => 'Sesuaikan menu & isi paket sesuai kebutuhan acara Anda.',
                        'icon' => 'M4 6h16M4 6a2 2 0 100-4 2 2 0 000 4zm0 0v14m8-14a2 2 0 100-4 2 2 0 000 4zm0 0v6m0 4v4m8-8a2 2 0 100-4 2 2 0 000 4zm0 0v10',
                    ],
                    [
                        'title' => 'Fleksibel Waktu Pesan',
                        'desc' => 'Same day hingga H-3 tergantung jumlah pesanan.',
                        'icon' => 'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z',
                    ],
                    [
                        'title' => 'Rasa Autentik Nusantara',
                        'desc' => 'Resep rumahan dengan cita rasa khas yang konsisten.',
                        'icon' => 'M12 3c1.5 2 4 4.5 4 8a4 4 0 01-8 0c0-1.2.4-2 1-3 .2 1 .8 1.5 1.5 1.5-.5-2 .5-4.5 1.5-6.5z',
                    ],
                ];
            @endphp

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-8 max-w-7xl mx-auto">
                @foreach($features as $f)
                    <div
                        class="group p-5 sm:p-8 bg-white rounded-2xl shadow-sm border border-black/5 hover:border-cnb-gold/30 hover:shadow-xl transition-all duration-500 ease-out hover:-translate-y-2 text-center flex flex-col">
                        <div
                            class="w-14 h-14 sm:w-16 sm:h-16 rounded-2xl bg-cnb-gold/10 border border-cnb-gold/30 mx-auto flex items-center justify-center mb-4 sm:mb-6 group-hover:bg-cnb-gold transition-all duration-500">
                            <svg class="w-6 h-6 sm:w-7 sm:h-7 text-cnb-gold group-hover:text-cnb-black transition-colors duration-500"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="{{ $f['icon'] }}" />
                            </svg>
                        </div>
                        <h3 class="font-serif text-base sm:text-xl font-bold text-cnb-black mb-2 sm:mb-3">{{ $f['title'] }}</h3>
                        <p class="text-cnb-gray font-sans text-xs sm:text-sm leading-relaxed">{{ $f['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- 3. KATEGORI FAVORIT SECTION --}}
    {{-- ============================================ --}}
    <section class="py-20 sm:py-24 bg-white relative">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-14 sm:mb-16">
                <span class="text-cnb-gold font-sans text-xs md:text-sm tracking-[0.3em] uppercase font-semibold">Pilihan
                    Menu</span>
                <h2 class="font-serif text-5xl md:text-5xl text-cnb-black mt-3 mb-4 font-bold">
                    Kategori <span class="text-cnb-gold">Favorit</span>
                </h2>
                <div class="w-16 h-[2px] bg-cnb-gold mx-auto"></div>
            </div>


            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 sm:gap-10 max-w-7xl mx-auto">
                @forelse($categories as $category)
                    <div
                        class="group relative flex flex-col justify-between overflow-hidden rounded-3xl bg-white border border-cnb-gold/20 shadow-xl hover:shadow-2xl hover:border-cnb-gold/50 transition-all duration-500 ease-out hover:-translate-y-2">

                        {{-- Bagian Atas: Gambar (Lebih Tinggi/Besar) + Overlay + Badge --}}
                        <div class="relative h-80 sm:h-96 overflow-hidden">
                            {{-- Gambar Kategori --}}
                            <img src="https://placehold.co/600x500/1A1A1A/D4AF37?text={{ urlencode($category->name) }}"
                                alt="{{ $category->name }}"
                                class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">

                            {{-- Gradient Overlay --}}
                            <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/20 to-transparent"></div>

                            {{-- Badge Premium Melayang --}}
                            <div
                                class="absolute top-5 left-5 bg-cnb-black/70 backdrop-blur-md border border-cnb-gold/40 px-3.5 py-1.5 rounded-full shadow-md">
                                <span
                                    class="text-cnb-gold text-xs font-poppins font-medium tracking-wider flex items-center gap-1.5">
                                    <span class="text-[10px]">✦</span> MENU NUSANTARA
                                </span>
                            </div>

                            {{-- Judul Kategori di Atas Gambar --}}
                            <div class="absolute bottom-5 left-6 right-6">
                                <h3
                                    class="font-serif font-bold text-2xl sm:text-3xl text-white tracking-wide group-hover:text-cnb-gold transition-colors duration-300">
                                    {{ $category->name }}
                                </h3>
                            </div>
                        </div>

                        {{-- Bagian Bawah: Deskripsi & Tombol Aksi Compact --}}
                        <div
                            class="p-7 sm:p-9 flex flex-col justify-between flex-grow bg-gradient-to-b from-white to-cnb-cream/20">
                            <p class="text-cnb-gray font-poppins text-sm sm:text-base leading-relaxed mb-6">
                                Cita rasa autentik Nusantara pilihan terbaik yang disajikan khusus untuk melengkapi momen
                                istimewa Anda.
                            </p>

                            {{-- Baris Bawah: Tombol "Lihat Menu" yang Lebih Kecil & Elegan --}}
                            <div class="pt-5 border-t border-cnb-gold/15 flex items-center justify-end">
                                <a href="{{ route('menu.index', ['category' => $category->slug]) }}"
                                    class="inline-flex items-center gap-2 px-4 py-2 bg-cnb-black hover:bg-cnb-gold text-white hover:text-cnb-black font-poppins font-medium text-xs sm:text-sm rounded-full transition-all duration-300 shadow-sm hover:shadow-md group/btn">
                                    <span>Lihat Menu</span>
                                    <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover/btn:translate-x-1"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    @foreach(['Nasi Box', 'Tumpeng', 'Snack Box'] as $dummy)
                        <div
                            class="group relative flex flex-col justify-between overflow-hidden rounded-3xl bg-white border border-cnb-gold/20 shadow-xl hover:shadow-2xl hover:border-cnb-gold/50 transition-all duration-500 ease-out hover:-translate-y-2">

                            <div class="relative h-80 sm:h-96 overflow-hidden">
                                <img src="https://placehold.co/600x500/1A1A1A/D4AF37?text={{ urlencode($dummy) }}"
                                    alt="{{ $dummy }}"
                                    class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">

                                <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/20 to-transparent"></div>

                                <div
                                    class="absolute top-5 left-5 bg-cnb-black/70 backdrop-blur-md border border-cnb-gold/40 px-3.5 py-1.5 rounded-full shadow-md">
                                    <span
                                        class="text-cnb-gold text-xs font-poppins font-medium tracking-wider flex items-center gap-1.5">
                                        <span class="text-[10px]">✦</span> CATERING NUSANTARA
                                    </span>
                                </div>

                                <div class="absolute bottom-5 left-6 right-6">
                                    <h3
                                        class="font-serif font-bold text-2xl sm:text-3xl text-white tracking-wide group-hover:text-cnb-gold transition-colors duration-300">
                                        {{ $dummy }}
                                    </h3>
                                </div>
                            </div>

                            <div
                                class="p-7 sm:p-9 flex flex-col justify-between flex-grow bg-gradient-to-b from-white to-cnb-cream/20">
                                <p class="text-cnb-gray font-poppins text-sm sm:text-base leading-relaxed mb-6">
                                    Pilihan ragam hidangan higienis dan lezat dengan resep warisan khas Nusantara.
                                </p>

                                <div class="pt-5 border-t border-cnb-gold/15 flex items-center justify-end">
                                    <a href="{{ route('menu.index') }}"
                                        class="inline-flex items-center gap-2 px-4 py-2 bg-cnb-black hover:bg-cnb-gold text-white hover:text-cnb-black font-poppins font-medium text-xs sm:text-sm rounded-full transition-all duration-300 shadow-sm hover:shadow-md group/btn">
                                        <span>Lihat Menu</span>
                                        <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover/btn:translate-x-1"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforelse
            </div>

            <div class="text-center mt-14 sm:mt-16">
                <a href="{{ route('menu.index') }}"
                    class="inline-flex items-center gap-3 px-8 sm:px-10 py-4 border-2 border-cnb-gold text-cnb-gold font-sans font-semibold rounded-full transition-all duration-300 hover:bg-cnb-gold hover:text-cnb-black hover:shadow-[0_10px_30px_rgba(201,162,39,0.3)] hover:-translate-y-1">
                    <span>Lihat Semua Menu</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- 4. ABOUT PREVIEW SECTION --}}
    {{-- ============================================ --}}
    <section class="py-20 sm:py-24 bg-cnb-cream relative overflow-hidden">
        <div class="container mx-auto px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center max-w-7xl mx-auto">
                <div class="relative order-2 lg:order-1">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://placehold.co/600x500/FDFBF7/1A1A1A?text=Foto+Dapur"
                            alt="Foto Dapur Catering Nusantara" class="w-full h-full object-cover">
                        <div
                            class="absolute -bottom-4 -right-4 w-24 h-24 border-2 border-cnb-gold/30 rounded-lg hidden sm:block">
                        </div>
                        <div
                            class="absolute -top-4 -left-4 w-24 h-24 border-2 border-cnb-gold/30 rounded-lg hidden sm:block">
                        </div>
                    </div>
                    <div
                        class="absolute -bottom-5 -right-5 sm:-bottom-6 sm:-right-6 bg-white rounded-2xl shadow-xl p-4 sm:p-6 hidden md:block border border-black/5">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-cnb-gold/10 rounded-xl flex items-center justify-center">
                                <span class="text-cnb-gold font-serif text-xl">✦</span>
                            </div>
                            <div>
                                <div class="font-serif font-bold text-cnb-black text-lg">2+ Tahun</div>
                                <div class="text-cnb-gray text-xs font-sans">Pengalaman Pengolahan</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="order-1 lg:order-2">
                    <span
                        class="text-cnb-gold font-sans text-xs md:text-sm tracking-[0.3em] uppercase font-semibold">Tentang
                        Kami</span>
                    <h2 class="font-serif text-3xl md:text-5xl font-bold text-cnb-black mt-3 mb-6 leading-tight">
                        Dibuat dengan Hati, <br><span class="text-cnb-gold">Disajikan dengan Bangga</span>
                    </h2>
                    <p class="text-cnb-gray font-sans text-base leading-relaxed mb-8">
                        Sejak berdiri, Catering Nusantara Bogor berkomitmen menghadirkan hidangan khas Nusantara dengan cita
                        rasa rumahan yang hangat untuk setiap acara Anda.
                    </p>
                    <a href="{{ route('about') }}"
                        class="inline-flex items-center gap-3 px-8 py-4 bg-cnb-gold text-cnb-black font-sans font-semibold rounded-full transition-all duration-300 hover:bg-cnb-gold-light hover:shadow-[0_10px_30px_rgba(201,162,39,0.3)] hover:-translate-y-1">
                        <span>Selengkapnya Tentang Kami</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- 5. TESTIMONIAL SECTION --}}
    {{-- ============================================ --}}
    <section class="py-20 sm:py-24 bg-cnb-black relative overflow-hidden">
        <div class="absolute inset-0 cnb-batik-texture opacity-[0.05]"></div>
        <div class="container mx-auto px-6 relative">
            <div class="text-center max-w-2xl mx-auto mb-14 sm:mb-16">
                <span class="text-cnb-gold font-sans text-xs md:text-sm tracking-[0.3em] uppercase font-semibold">Kata
                    Mereka</span>
                <h2 class="font-serif text-3xl md:text-4xl text-white mt-3 mb-4 font-bold">
                    Testimoni <span class="text-cnb-gold">Pelanggan</span>
                </h2>
                <div class="w-16 h-[2px] bg-cnb-gold mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8 max-w-7xl mx-auto">
                @forelse($testimonials as $t)
                    <div
                        class="bg-white/5 backdrop-blur-md border border-white/10 rounded-2xl p-6 sm:p-8 hover:bg-white/10 transition-all duration-500 ease-out hover:border-cnb-gold/40 hover:-translate-y-2 flex flex-col justify-between">
                        <div>
                            <div class="text-cnb-gold mb-4 text-lg">★★★★★</div>
                            <p class="text-white/80 font-sans text-sm leading-relaxed mb-6 font-light">"{{ $t->review }}"</p>
                        </div>
                        <div>
                            <div class="font-serif text-white font-semibold text-base">{{ $t->client_name }}</div>
                            <div class="text-white/40 font-sans text-xs mt-1">{{ $t->event_type }}</div>
                        </div>
                    </div>
                @empty
                    @for($i = 0; $i < 3; $i++)
                        <div
                            class="bg-white/5 backdrop-blur-md border border-white/10 rounded-2xl p-6 sm:p-8 hover:bg-white/10 transition-all duration-500 ease-out hover:border-cnb-gold/40 hover:-translate-y-2 flex flex-col justify-between">
                            <div>
                                <div class="text-cnb-gold mb-4 text-lg">★★★★★</div>
                                <p class="text-white/80 font-sans text-sm leading-relaxed mb-6 font-light">"Testimoni pelanggan akan
                                    tampil di sini setelah data tersedia."</p>
                            </div>
                            <div>
                                <div class="font-serif text-white font-semibold text-base">Nama Pelanggan</div>
                                <div class="text-white/40 font-sans text-xs mt-1">Jenis Acara</div>
                            </div>
                        </div>
                    @endfor
                @endforelse
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- 6. CTA SECTION --}}
    {{-- ============================================ --}}
    <section class="relative py-20 sm:py-24 bg-cnb-black overflow-hidden">
        <div class="absolute inset-0 cnb-batik-texture opacity-[0.05]"></div>
        <div class="absolute top-0 left-0 right-0 h-2 bg-gradient-to-r from-cnb-gold via-cnb-gold-light to-cnb-gold"></div>
        <div class="container mx-auto px-6 relative">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="font-serif text-3xl md:text-5xl text-white font-bold mb-4 leading-tight">
                    Siap Memesan untuk <span class="text-cnb-gold">Acara Anda?</span>
                </h2>
                <p class="text-white/70 font-sans text-base md:text-lg max-w-2xl mx-auto mb-10 font-light leading-relaxed">
                    Konsultasikan kebutuhan catering Anda langsung dengan tim kami via WhatsApp.
                </p>

                <div class="flex flex-wrap justify-center gap-4">
                    <a href="https://wa.me/628561155113" target="_blank"
                        class="inline-flex items-center gap-3 px-8 sm:px-10 py-4 sm:py-5 bg-cnb-gold text-cnb-black font-sans font-semibold rounded-full transition-all duration-300 hover:bg-cnb-gold-light hover:shadow-[0_10px_40px_rgba(201,162,39,0.4)] hover:-translate-y-1">
                        <svg class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                        </svg>
                        <span>Hubungi Kami Sekarang</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection