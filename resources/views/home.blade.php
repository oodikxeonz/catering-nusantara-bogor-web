@extends('layouts.app')

@section('title', 'Catering Nusantara Bogor - Nasi Box, Tumpeng & Snack Box')

@section('content')

    {{-- HERO --}}
    <section class="relative min-h-screen flex items-center overflow-hidden bg-cnb-wood-dark">
        <div class="absolute inset-0">
            <img src="{{ asset('images/herocatring.jpg') }}"
                class="w-full h-full object-cover opacity-40 scale-105 transition-transform duration-1000 ease-out hover:scale-100"
                alt="Hero Background">
            <div class="absolute inset-0 bg-linear-to-r from-cnb-wood-dark/95 via-cnb-wood-dark/75 to-cnb-wood-dark/50"></div>
        </div>

        <div class="absolute top-20 left-0 w-32 h-0.5 bg-linear-to-r from-cnb-gold to-transparent"></div>

        <div class="absolute top-8 right-8 bg-cnb-gold/10 backdrop-blur-md border border-cnb-gold/30 px-5 py-2 rounded-full hidden sm:flex items-center gap-2 shadow-lg">
            <svg class="w-3.5 h-3.5 text-cnb-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
            <span class="text-cnb-gold text-xs font-sans tracking-widest font-semibold">PREMIUM CATERING</span>
        </div>

        <div class="container mx-auto px-6 relative z-10 py-24">
            <div class="max-w-4xl">
                <div class="flex items-center gap-4 mb-6">
                    <span class="text-cnb-gold font-sans text-xs md:text-sm tracking-[0.3em] uppercase font-semibold">CATERING KHAS NUSANTARA · BOGOR</span>
                    <span class="w-16 h-px bg-cnb-gold"></span>
                </div>

                <h1 class="font-serif text-4xl sm:text-6xl lg:text-7xl font-bold text-white leading-tight mb-6 tracking-wide">
                    Kehangatan Rasa Nusantara
                    <span class="text-cnb-gold block mt-2">di Setiap Momen Spesial Anda</span>
                </h1>

                <p class="text-white/80 font-sans text-base md:text-xl max-w-2xl mb-10 leading-relaxed font-light">
                    Nasi Box, Tumpeng, dan Snack Box dengan cita rasa autentik — dikemas rapi untuk acara kantor, keluarga, hingga hajatan.
                </p>

                <div class="flex flex-wrap gap-4 mb-16">
                    <a href="{{ route('menu.index') }}"
                        class="group inline-flex items-center gap-3 px-8 py-4 bg-cnb-gold text-cnb-wood-dark font-sans font-semibold rounded-full transition-all duration-300 ease-out hover:bg-cnb-gold-light hover:shadow-[0_10px_30px_rgba(201,162,39,0.4)] hover:-translate-y-1">
                        <span>Lihat Menu</span>
                        <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                    </a>
                    <a href="https://wa.me/628561155113" target="_blank"
                        class="inline-flex items-center gap-3 px-8 py-4 border-2 border-white/30 text-white font-sans font-semibold rounded-full transition-all duration-300 ease-out hover:bg-white/10 hover:border-cnb-gold hover:-translate-y-1 backdrop-blur-sm">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" /></svg>
                        <span>Chat WhatsApp</span>
                    </a>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 max-w-3xl">
                    <div class="bg-white/5 backdrop-blur-md border border-white/10 rounded-2xl p-6 text-center hover:bg-white/10 transition-all duration-300 hover:border-cnb-gold/50 hover:-translate-y-1">
                        <div class="text-3xl font-serif font-bold text-cnb-gold">2+ Thn</div>
                        <div class="text-white/70 font-sans text-sm mt-1">Pengalaman</div>
                    </div>
                    <div class="bg-white/5 backdrop-blur-md border border-white/10 rounded-2xl p-6 text-center hover:bg-white/10 transition-all duration-300 hover:border-cnb-gold/50 hover:-translate-y-1">
                        <div class="text-3xl font-serif font-bold text-cnb-gold">100%</div>
                        <div class="text-white/70 font-sans text-sm mt-1">Halal & Higienis</div>
                    </div>
                    <div class="bg-white/5 backdrop-blur-md border border-white/10 rounded-2xl p-6 text-center hover:bg-white/10 transition-all duration-300 hover:border-cnb-gold/50 hover:-translate-y-1">
                        <div class="text-3xl font-serif font-bold text-cnb-gold">Fresh</div>
                        <div class="text-white/70 font-sans text-sm mt-1">Setiap Hari</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- BEST SELLER --}}
    <section class="py-24 bg-cnb-leaf-dark relative overflow-hidden batik-pattern-diagonal">
    <div class="container mx-auto px-6 relative">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-cnb-gold font-sans text-xs md:text-sm tracking-[0.3em] uppercase font-semibold">PALING DICARI</span>
            <h2 class="font-serif text-3xl md:text-4xl text-white mt-3 mb-4 font-bold">Menu <span class="text-cnb-gold">Best Seller</span></h2>
            <div class="w-16 h-0.5 bg-cnb-gold mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            @forelse($bestSellers as $item)
                <div class="group relative overflow-hidden rounded-2xl bg-white/5 backdrop-blur-md border border-cnb-gold/20 hover:border-cnb-gold/50 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 flex flex-col justify-between">
                    <div>
                        <!-- Badge Best Seller -->
                        <div class="absolute top-4 left-4 z-10 bg-cnb-gold text-cnb-wood-dark text-xs font-sans font-bold px-3 py-1.5 rounded-full shadow-md flex items-center gap-1.5">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                            BEST SELLER
                        </div>

                        <!-- Image Wrapper -->
                        <div class="h-56 overflow-hidden bg-white/5">
                            @if($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}"
                                     alt="{{ $item->name }}"
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            @else
                                <div class="w-full h-full flex items-center justify-center text-white/40 font-sans text-xs">
                                    [ Gambar Tidak Tersedia ]
                                </div>
                            @endif
                        </div>

                        <!-- Item Content -->
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="font-serif text-xl font-bold text-white">{{ $item->name }}</h3>
                                <span class="font-serif font-bold text-cnb-gold text-lg">
                                    Rp{{ number_format($item->price_per_pax, 0, ',', '.') }}<span class="text-xs text-white/70 font-sans">/pax</span>
                                </span>
                            </div>
                            @if($item->description)
                                <p class="text-white/70 font-sans text-sm leading-relaxed mb-2">{{ $item->description }}</p>
                            @endif
                            @if($item->products->count() > 0)
                                <p class="text-white/60 font-sans text-xs leading-relaxed">
                                    {{ $item->products->pluck('name')->implode(' · ') }}
                                </p>
                            @endif
                        </div>
                    </div>

                    <!-- Action Button -->
                    <div class="p-6 pt-0">
                        <a href="{{ route('menu.show', $item->category->slug ?? '#') }}"
                           class="w-full bg-cnb-gold hover:bg-cnb-gold-light text-cnb-wood-dark font-semibold text-sm py-3 rounded-full transition-all shadow flex items-center justify-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m-10 4a1 1 0 100-2 1 1 0 000 2zm10 0a1 1 0 100-2 1 1 0 000 2z" />
                            </svg>
                            <span>Pesan Sekarang</span>
                        </a>
                    </div>
                </div>
            @empty
                {{-- Fallback: tampil dummy jika belum ada best seller dari DB --}}
                @php
                    $dummyBestSellers = [
                        ['name' => 'Nasi Pasundan Empal', 'price' => 30000, 'desc' => 'Nasi hangat dengan empal daging empuk khas Sunda, disajikan bersama sambal dan lalapan segar.', 'image' => asset('images/nasipasundan-empal.jpg')],
                        ['name' => 'Ayam Serundeng', 'price' => 28000, 'desc' => 'Ayam suwir gurih berbalut serundeng kelapa khas Nusantara, cocok untuk segala acara.', 'image' => asset('images/ayam-serundeng.jpg')],
                        ['name' => 'Ayam Bakar', 'price' => 30000, 'desc' => 'Ayam bakar bumbu rempah pilihan dengan aroma khas panggangan, dijamin bikin nagih.', 'image' => asset('images/ayam-bakar.jpg')],
                    ];
                @endphp
                @foreach($dummyBestSellers as $item)
                    <div class="group relative overflow-hidden rounded-2xl bg-white/5 backdrop-blur-md border border-cnb-gold/20 hover:border-cnb-gold/50 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 flex flex-col justify-between">
                        <div>
                            <div class="absolute top-4 left-4 z-10 bg-cnb-gold text-cnb-wood-dark text-xs font-sans font-bold px-3 py-1.5 rounded-full shadow-md flex items-center gap-1.5">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                                BEST SELLER
                            </div>
                            <div class="h-56 overflow-hidden bg-white/5">
                                <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            </div>
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="font-serif text-xl font-bold text-white">{{ $item['name'] }}</h3>
                                    <span class="font-serif font-bold text-cnb-gold text-lg">
                                        Rp{{ number_format($item['price'], 0, ',', '.') }}<span class="text-xs text-white/70 font-sans">/pax</span>
                                    </span>
                                </div>
                                <p class="text-white/70 font-sans text-sm leading-relaxed mb-4">{{ $item['desc'] }}</p>
                            </div>
                        </div>
                        <div class="p-6 pt-0">
                            <a href="{{ route('menu.index') }}"
                               class="w-full bg-cnb-gold hover:bg-cnb-gold-light text-cnb-wood-dark font-semibold text-sm py-3 rounded-full transition-all shadow flex items-center justify-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m-10 4a1 1 0 100-2 1 1 0 000 2zm10 0a1 1 0 100-2 1 1 0 000 2z" />
                                </svg>
                                <span>Lihat di Katalog Menu</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            @endforelse
        </div>

        <div class="text-center mt-16">
            <a href="{{ route('menu.index') }}"
               class="inline-flex items-center gap-3 px-10 py-4 border-2 border-cnb-gold text-cnb-gold font-sans font-semibold rounded-full transition-all duration-300 hover:bg-cnb-gold hover:text-cnb-wood-dark hover:shadow-[0_10px_30px_rgba(201,162,39,0.3)] hover:-translate-y-1">
                <span>Lihat Semua Menu</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </div>
</section>


    {{-- KEUNGGULAN --}}
    <section class="py-24 bg-cnb-cream relative">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-cnb-gold font-sans text-xs md:text-sm tracking-[0.3em] uppercase font-semibold">KEUNGGULAN KAMI</span>
                <h2 class="font-serif text-3xl md:text-4xl text-cnb-wood-dark mt-3 mb-4 font-bold">Kenapa Pilih <span class="text-cnb-gold">Catering Nusantara?</span></h2>
                <div class="w-16 h-0.5 bg-cnb-gold mx-auto"></div>
            </div>

            @php
                $features = [
                    ['title' => 'Berpengalaman 2 Tahun', 'desc' => 'Dipercaya untuk berbagai acara di Bogor & sekitarnya.', 'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'],
                    ['title' => 'Bisa Custom Paket', 'desc' => 'Sesuaikan menu & isi paket sesuai kebutuhan acara Anda.', 'icon' => 'M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4'],
                    ['title' => 'Fleksibel Waktu Pesan', 'desc' => 'Same day hingga H-3 tergantung jumlah pesanan.', 'icon' => 'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z'],
                    ['title' => 'Rasa Autentik Nusantara', 'desc' => 'Resep rumahan dengan cita rasa khas yang konsisten.', 'icon' => 'M12 3c1.5 2 4 4.5 4 8a4 4 0 01-8 0c0-1.2.4-2 1-3 .2 1 .8 1.5 1.5 1.5-.5-2 .5-4.5 1.5-6.5z'],
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 sm:gap-10 max-w-7xl mx-auto">
                @foreach($features as $f)
                    <div class="group p-8 sm:p-10 bg-white rounded-3xl shadow-md border border-cnb-wood-dark/5 hover:border-cnb-gold/40 hover:shadow-2xl transition-all duration-500 ease-out hover:-translate-y-3 text-center flex flex-col justify-between">
                        <div>
                            <div class="w-20 h-20 rounded-2xl bg-cnb-gold/10 border border-cnb-gold/30 mx-auto flex items-center justify-center mb-8 group-hover:bg-cnb-gold transition-all duration-500 shadow-inner">
                                <svg class="w-10 h-10 text-cnb-gold group-hover:text-cnb-wood-dark transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="{{ $f['icon'] }}" /></svg>
                            </div>
                            <h3 class="font-serif text-2xl font-bold text-cnb-wood-dark mb-4 group-hover:text-cnb-gold transition-colors duration-300">{{ $f['title'] }}</h3>
                            <p class="text-cnb-gray font-sans text-base leading-relaxed">{{ $f['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ABOUT PREVIEW --}}
    <section class="py-24 bg-cnb-cream relative overflow-hidden">
    <div class="container mx-auto px-6 relative">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center max-w-7xl mx-auto">
            
            <!-- Kolom Gambar -->
            <div class="relative order-2 lg:order-1">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                    <img src="{{ asset('images/nasi-ayam-suwir.jpg') }}" alt="Foto Dapur Catering Nusantara" class="w-full h-full object-cover">
                    <div class="absolute -bottom-4 -right-4 w-24 h-24 border-2 border-cnb-gold/30 rounded-lg"></div>
                    <div class="absolute -top-4 -left-4 w-24 h-24 border-2 border-cnb-gold/30 rounded-lg"></div>
                </div>
                
                <!-- Badge Experience -->
                <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl shadow-xl p-6 hidden md:flex items-center gap-4 border border-cnb-wood-dark/5">
                    <div class="w-12 h-12 bg-cnb-gold/10 rounded-xl flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6 text-cnb-gold" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                    <div>
                        <div class="font-serif font-bold text-cnb-wood-dark text-lg">2+ Tahun</div>
                        <div class="text-cnb-gray text-xs font-sans">Pengalaman Pengolahan</div>
                    </div>
                </div>
            </div>

            <!-- Kolom Teks -->
            <div class="order-1 lg:order-2">
                <span class="text-cnb-gold font-sans text-xs md:text-sm tracking-[0.3em] uppercase font-semibold">TENTANG KAMI</span>
                <h2 class="font-serif text-3xl md:text-5xl font-bold text-cnb-wood-dark mt-3 mb-6 leading-tight">
                    Dibuat dengan Hati, <br>
                    <span class="text-cnb-gold">Disajikan dengan Bangga</span>
                </h2>
                <p class="text-cnb-gray font-sans text-base leading-relaxed mb-8">
                    Sejak berdiri, Catering Nusantara Bogor berkomitmen menghadirkan hidangan khas Nusantara dengan cita rasa rumahan yang hangat untuk setiap acara Anda.
                </p>
                <a href="{{ route('about') }}"
                   class="inline-flex items-center gap-3 px-8 py-4 bg-cnb-gold text-cnb-wood-dark font-sans font-semibold rounded-full transition-all duration-300 hover:bg-cnb-gold-light hover:shadow-[0_10px_30px_rgba(201,162,39,0.3)] hover:-translate-y-1">
                    <span>Selengkapnya Tentang Kami</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>

    {{-- TESTIMONI --}}
    <section class="py-24 bg-cnb-wood-dark relative overflow-hidden batik-pattern">
        <div class="container mx-auto px-6 relative">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-cnb-gold font-sans text-xs md:text-sm tracking-[0.3em] uppercase font-semibold">KATA MEREKA</span>
                <h2 class="font-serif text-3xl md:text-4xl text-white mt-3 mb-4 font-bold">Testimoni <span class="text-cnb-gold">Pelanggan</span></h2>
                <div class="w-16 h-0.5 bg-cnb-gold mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto">
                @forelse($testimonials as $t)
                    <div class="bg-white/5 backdrop-blur-md border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-all duration-500 ease-out hover:border-cnb-gold/40 hover:-translate-y-2 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-1 text-cnb-gold mb-5">
                                @for($star = 0; $star < ($t->rating ?? 5); $star++)
                                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                                @endfor
                            </div>
                            <p class="text-white/80 font-sans text-sm sm:text-base leading-relaxed mb-6 font-light">"{{ $t->review }}"</p>
                        </div>
                        <div class="pt-4 border-t border-white/10">
                            <div class="font-serif text-white font-semibold text-base sm:text-lg">{{ $t->client_name }}</div>
                            <div class="text-cnb-gold/80 font-sans text-xs sm:text-sm mt-0.5">{{ $t->event_type }}</div>
                        </div>
                    </div>
                @empty
                    @for($i = 0; $i < 3; $i++)
                        <div class="bg-white/5 backdrop-blur-md border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-all duration-500 ease-out hover:border-cnb-gold/40 hover:-translate-y-2 flex flex-col justify-between">
                            <div>
                                <div class="flex items-center gap-1 text-cnb-gold mb-5">
                                    @for($star = 0; $star < 5; $star++)
                                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                                    @endfor
                                </div>
                                <p class="text-white/80 font-sans text-sm sm:text-base leading-relaxed mb-6 font-light">"Testimoni pelanggan akan tampil di sini setelah data tersedia."</p>
                            </div>
                            <div class="pt-4 border-t border-white/10">
                                <div class="font-serif text-white font-semibold text-base sm:text-lg">Nama Pelanggan</div>
                                <div class="text-cnb-gold/80 font-sans text-xs sm:text-sm mt-0.5">Jenis Acara</div>
                            </div>
                        </div>
                    @endfor
                @endforelse
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="relative py-24 bg-cnb-wood-dark overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="font-serif text-3xl md:text-5xl text-white font-bold mb-4 leading-tight">Siap Memesan untuk <span class="text-cnb-gold">Acara Anda?</span></h2>
                <p class="text-white/70 font-sans text-base md:text-lg max-w-2xl mx-auto mb-10 font-light leading-relaxed">Konsultasikan kebutuhan catering Anda langsung dengan tim kami via WhatsApp.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="https://wa.me/628561155113" target="_blank"
                        class="inline-flex items-center gap-3 px-10 py-5 bg-cnb-gold text-cnb-wood-dark font-sans font-semibold rounded-full transition-all duration-300 hover:bg-cnb-gold-light hover:shadow-[0_10px_40px_rgba(201,162,39,0.4)] hover:-translate-y-1">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" /></svg>
                        <span>Hubungi Kami Sekarang</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection