@extends('layouts.app')

@section('title', 'Daftar Menu & Paket - Catering Nusantara Bogor')

@section('content')

    {{-- HERO --}}
    <section class="relative min-h-[65vh] flex items-center overflow-hidden bg-cnb-wood-dark">
        <div class="absolute inset-0">
            <img src="{{ asset('images/herocatring.jpg') }}"
                 class="w-full h-full object-cover opacity-40 scale-105 transition-transform duration-1000 ease-out hover:scale-100"
                 alt="Menu Catering Background">
            <div class="absolute inset-0 bg-gradient-to-r from-cnb-wood-dark/95 via-cnb-wood-dark/80 to-cnb-wood-dark/60"></div>
        </div>

        <div class="absolute top-20 left-0 w-32 h-[2px] bg-gradient-to-r from-cnb-gold to-transparent"></div>

        <div class="absolute top-8 right-8 bg-cnb-gold/10 backdrop-blur-md border border-cnb-gold/30 px-5 py-2 rounded-full hidden sm:flex items-center gap-2 shadow-lg">
            <svg class="w-3 h-3 text-cnb-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
            <span class="text-cnb-gold text-xs font-sans tracking-widest font-semibold">KATALOG MENU</span>
        </div>

        <div class="container mx-auto px-6 relative z-10 py-20">
            <div class="max-w-4xl">
                <div class="flex items-center gap-4 mb-6">
                    <span class="text-cnb-gold font-sans text-xs md:text-sm tracking-[0.3em] uppercase font-semibold">PILIHAN SAJIAN AUTENTIK</span>
                    <span class="w-16 h-[1px] bg-cnb-gold"></span>
                </div>

                <h1 class="font-serif text-4xl sm:text-6xl lg:text-7xl font-bold text-white leading-tight mb-6 tracking-wide">
                    Pilihan Paket <span class="text-cnb-gold">Menu Spesial</span>
                </h1>

                <p class="text-white/80 font-sans text-base md:text-xl max-w-2xl mb-10 leading-relaxed font-light">
                    Nikmati sajian berkualitas tinggi khas Nusantara untuk melengkapi setiap momen spesial Anda di wilayah Bogor & Jabodetabek.
                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="https://wa.me/628561155113" target="_blank"
                        class="group inline-flex items-center gap-3 px-8 py-4 bg-cnb-gold text-cnb-wood-dark font-sans font-semibold rounded-full transition-all duration-300 ease-out hover:bg-cnb-gold-light hover:shadow-[0_10px_30px_rgba(201,162,39,0.4)] hover:-translate-y-1">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" /></svg>
                        <span>Konsultasi Pesanan</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- KATEGORI MENU --}}
    <section class="py-24 bg-cnb-cream relative">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-cnb-gold font-sans text-xs md:text-sm tracking-[0.3em] uppercase font-semibold">PILIHAN TERBAIK</span>
                <h2 class="font-serif text-3xl md:text-4xl text-cnb-wood-dark mt-3 mb-4 font-bold">Kategori <span class="text-cnb-gold">Menu Kami</span></h2>
                <div class="w-16 h-[2px] bg-cnb-gold mx-auto mb-4"></div>
                <p class="text-cnb-gray font-sans text-base leading-relaxed">
                    Dari Nasi Box praktis, Tumpeng syukuran, hingga Snack Box untuk berbagai acara Anda.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 sm:gap-10 max-w-7xl mx-auto">
                @forelse($categories as $category)
                    <a href="{{ route('menu.show', $category->slug) }}"
                       class="group block relative overflow-hidden rounded-3xl bg-white border border-cnb-wood-dark/10 shadow-lg hover:shadow-2xl hover:border-cnb-gold/50 transition-all duration-500 ease-out hover:-translate-y-3">

                        <div class="relative h-64 overflow-hidden">
                            <img src="{{ $category->image ? asset('storage/' . $category->image) : 'https://placehold.co/600x450/3E2A1E/C9A227?text=' . urlencode($category->name) }}"
                                 alt="{{ $category->name }}"
                                 class="w-full h-full object-cover group-hover:scale-110 transition duration-700 ease-out">
                            <div class="absolute inset-0 bg-gradient-to-t from-cnb-wood-dark/80 via-cnb-wood-dark/20 to-transparent"></div>

                            <div class="absolute top-4 right-4 bg-cnb-wood-dark/90 backdrop-blur-md border border-cnb-gold/40 px-4 py-1.5 rounded-full text-xs text-cnb-gold font-semibold shadow-md">
                                {{ $category->packages->count() ?? 0 }} Varian Menu
                            </div>
                        </div>

                        <div class="p-8 space-y-4">
                            <h3 class="font-serif font-bold text-2xl text-cnb-wood-dark group-hover:text-cnb-gold transition duration-300">
                                {{ $category->name }}
                            </h3>
                            <p class="text-cnb-gray font-sans text-sm line-clamp-2 leading-relaxed">
                                {{ $category->description ?? 'Pilihan menu istimewa dengan kombinasi lauk pauk lezat khas Nusantara untuk melengkapi acara Anda.' }}
                            </p>

                            <div class="pt-4 flex items-center justify-between border-t border-cnb-gold/15 text-sm font-semibold text-cnb-wood-dark group-hover:text-cnb-gold transition duration-300">
                                <span>Lihat Varian Menu</span>
                                <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                            </div>
                        </div>
                    </a>
                @empty
                    @php
                        $dummyPackages = [
                            ['title' => 'Nasi Box', 'desc' => 'Pilihan praktis dengan berbagai varian lauk, cocok untuk acara kantor, seminar, hingga arisan keluarga.', 'badge' => ' Varian Lengkap', 'slug' => 'nasi-box'],
                            ['title' => 'Tumpeng', 'desc' => 'Sajian tumpeng lengkap dengan lauk pendamping untuk syukuran, ulang tahun, hingga acara adat.', 'badge' => ' Varian Special', 'slug' => 'tumpeng'],
                            ['title' => 'Snack Box', 'desc' => 'Kudapan ringan dan gurih untuk melengkapi coffee break rapat maupun acara santai lainnya.', 'badge' => ' Varian Kudapan', 'slug' => 'snack-box'],
                        ];
                    @endphp

                    @foreach($dummyPackages as $item)
                        <a href="{{ route('menu.show', $item['slug']) }}"
                           class="group block relative overflow-hidden rounded-3xl bg-white border border-cnb-wood-dark/10 shadow-lg hover:shadow-2xl hover:border-cnb-gold/50 transition-all duration-500 ease-out hover:-translate-y-3">

                            <div class="relative h-64 overflow-hidden">
                                <img src="https://placehold.co/600x450/3E2A1E/C9A227?text={{ urlencode($item['title']) }}"
                                     class="w-full h-full object-cover group-hover:scale-110 transition duration-700 ease-out"
                                     alt="{{ $item['title'] }}">
                                <div class="absolute inset-0 bg-gradient-to-t from-cnb-wood-dark/80 via-cnb-wood-dark/20 to-transparent"></div>

                                <div class="absolute top-4 right-4 bg-cnb-wood-dark/90 backdrop-blur-md border border-cnb-gold/40 px-4 py-1.5 rounded-full text-xs text-cnb-gold font-semibold shadow-md">
                                    {{ $item['badge'] }}
                                </div>
                            </div>

                            <div class="p-8 space-y-4">
                                <h3 class="font-serif font-bold text-2xl text-cnb-wood-dark group-hover:text-cnb-gold transition duration-300">
                                    {{ $item['title'] }}
                                </h3>
                                <p class="text-cnb-gray font-sans text-sm leading-relaxed">
                                    {{ $item['desc'] }}
                                </p>

                                <div class="pt-4 flex items-center justify-between border-t border-cnb-gold/15 text-sm font-semibold text-cnb-wood-dark group-hover:text-cnb-gold transition duration-300">
                                    <span>Lihat Varian Menu</span>
                                    <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @endforelse
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="relative py-24 bg-cnb-wood-dark overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="font-serif text-3xl md:text-5xl text-white font-bold mb-4 leading-tight">Butuh Rekomendasi Menu <span class="text-cnb-gold">Acara Anda?</span></h2>
                <p class="text-white/70 font-sans text-base md:text-lg max-w-2xl mx-auto mb-10 font-light leading-relaxed">Tim kami siap membantu memilihkan kombinasi lauk pauk terbaik sesuai preferensi dan budget Anda.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="https://wa.me/628561155113" target="_blank"
                        class="inline-flex items-center gap-3 px-10 py-5 bg-cnb-gold text-cnb-wood-dark font-sans font-semibold rounded-full transition-all duration-300 hover:bg-cnb-gold-light hover:shadow-[0_10px_40px_rgba(201,162,39,0.4)] hover:-translate-y-1">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" /></svg>
                        <span>Tanya Admin via WhatsApp</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
