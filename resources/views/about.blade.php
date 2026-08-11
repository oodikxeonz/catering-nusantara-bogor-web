@extends('layouts.app')

@section('title', 'Tentang Kami - Catering Nusantara Bogor')

@section('content')

    {{-- HERO --}}
    <section class="relative min-h-[70vh] flex items-center overflow-hidden bg-cnb-wood-dark">
        <div class="absolute inset-0">
            <img src="{{ asset('images/6305514454916995111.jpg') }}"
                 class="w-full h-full object-cover opacity-40 scale-105 transition-transform duration-1000 ease-out hover:scale-100"
                 alt="Tentang Kami Background">
            <div class="absolute inset-0 bg-gradient-to-r from-cnb-wood-dark/95 via-cnb-wood-dark/80 to-cnb-wood-dark/60"></div>
        </div>

        <div class="absolute top-20 left-0 w-32 h-[2px] bg-gradient-to-r from-cnb-gold to-transparent"></div>

        <div class="absolute top-8 right-8 bg-cnb-gold/10 backdrop-blur-md border border-cnb-gold/30 px-5 py-2 rounded-full hidden sm:block shadow-lg">
            <span class="text-cnb-gold text-xs font-sans tracking-widest font-semibold">✦ KISAH KAMI</span>
        </div>

        <div class="container mx-auto px-6 relative z-10 py-20">
            <div class="max-w-4xl">
                <div class="flex items-center gap-4 mb-6">
                    <span class="text-cnb-gold font-sans text-xs md:text-sm tracking-[0.3em] uppercase font-semibold">CATERING NUSANTARA BOGOR</span>
                    <span class="w-16 h-[1px] bg-cnb-gold"></span>
                </div>

                <h1 class="font-serif text-4xl sm:text-6xl lg:text-7xl font-bold text-white leading-tight mb-6 tracking-wide">
                    Tentang <span class="text-cnb-gold">Catering Nusantara</span>
                </h1>

                <p class="text-white/80 font-sans text-base md:text-xl max-w-2xl mb-10 leading-relaxed font-light">
                    Menghadirkan kehangatan cita rasa autentik Indonesia dalam setiap kotak hidangan untuk melengkapi momen istimewa Anda.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 max-w-3xl">
                    <div class="bg-white/5 backdrop-blur-md border border-white/10 rounded-2xl p-6 text-center hover:bg-white/10 transition-all duration-300 hover:border-cnb-gold/50 hover:-translate-y-1">
                        <div class="text-3xl font-serif font-bold text-cnb-gold">2024</div>
                        <div class="text-white/70 font-sans text-sm mt-1">Berdiri Sejak</div>
                    </div>
                    <div class="bg-white/5 backdrop-blur-md border border-white/10 rounded-2xl p-6 text-center hover:bg-white/10 transition-all duration-300 hover:border-cnb-gold/50 hover:-translate-y-1">
                        <div class="text-3xl font-serif font-bold text-cnb-gold">100%</div>
                        <div class="text-white/70 font-sans text-sm mt-1">Bahan Segar & Halal</div>
                    </div>
                    <div class="bg-white/5 backdrop-blur-md border border-white/10 rounded-2xl p-6 text-center hover:bg-white/10 transition-all duration-300 hover:border-cnb-gold/50 hover:-translate-y-1">
                        <div class="text-3xl font-serif font-bold text-cnb-gold">Jabodetabek</div>
                        <div class="text-white/70 font-sans text-sm mt-1">Jangkauan Layanan</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CERITA KAMI --}}
    <section class="py-24 bg-cnb-cream relative overflow-hidden">
        <div class="container mx-auto px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center max-w-7xl mx-auto">
                {{-- Left image --}}
                <div class="relative group">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-cnb-wood-dark/10">
                        <img src="{{ asset('images/Untitled.jpg23.jpg') }}" alt="Dapur Catering Nusantara"
                             class="w-full h-[480px] object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-cnb-wood-dark/40 to-transparent"></div>
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl shadow-xl p-6 hidden md:block border border-cnb-wood-dark/5">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-cnb-gold/10 rounded-xl flex items-center justify-center">
                                <span class="text-cnb-gold font-serif text-xl">✦</span>
                            </div>
                            <div>
                                <div class="font-serif font-bold text-cnb-wood-dark text-lg">Bogor, Jawa Barat</div>
                                <div class="text-cnb-gray text-xs font-sans">Dapur Produksi Utama</div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Right text --}}
                <div>
                    <span class="text-cnb-gold font-sans text-xs md:text-sm tracking-[0.3em] uppercase font-semibold">CERITA KAMI</span>
                    <h2 class="font-serif text-3xl md:text-5xl font-bold text-cnb-wood-dark mt-3 mb-6 leading-tight">
                        Lebih dari Sekadar <br><span class="text-cnb-gold">Layanan Katering</span>
                    </h2>
                    <p class="text-cnb-gray font-sans text-base leading-relaxed mb-8">
                        Catering Nusantara Bogor berawal dari keinginan menghadirkan makanan khas Nusantara berkualitas dengan bumbu rumahan yang kaya akan cita rasa. Kami melayani beragam kebutuhan acara — mulai dari konsumsi kantor, hajatan keluarga, tumpengan syukuran, hingga coffee break.
                    </p>

                    <div class="space-y-4">
                        <div class="group flex items-start gap-4 bg-white border border-cnb-gold/20 rounded-2xl p-5 shadow-sm hover:shadow-md hover:border-cnb-gold transition-all duration-300">
                            <div class="w-10 h-10 rounded-xl bg-cnb-gold/10 flex items-center justify-center shrink-0 mt-0.5 group-hover:bg-cnb-gold transition-all">
                                <svg class="w-5 h-5 text-cnb-gold group-hover:text-cnb-wood-dark transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-serif font-bold text-lg text-cnb-wood-dark mb-1">Resep Autentik Berbahan Pilihan</h3>
                                <p class="text-cnb-gray text-sm leading-relaxed">Olahan rempah alami Nusantara dipadukan dengan bahan baku segar dari pemasok terpercaya.</p>
                            </div>
                        </div>

                        <div class="group flex items-start gap-4 bg-white border border-cnb-gold/20 rounded-2xl p-5 shadow-sm hover:shadow-md hover:border-cnb-gold transition-all duration-300">
                            <div class="w-10 h-10 rounded-xl bg-cnb-gold/10 flex items-center justify-center shrink-0 mt-0.5 group-hover:bg-cnb-gold transition-all">
                                <svg class="w-5 h-5 text-cnb-gold group-hover:text-cnb-wood-dark transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-serif font-bold text-lg text-cnb-wood-dark mb-1">Kebersihan & Higienitas Terjamin</h3>
                                <p class="text-cnb-gray text-sm leading-relaxed">Proses pengolahan bersih dan pengemasan rapi untuk menjamin kualitas terbaik hingga ke tangan pelanggan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- VISI & MISI --}}
    <section class="py-24 bg-cnb-wood-dark relative overflow-hidden batik-pattern">
        <div class="container mx-auto px-6 relative">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-cnb-gold font-sans text-xs md:text-sm tracking-[0.3em] uppercase font-semibold">KOMITMEN KAMI</span>
                <h2 class="font-serif text-3xl md:text-4xl text-white mt-3 mb-4 font-bold">Visi & <span class="text-cnb-gold">Misi</span></h2>
                <div class="w-16 h-[2px] bg-cnb-gold mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto">
                {{-- VISI --}}
                <div class="bg-white/5 backdrop-blur-md border border-cnb-gold/20 rounded-3xl p-8 sm:p-10 hover:border-cnb-gold/50 transition-all duration-500 hover:-translate-y-2 flex flex-col justify-between">
                    <div>
                        <div class="w-16 h-16 rounded-2xl bg-cnb-gold/10 border border-cnb-gold/30 flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-cnb-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </div>
                        <h3 class="font-serif text-2xl font-bold text-cnb-gold mb-4">Visi Utama</h3>
                        <p class="text-white/80 font-sans text-base md:text-lg leading-relaxed font-light">
                            Menjadi penyedia jasa catering terpercaya yang menghadirkan cita rasa Nusantara berkualitas, inovatif, dan mampu memberikan pengalaman kuliner terbaik bagi setiap pelanggan di Bogor dan sekitarnya.
                        </p>
                    </div>
                    <div class="mt-8 pt-6 border-t border-white/10 flex items-center gap-2 text-cnb-gold text-sm font-semibold">
                        <span>✦ Cita Rasa & Kualitas Terjaga</span>
                    </div>
                </div>

                {{-- MISI --}}
                <div class="bg-white/5 backdrop-blur-md border border-cnb-gold/20 rounded-3xl p-8 sm:p-10 hover:border-cnb-gold/50 transition-all duration-500 hover:-translate-y-2">
                    <div class="w-16 h-16 rounded-2xl bg-cnb-gold/10 border border-cnb-gold/30 flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-cnb-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 022 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                    </div>
                    <h3 class="font-serif text-2xl font-bold text-cnb-gold mb-4">Misi Pelayanan</h3>
                    <ul class="space-y-4 text-white/80 font-sans text-sm md:text-base leading-relaxed font-light">
                        <li class="flex items-start gap-3">
                            <span class="text-cnb-gold font-bold">1.</span>
                            <span>Menyajikan hidangan khas Nusantara dengan rasa autentik dan bahan berkualitas.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-cnb-gold font-bold">2.</span>
                            <span>Menjaga standar kebersihan, keamanan, dan kualitas dalam setiap pengolahan makanan.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-cnb-gold font-bold">3.</span>
                            <span>Memberikan pelayanan yang profesional, ramah, dan fleksibel sesuai kebutuhan acara.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-cnb-gold font-bold">4.</span>
                            <span>Terus berinovasi menghadirkan pilihan menu istimewa untuk beragam momen Anda.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="relative py-24 bg-cnb-wood-dark overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="font-serif text-3xl md:text-5xl text-white font-bold mb-4 leading-tight">Ingin Berdiskusi Mengenai <span class="text-cnb-gold">Acara Anda?</span></h2>
                <p class="text-white/70 font-sans text-base md:text-lg max-w-2xl mx-auto mb-10 font-light leading-relaxed">Tim Catering Nusantara Bogor siap membantu merencanakan menu terbaik sesuai budget dan jumlah porsi acara Anda.</p>
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