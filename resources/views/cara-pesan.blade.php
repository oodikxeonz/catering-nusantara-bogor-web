@extends('layouts.app')

@section('title', 'Cara Pesan - Catering Nusantara Bogor')

@section('content')

    {{-- HERO --}}
    <section class="relative min-h-[60vh] flex items-center overflow-hidden bg-cnb-wood-dark">
        <div class="absolute inset-0">
            <img src="{{ asset('images/herocatring.jpg') }}"
                class="w-full h-full object-cover opacity-35 scale-105 transition-transform duration-1000 ease-out hover:scale-100"
                alt="Cara Pesan Background">
            <div class="absolute inset-0 bg-linear-to-r from-cnb-wood-dark/95 via-cnb-wood-dark/80 to-cnb-wood-dark/60">
            </div>
        </div>

        <div class="absolute top-20 left-0 w-32 h-0.5 bg-linear-to-r from-cnb-gold to-transparent"></div>

        <div
            class="absolute top-8 right-8 bg-cnb-gold/10 backdrop-blur-md border border-cnb-gold/30 px-5 py-2 rounded-full hidden sm:block shadow-lg">
            <span class="text-cnb-gold text-xs font-sans tracking-widest font-semibold">✦ PANDUAN PEMESANAN</span>
        </div>

        <div class="container mx-auto px-6 relative z-10 py-20">
            <div class="max-w-4xl">
                <div class="flex items-center gap-4 mb-6">
                    <span
                        class="text-cnb-gold font-sans text-xs md:text-sm tracking-[0.3em] uppercase font-semibold">LANGKAH
                        MUDAH & CEPAT</span>
                    <span class="w-16 h-px bg-cnb-gold"></span>
                </div>

                <h1
                    class="font-serif text-4xl sm:text-6xl lg:text-7xl font-bold text-white leading-tight mb-6 tracking-wide">
                    Cara <span class="text-cnb-gold">Pemesanan</span>
                </h1>

                <p class="text-white/80 font-sans text-base md:text-xl max-w-2xl mb-10 leading-relaxed font-light">
                    Pesan hidangan istimewa Catering Nusantara Bogor cukup dengan 5 langkah praktis via WhatsApp.
                </p>

                <div class="inline-flex flex-wrap gap-4">
                    <a href="https://wa.me/628561155113" target="_blank"
                        class="group inline-flex items-center gap-3 px-8 py-4 bg-cnb-gold text-cnb-wood-dark font-sans font-semibold rounded-full transition-all duration-300 ease-out hover:bg-cnb-gold-light hover:shadow-[0_10px_30px_rgba(201,162,39,0.4)] hover:-translate-y-1">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                        </svg>
                        <span>Langsung Chat Admin</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- LANGKAH PEMESANAN --}}
    <section class="py-24 bg-cnb-cream relative overflow-hidden">
        <div class="container mx-auto px-6 relative">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-cnb-gold font-sans text-xs md:text-sm tracking-[0.3em] uppercase font-semibold">ALUR
                    PEMESANAN</span>
                <h2 class="font-serif text-3xl md:text-4xl text-cnb-wood-dark mt-3 mb-4 font-bold">5 Langkah <span
                        class="text-cnb-gold">Pesan Catering</span></h2>
                <div class="w-16 h-0.5 bg-cnb-gold mx-auto"></div>
            </div>

            @php
                $steps = [
                    [
                        'no' => '01',
                        'title' => 'Pilih Menu & Paket',
                        'desc' => 'Lihat katalog di halaman Menu untuk menemukan pilihan Nasi Box, Tumpeng, atau Snack Box yang cocok dengan acara Anda.',
                        'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2',
                    ],
                    [
                        'no' => '02',
                        'title' => 'Hubungi via WhatsApp',
                        'desc' => 'Klik tombol "Pesan Sekarang" atau hubungi WhatsApp kami untuk mengonfirmasi detail pesanan dan ketersediaan tanggal.',
                        'icon' => 'M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z',
                    ],
                    [
                        'no' => '03',
                        'title' => 'Konfirmasi Pax & Tanggal',
                        'desc' => 'Beritahu kami jumlah porsi (pax), lokasi pengiriman, dan jam acara agar tim kami dapat mengatur rute dan waktu kirim.',
                        'icon' => 'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z',
                    ],
                    [
                        'no' => '04',
                        'title' => 'Pembayaran DP 50%',
                        'desc' => 'Lakukan pembayaran DP minimal 50% untuk mengamankan slot produksi dapur pada tanggal acara Anda.',
                        'icon' => 'M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2z',
                    ],
                    [
                        'no' => '05',
                        'title' => 'Pengiriman Pesanan',
                        'desc' => 'Hidangan diolah secara fresh dan diantarkan tepat waktu ke lokasi Anda dalam kondisi hangat dan siap santap.',
                        'icon' => 'M5 13l4 4L19 7',
                    ],
                ];
            @endphp

            <!-- Timeline Container Lebih Lebar (max-w-6xl) -->
            <div class="relative max-w-6xl mx-auto">
                <!-- Garis Vertikal Lebih Tebal (w-1.5) -->
                <div class="absolute left-8 md:left-1/2 top-0 bottom-0 w-1.5 bg-cnb-gold/30 -translate-x-1/2 rounded-full">
                </div>

                <div class="space-y-12 md:space-y-16">
                    @foreach($steps as $index => $s)
                        @php $isEven = $index % 2 === 1; @endphp

                        <div class="relative flex flex-col md:flex-row items-center group">

                            <!-- Badge Nomor Vertikal Lebih Besar (w-14 h-14) -->
                            <div
                                class="absolute left-8 md:left-1/2 -translate-x-1/2 z-10 w-14 h-14 rounded-full bg-white border-2 border-cnb-gold shadow-lg flex items-center justify-center group-hover:bg-cnb-gold transition-colors duration-500">
                                <span
                                    class="font-serif text-base font-bold text-cnb-gold group-hover:text-cnb-wood-dark transition-colors duration-500">
                                    {{ $s['no'] }}
                                </span>
                            </div>

                            <!-- Card Content Lebih Besar & Teks Lebih Jelas -->
                            <div
                                class="w-full pl-20 md:pl-0 md:w-1/2 {{ $isEven ? 'md:ml-auto md:pl-16' : 'md:mr-auto md:pr-16' }}">
                                <div
                                    class="p-8 sm:p-10 bg-white rounded-3xl shadow-lg border border-cnb-wood-dark/5 hover:border-cnb-gold/40 hover:shadow-2xl transition-all duration-500 ease-out hover:-translate-y-2 relative">

                                    <div class="flex items-center justify-between mb-6">
                                        <!-- Icon Lebih Besar (w-16 h-16) -->
                                        <div
                                            class="w-16 h-16 rounded-2xl bg-cnb-gold/10 border border-cnb-gold/30 flex items-center justify-center group-hover:bg-cnb-gold transition-all duration-500 shadow-inner">
                                            <svg class="w-8 h-8 text-cnb-gold group-hover:text-cnb-wood-dark transition-colors duration-500"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                                    d="{{ $s['icon'] }}" />
                                            </svg>
                                        </div>
                                        <!-- Angka Watermark Lebih Besar (text-4xl) -->
                                        <span
                                            class="font-serif text-4xl font-bold text-cnb-gold/40 group-hover:text-cnb-gold transition-colors duration-300">
                                            {{ $s['no'] }}
                                        </span>
                                    </div>

                                    <!-- Judul Lebih Besar (text-2xl) -->
                                    <h3
                                        class="font-serif text-2xl font-bold text-cnb-wood-dark mb-3 group-hover:text-cnb-gold transition-colors duration-300">
                                        {{ $s['title'] }}
                                    </h3>
                                    <!-- Deskripsi Lebih Besar (text-base) -->
                                    <p class="text-cnb-gray font-sans text-base leading-relaxed">
                                        {{ $s['desc'] }}
                                    </p>

                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>

    {{-- KETENTUAN PEMESANAN --}}
    <section class="py-24 bg-cnb-leaf-dark relative overflow-hidden batik-pattern-diagonal">
        <div class="container mx-auto px-6 relative">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-cnb-gold font-sans text-xs md:text-sm tracking-[0.3em] uppercase font-semibold">INFO
                    PENTING</span>
                <h2 class="font-serif text-3xl md:text-4xl text-white mt-3 mb-4 font-bold">Ketentuan <span
                        class="text-cnb-gold">Pemesanan</span></h2>
                <div class="w-16 h-0.5 bg-cnb-gold mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto">
                <div
                    class="bg-white/5 backdrop-blur-md border border-cnb-gold/20 rounded-2xl p-8 hover:border-cnb-gold/50 transition-all duration-300 hover:-translate-y-1">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-xl bg-cnb-gold/20 flex items-center justify-center shrink-0">
                            <span class="text-cnb-gold font-serif text-lg">✦</span>
                        </div>
                        <h3 class="font-serif text-xl font-bold text-white">Waktu Pemesanan</h3>
                    </div>
                    <ul class="space-y-3 text-white/80 font-sans text-sm leading-relaxed">
                        <li>• Pesanan <strong class="text-white">s.d. 20 pax</strong>: Bisa dipesan H-1 / Same Day
                            (tergantung slot).</li>
                        <li>• Pesanan <strong class="text-white">20 - 100 pax</strong>: Pemesanan minimal H-2 acara.</li>
                        <li>• Pesanan <strong class="text-white">> 100 pax</strong>: Pemesanan disarankan H-3 sampai H-5
                            acara.</li>
                    </ul>
                </div>

                <div
                    class="bg-white/5 backdrop-blur-md border border-cnb-gold/20 rounded-2xl p-8 hover:border-cnb-gold/50 transition-all duration-300 hover:-translate-y-1">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-xl bg-cnb-gold/20 flex items-center justify-center shrink-0">
                            <span class="text-cnb-gold font-serif text-lg">✦</span>
                        </div>
                        <h3 class="font-serif text-xl font-bold text-white">Pembayaran & Refund</h3>
                    </div>
                    <ul class="space-y-3 text-white/80 font-sans text-sm leading-relaxed">
                        <li>• DP minimal 50% saat konfirmasi pesanan.</li>
                        <li>• Pelunasan sisa tagihan dilakukan maksimal pada hari H saat pesanan tiba.</li>
                        <li>• Pembatalan <strong class="text-white">H-2</strong> uang DP dapat dikembalikan 50%.</li>
                    </ul>
                </div>

                <div
                    class="bg-white/5 backdrop-blur-md border border-cnb-gold/20 rounded-2xl p-8 hover:border-cnb-gold/50 transition-all duration-300 hover:-translate-y-1">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-xl bg-cnb-gold/20 flex items-center justify-center shrink-0">
                            <span class="text-cnb-gold font-serif text-lg">✦</span>
                        </div>
                        <h3 class="font-serif text-xl font-bold text-white">Pengiriman & Area</h3>
                    </div>
                    <ul class="space-y-3 text-white/80 font-sans text-sm leading-relaxed">
                        <li>• Melayani area <strong class="text-white">Kota Bogor, Kab. Bogor & Jabodetabek</strong>.</li>
                        <li>• Ongkir menyesuaikan jarak lokasi pengiriman dari dapur produksi kami.</li>
                        <li>• Gratis ongkir untuk pemesanan jumlah tertentu di area Bogor Kota.</li>
                    </ul>
                </div>

                <div
                    class="bg-white/5 backdrop-blur-md border border-cnb-gold/20 rounded-2xl p-8 hover:border-cnb-gold/50 transition-all duration-300 hover:-translate-y-1">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-xl bg-cnb-gold/20 flex items-center justify-center shrink-0">
                            <span class="text-cnb-gold font-serif text-lg">✦</span>
                        </div>
                        <h3 class="font-serif text-xl font-bold text-white">Custom Paket Menu</h3>
                    </div>
                    <ul class="space-y-3 text-white/80 font-sans text-sm leading-relaxed">
                        <li>• Kombinasi lauk pauk dapat disesuaikan dengan permintaan khusus.</li>
                        <li>• Opsi penambahan buah, kerupuk, atau minuman kemasan tersedia.</li>
                        <li>• Konsultasikan preferensi menu Anda langsung kepada tim admin WhatsApp kami.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="relative py-24 bg-cnb-wood-dark overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="font-serif text-3xl md:text-5xl text-white font-bold mb-4 leading-tight">Siap Melakukan <span
                        class="text-cnb-gold">Pemesanan?</span></h2>
                <p class="text-white/70 font-sans text-base md:text-lg max-w-2xl mx-auto mb-10 font-light leading-relaxed">
                    Hubungi admin kami sekarang untuk mendapatkan penawaran harga terbaik untuk acara Anda.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="https://wa.me/628561155113" target="_blank"
                        class="inline-flex items-center gap-3 px-10 py-5 bg-cnb-gold text-cnb-wood-dark font-sans font-semibold rounded-full transition-all duration-300 hover:bg-cnb-gold-light hover:shadow-[0_10px_40px_rgba(201,162,39,0.4)] hover:-translate-y-1">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                        </svg>
                        <span>Pesan via WhatsApp</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection