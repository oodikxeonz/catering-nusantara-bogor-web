@extends('layouts.app')
@section('title', 'Galeri - Catering Nusantara Bogor')
@section('content')

<div class="relative bg-cnb-black text-cnb-cream py-20 text-center overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_center,_var(--color-cnb-gold)_1px,_transparent_1px)] bg-[length:24px_24px]"></div>
    <p class="relative text-cnb-gold font-semibold text-sm tracking-[0.3em]">DOKUMENTASI</p>
    <h1 class="relative font-serif text-4xl md:text-5xl font-bold mt-3">Galeri Kami</h1>
    <div class="relative mx-auto mt-5 h-[2px] w-16 bg-cnb-gold"></div>
    <p class="relative text-cnb-cream/60 mt-4 max-w-md mx-auto text-sm">
        Momen-momen terbaik dari setiap acara yang telah kami layani
    </p>
</div>

<div class="max-w-6xl mx-auto px-6 py-16">
    <div class="columns-2 md:columns-3 gap-4 space-y-4">
        @php
            $images = array();
            $patterns = ['*.jpg', '*.jpeg', '*.png', '*.gif'];
            foreach ($patterns as $pattern) {
                $images = array_merge($images, glob(public_path('images/' . $pattern)));
            }
            $images = array_map('basename', $images);
            sort($images);
            $images = array_slice($images, 0, 9);
        @endphp
        @if(count($images) > 0)
            @for($i = 0; $i < count($images); $i++)
                <div
                    x-data
                    onclick='openLightbox("{{ asset('images/' . $images[$i]) }}")'
                    class='group relative break-inside-avoid rounded-lg overflow-hidden shadow-md cursor-pointer opacity-0 animate-[fadeUp_0.6s_ease-out_forwards]'
                    style='animation-delay: {{ ($i * 80) }}ms'
                >
                    <img
                        src='{{ asset('images/' . $images[$i]) }}'
                        class='w-full block transition-transform duration-500 ease-out group-hover:scale-110'
                        loading='lazy'
                        alt='Galeri Foto {{ $i+1 }}'
                    >

                    <!-- gold gradient overlay -->
                    <div class='absolute inset-0 bg-gradient-to-t from-cnb-black/80 via-cnb-black/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500'></div>

                    <!-- gold border on hover -->
                    <div class='absolute inset-0 border-2 border-cnb-gold rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-500'></div>

                    <!-- caption + icon -->
                    <div class='absolute bottom-0 left-0 right-0 p-4 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500'>
                        
                        <p class='text-cnb-gold text-xs tracking-widest'>LIHAT FOTO</p>
                    </div>

                    <div class='absolute top-3 right-3 w-8 h-8 rounded-full bg-cnb-black/60 backdrop-blur flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500'>
                        <svg class='w-4 h-4 text-cnb-gold' fill='none' stroke='currentColor' viewBox='0 0 24 24'>
                            <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M21 21l-4.35-4.35m0 0a7.5 7.5 0 10-10.6 0 7.5 7.5 0 0010.6 0z' />
                        </svg>
                    </div>
                </div>
            @endfor
        @else
            <p>No images found.</p>
        @endif
    </div>
</div>

<!-- Lightbox -->
<div id="lightbox" class="fixed inset-0 z-50 hidden bg-cnb-black/95 backdrop-blur-sm items-center justify-center p-6" onclick="closeLightbox()">
    <button class="absolute top-6 right-6 text-cnb-gold text-3xl leading-none hover:text-cnb-gold-light transition" onclick="closeLightbox()">&times;</button>
    <img id="lightbox-img" src="" class="max-h-[85vh] max-w-full rounded-lg shadow-2xl border border-cnb-gold/30" alt="Preview">
</div>

<style>
    @keyframes fadeUp {
        from { opacity: 0; transform: translateY(24px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>

<script>
    function openLightbox(src) {
        document.getElementById('lightbox-img').src = src;
        document.getElementById('lightbox').classList.remove('hidden');
        document.getElementById('lightbox').classList.add('flex');
        document.body.style.overflow = 'hidden';
    }
    function closeLightbox() {
        document.getElementById('lightbox').classList.add('hidden');
        document.getElementById('lightbox').classList.remove('flex');
        document.body.style.overflow = '';
    }
</script>

@endsection