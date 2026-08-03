@extends('layouts.app')

@section('title', 'Tentang Kami - Catering Nusantara Bogor')

@section('content')

{{-- HERO --}}
<div class="relative bg-cnb-black text-cnb-cream min-h-[520px] flex items-center justify-center overflow-hidden">
    {{-- Background with parallax feel --}}
<img src="{{ asset('images/6305514454916995111.jpg') }}"
          class="absolute inset-0 w-full h-full object-cover opacity-40 scale-105">
    
    {{-- Gradient overlay --}}
    <div class="absolute inset-0 bg-gradient-to-b from-cnb-black/40 via-cnb-black/70 to-cnb-black"></div>
    
    {{-- Decorative gold accent line --}}
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-px h-24 bg-gradient-to-b from-transparent to-cnb-gold/60"></div>

    <div class="relative text-center px-6 max-w-3xl mx-auto">
        <div class="inline-flex items-center gap-3 mb-6">
            <span class="w-8 h-px bg-cnb-gold/60"></span>
            <p class="text-cnb-gold font-semibold text-xs tracking-[0.3em] uppercase">Siapa Kami</p>
            <span class="w-8 h-px bg-cnb-gold/60"></span>
        </div>
        
        <h1 class="font-serif text-5xl md:text-6xl font-bold leading-tight mb-6">
            Tentang <span class="text-cnb-gold italic">Catering</span><br>Nusantara Bogor
        </h1>
        
        <p class="text-cnb-cream/70 font-sans text-lg max-w-xl mx-auto leading-relaxed">
            Menghadirkan kekayaan rasa Indonesia dalam setiap sajian untuk momen berharga Anda.
        </p>

        {{-- Scroll indicator --}}
        <div class="mt-12 animate-bounce">
            <svg class="w-5 h-5 mx-auto text-cnb-gold/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </div>
</div>

{{-- IMAGE + TEXT SECTION --}}
<div class="bg-cnb-cream relative overflow-hidden">
    {{-- Subtle decorative background pattern --}}
    <div class="absolute top-0 right-0 w-96 h-96 bg-cnb-gold/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
    
    <div class="max-w-6xl mx-auto px-6 py-20 md:py-28 relative">
        <div class="grid md:grid-cols-2 gap-12 md:gap-16 items-center">

            {{-- Left: image with artistic frame --}}
            <div class="relative group">
                {{-- Decorative frame corners --}}
                <div class="absolute -top-4 -left-4 w-24 h-24 border-t-2 border-l-2 border-cnb-gold/30 rounded-tl-2xl"></div>
                <div class="absolute -bottom-4 -right-4 w-24 h-24 border-b-2 border-r-2 border-cnb-gold/30 rounded-br-2xl"></div>
                
                <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                    <img src="{{ asset('images/Untitled.jpg23.jpg') }}"
                         class="w-full h-[480px] object-cover transition-transform duration-700 group-hover:scale-105">
                    
                    {{-- Image overlay badge --}}
                    <div class="absolute bottom-6 left-6 bg-cnb-cream/95 backdrop-blur-sm rounded-xl px-5 py-3 shadow-lg">
                        <p class="text-cnb-black font-serif font-bold text-lg">Est. 2015</p>
                        <p class="text-cnb-gray text-xs font-sans">Bogor, Indonesia</p>
                    </div>
                </div>

                {{-- Floating emoji badge --}}
                <div class="absolute -bottom-6 -right-6 w-20 h-20 bg-cnb-gold rounded-2xl shadow-xl flex items-center justify-center transform rotate-6 hover:rotate-0 transition-transform duration-300">
                    <span class="text-cnb-black text-3xl">🍛</span>
                </div>
            </div>

            {{-- Right: text content --}}
            <div class="md:pl-4">
                <div class="flex items-center gap-3 mb-4">
                    <span class="w-10 h-px bg-cnb-gold"></span>
                    <p class="text-cnb-gold font-semibold text-xs tracking-[0.25em] uppercase">Cerita Kami</p>
                </div>

                <h2 class="font-serif text-3xl md:text-4xl font-bold text-cnb-black mb-8 leading-snug">
                    Lebih dari Sekadar<br><span class="text-cnb-gold italic">Katering</span>
                </h2>

                {{-- Feature cards with icons --}}
                <div class="space-y-4">
                    <div class="group flex items-start gap-4 bg-cnb-black text-cnb-cream rounded-2xl p-5 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-0.5">
                        <div class="w-10 h-10 rounded-xl bg-cnb-gold/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-5 h-5 text-cnb-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-sans font-semibold text-sm mb-1">Cita Rasa Nusantara Autentik</h3>
                            <p class="text-cnb-cream/60 text-sm leading-relaxed">Resep turun-temurun dengan bahan pilihan terbaik dari seluruh penjuru Indonesia.</p>
                        </div>
                    </div>

                    <div class="group flex items-start gap-4 bg-white border border-cnb-gray/10 rounded-2xl p-5 shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-0.5">
                        <div class="w-10 h-10 rounded-xl bg-cnb-gold/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-5 h-5 text-cnb-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-sans font-semibold text-sm text-cnb-black mb-1">Melayani Berbagai Acara</h3>
                            <p class="text-cnb-gray text-sm leading-relaxed">Dari acara kantor, keluarga, hingga hajatan besar di Bogor dan sekitarnya.</p>
                        </div>
                    </div>

                    <div class="group flex items-start gap-4 bg-white border border-cnb-gray/10 rounded-2xl p-5 shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-0.5">
                        <div class="w-10 h-10 rounded-xl bg-cnb-gold/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-5 h-5 text-cnb-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-sans font-semibold text-sm text-cnb-black mb-1">Bahan Segar & Bersertifikat Halal</h3>
                            <p class="text-cnb-gray text-sm leading-relaxed">Proses higienis terjamin dengan sertifikasi halal resmi untuk ketenangan Anda.</p>
                        </div>
                    </div>
                </div>

                {{-- Commitment section --}}
                <div class="mt-10 pt-8 border-t border-cnb-gray/10">
                    <p class="text-cnb-gold font-semibold text-xs tracking-[0.25em] uppercase mb-4">Komitmen Kami</p>
                    <div class="inline-flex items-center gap-3 bg-gradient-to-r from-cnb-gold to-cnb-gold-light text-cnb-black rounded-2xl px-6 py-4 shadow-lg shadow-cnb-gold/20">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-sans font-bold text-sm">Rasa Terbaik, Pelayanan Sepenuh Hati</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- VISI & MISI SECTION --}}
<div class="bg-cnb-black relative overflow-hidden py-20 md:py-28">
    {{-- Decorative background elements --}}
    <div class="absolute top-0 left-0 w-72 h-72 bg-cnb-gold/5 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-cnb-gold/5 rounded-full blur-3xl translate-x-1/3 translate-y-1/3"></div>
    
    {{-- Subtle dot pattern --}}
    <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(circle at 1px 1px, #FDFBF7 1px, transparent 0); background-size: 32px 32px;"></div>

    <div class="max-w-6xl mx-auto px-6 relative">
        {{-- Section Header --}}
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-3 mb-4">
                <span class="w-10 h-px bg-cnb-gold/60"></span>
                <p class="text-cnb-gold font-semibold text-xs tracking-[0.3em] uppercase">Arah Kami</p>
                <span class="w-10 h-px bg-cnb-gold/60"></span>
            </div>
            <h2 class="font-serif text-4xl md:text-5xl font-bold text-cnb-cream mb-4">
                Visi <span class="text-cnb-gold italic">&</span> Misi
            </h2>
            <p class="text-cnb-cream/50 font-sans max-w-lg mx-auto">
                Komitmen yang menggerakkan setiap hidangan dan pelayanan kami.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 md:gap-12">
            
            {{-- VISI CARD --}}
            <div class="group relative">
                {{-- Decorative corner accent --}}
                <div class="absolute -top-3 -left-3 w-16 h-16 border-t-2 border-l-2 border-cnb-gold/40 rounded-tl-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <div class="bg-gradient-to-br from-cnb-cream/[0.08] to-cnb-cream/[0.02] backdrop-blur-sm border border-cnb-cream/10 rounded-3xl p-8 md:p-10 h-full hover:border-cnb-gold/30 transition-all duration-500 hover:shadow-2xl hover:shadow-cnb-gold/5">
                    {{-- Icon --}}
                    <div class="w-16 h-16 rounded-2xl bg-cnb-gold/10 border border-cnb-gold/20 flex items-center justify-center mb-8 group-hover:bg-cnb-gold/20 transition-colors duration-300">
                        <svg class="w-8 h-8 text-cnb-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </div>

                    <h3 class="font-serif text-3xl font-bold text-cnb-gold mb-6">Visi</h3>
                    
                    <div class="relative">
                        {{-- Quote accent --}}
                        <span class="absolute -top-4 -left-2 text-6xl text-cnb-gold/10 font-serif leading-none">"</span>
                        
                        <p class="text-cnb-cream/80 font-sans text-lg leading-relaxed relative z-10">
                            Menjadi penyedia layanan katering Nusantara terdepan di Bogor yang dipercaya karena <span class="text-cnb-gold font-semibold">keautentikan rasa</span>, <span class="text-cnb-gold font-semibold">kualitas terbaik</span>, dan <span class="text-cnb-gold font-semibold">pelayanan berkelas</span> dalam setiap acara.
                        </p>
                    </div>

                    {{-- Decorative line --}}
                    <div class="mt-8 w-16 h-1 bg-gradient-to-r from-cnb-gold to-transparent rounded-full"></div>
                </div>
            </div>

            {{-- MISI CARD --}}
            <div class="group relative">
                {{-- Decorative corner accent --}}
                <div class="absolute -top-3 -right-3 w-16 h-16 border-t-2 border-r-2 border-cnb-gold/40 rounded-tr-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <div class="bg-gradient-to-br from-cnb-cream/[0.08] to-cnb-cream/[0.02] backdrop-blur-sm border border-cnb-cream/10 rounded-3xl p-8 md:p-10 h-full hover:border-cnb-gold/30 transition-all duration-500 hover:shadow-2xl hover:shadow-cnb-gold/5">
                    {{-- Icon --}}
                    <div class="w-16 h-16 rounded-2xl bg-cnb-gold/10 border border-cnb-gold/20 flex items-center justify-center mb-8 group-hover:bg-cnb-gold/20 transition-colors duration-300">
                        <svg class="w-8 h-8 text-cnb-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                        </svg>
                    </div>

                    <h3 class="font-serif text-3xl font-bold text-cnb-gold mb-6">Misi</h3>

                    <ul class="space-y-5">
                        <li class="flex items-start gap-4 group/item">
                            <div class="w-6 h-6 rounded-full bg-cnb-gold/20 flex items-center justify-center flex-shrink-0 mt-0.5 group-hover/item:bg-cnb-gold/30 transition-colors">
                                <span class="text-cnb-gold text-xs font-bold">1</span>
                            </div>
                            <p class="text-cnb-cream/70 font-sans leading-relaxed group-hover/item:text-cnb-cream transition-colors">
                                Menyajikan hidangan khas Nusantara dengan resep autentik dan bahan baku segar berkualitas tinggi.
                            </p>
                        </li>
                        <li class="flex items-start gap-4 group/item">
                            <div class="w-6 h-6 rounded-full bg-cnb-gold/20 flex items-center justify-center flex-shrink-0 mt-0.5 group-hover/item:bg-cnb-gold/30 transition-colors">
                                <span class="text-cnb-gold text-xs font-bold">2</span>
                            </div>
                            <p class="text-cnb-cream/70 font-sans leading-relaxed group-hover/item:text-cnb-cream transition-colors">
                                Memberikan pelayanan profesional dan personal untuk memastikan kepuasan pelanggan di setiap acara.
                            </p>
                        </li>
                        <li class="flex items-start gap-4 group/item">
                            <div class="w-6 h-6 rounded-full bg-cnb-gold/20 flex items-center justify-center flex-shrink-0 mt-0.5 group-hover/item:bg-cnb-gold/30 transition-colors">
                                <span class="text-cnb-gold text-xs font-bold">3</span>
                            </div>
                            <p class="text-cnb-cream/70 font-sans leading-relaxed group-hover/item:text-cnb-cream transition-colors">
                                Menjaga standar kehigienisan dan kehalalan produk melalui proses produksi yang terstandarisasi.
                            </p>
                        </li>
                        <li class="flex items-start gap-4 group/item">
                            <div class="w-6 h-6 rounded-full bg-cnb-gold/20 flex items-center justify-center flex-shrink-0 mt-0.5 group-hover/item:bg-cnb-gold/30 transition-colors">
                                <span class="text-cnb-gold text-xs font-bold">4</span>
                            </div>
                            <p class="text-cnb-cream/70 font-sans leading-relaxed group-hover/item:text-cnb-cream transition-colors">
                                Berkontribusi pada pelestarian kuliner tradisional Indonesia melalui inovasi menu yang tetap menghormati cita rasa asli.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        {{-- Bottom decorative element --}}
        <div class="mt-16 flex justify-center">
            <div class="flex items-center gap-4">
                <span class="w-12 h-px bg-cnb-gold/30"></span>
                <div class="w-2 h-2 bg-cnb-gold/40 rounded-full"></div>
                <span class="w-12 h-px bg-cnb-gold/30"></span>
            </div>
        </div>
    </div>
</div>
{{-- HIGHLIGHT STRIP --}}
<div class="bg-cnb-black relative overflow-hidden">
    {{-- Subtle pattern overlay --}}
    <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle at 1px 1px, #C9A227 1px, transparent 0); background-size: 40px 40px;"></div>
    
    <div class="max-w-6xl mx-auto px-6 py-16 relative">
        <div class="flex flex-col md:flex-row items-center gap-10 md:gap-12">

            {{-- Logo / Avatar --}}
            <div class="relative">
                <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-cnb-gold/30 to-cnb-gold/5 border border-cnb-gold/30 flex items-center justify-center flex-shrink-0 shadow-lg shadow-cnb-gold/10">
                    <span class="text-cnb-gold text-xl font-serif font-bold tracking-wider">CNB</span>
                </div>
                <div class="absolute -top-1 -right-1 w-4 h-4 bg-cnb-gold rounded-full animate-pulse"></div>
            </div>

            {{-- Text content --}}
            <div class="flex-1 text-center md:text-left">
                <h3 class="font-serif text-2xl text-cnb-cream font-bold mb-3">
                    Dipercaya Berbagai Acara di <span class="text-cnb-gold">Bogor</span>
                </h3>
                <p class="font-sans text-cnb-cream/60 leading-relaxed mb-2">
                    Pengalaman melayani ratusan momen spesial dengan kualitas rasa yang konsisten dan pelayanan profesional.
                </p>
                <div class="flex items-center gap-2 justify-center md:justify-start text-cnb-gold/80 text-sm font-medium">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                    <span>Legalitas halal & PIRT tersedia</span>
                </div>
            </div>

            {{-- Stats / Trust badges --}}
            <div class="flex gap-6 md:gap-8">
                <div class="text-center">
                    <p class="font-serif text-3xl font-bold text-cnb-gold">8+</p>
                    <p class="text-cnb-cream/50 text-xs font-sans mt-1">Tahun</p>
                </div>
                <div class="w-px bg-cnb-gold/20"></div>
                <div class="text-center">
                    <p class="font-serif text-3xl font-bold text-cnb-gold">500+</p>
                    <p class="text-cnb-cream/50 text-xs font-sans mt-1">Acara</p>
                </div>
                <div class="w-px bg-cnb-gold/20"></div>
                <div class="text-center">
                    <p class="font-serif text-3xl font-bold text-cnb-gold">100%</p>
                    <p class="text-cnb-cream/50 text-xs font-sans mt-1">Halal</p>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- OPTIONAL: CTA Section to close the page nicely --}}
<div class="bg-cnb-cream py-16">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <div class="bg-cnb-black rounded-3xl p-10 md:p-14 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-64 h-64 bg-cnb-gold/10 rounded-full blur-3xl translate-x-1/2 -translate-y-1/2"></div>
            
            <h2 class="font-serif text-3xl md:text-4xl text-cnb-cream font-bold mb-4 relative">
                Siap Membuat Acara Anda <span class="text-cnb-gold italic">Spesial?</span>
            </h2>
            <p class="text-cnb-cream/60 font-sans mb-8 max-w-lg mx-auto relative">
                Hubungi kami untuk konsultasi menu dan penawaran terbaik untuk acara Anda.
            </p>
            <a href="#" class="inline-flex items-center gap-2 bg-cnb-gold hover:bg-cnb-gold-light text-cnb-black font-sans font-semibold px-8 py-4 rounded-xl transition-colors duration-300 relative">
                <span>Pesan Sekarang</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
</div>

@endsection