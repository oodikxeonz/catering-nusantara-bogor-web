@extends('layouts.app')

@section('title', 'Catering Nusantara Bogor - Nasi Box, Tumpeng & Snack Box')

@section('content')

<!-- HERO -->
<section class="relative h-[85vh] flex items-center justify-center text-center overflow-hidden">
    <img src="https://placehold.co/1600x900/1A1A1A/C9A227?text=Foto+Hero+Catering"
         class="absolute inset-0 w-full h-full object-cover opacity-40" alt="Hero">
    <div class="absolute inset-0 bg-gradient-to-t from-cnb-black via-cnb-black/60 to-transparent"></div>
    <div class="relative z-10 px-6 max-w-2xl">
        <p class="text-cnb-gold font-semibold tracking-widest text-sm mb-3">CATERING KHAS NUSANTARA · BOGOR</p>
        <h1 class="font-serif text-4xl md:text-5xl font-bold text-white mb-4 leading-tight">
            Kehangatan Rasa Nusantara di Setiap Momen Spesial Anda
        </h1>
        <p class="text-gray-200 mb-8">
            Nasi Box, Tumpeng, dan Snack Box dengan cita rasa autentik — dikemas rapi untuk acara kantor, keluarga, hingga hajatan.
        </p>
        <div class="flex justify-center gap-4">
            <a href="{{ route('menu.index') }}" class="bg-cnb-gold hover:bg-cnb-gold-light text-cnb-black font-semibold px-6 py-3 rounded-full transition">
                Lihat Menu
            </a>
            <a href="https://wa.me/6280000000000" target="_blank" class="border border-cnb-gold text-cnb-gold hover:bg-cnb-gold hover:text-cnb-black font-semibold px-6 py-3 rounded-full transition">
                Chat WhatsApp
            </a>
        </div>
    </div>
</section>

<!-- KENAPA PILIH KAMI -->
<section class="max-w-6xl mx-auto px-6 py-20">
    <div class="text-center mb-12">
        <p class="text-cnb-gold font-semibold text-sm tracking-widest">KEUNGGULAN KAMI</p>
        <h2 class="font-serif text-3xl font-bold mt-2">Kenapa Pilih Catering Nusantara?</h2>
    </div>
    <div class="grid md:grid-cols-4 gap-8">
        @php
            $features = [
                ['title' => 'Berpengalaman 2 Tahun', 'desc' => 'Dipercaya untuk berbagai acara di Bogor & sekitarnya.'],
                ['title' => 'Bisa Custom Paket', 'desc' => 'Sesuaikan menu & isi paket sesuai kebutuhan acara Anda.'],
                ['title' => 'Fleksibel Waktu Pesan', 'desc' => 'Same day hingga H-3 tergantung jumlah pesanan.'],
                ['title' => 'Rasa Autentik Nusantara', 'desc' => 'Resep rumahan dengan cita rasa khas yang konsisten.'],
            ];
        @endphp
        @foreach($features as $f)
        <div class="text-center">
            <div class="w-14 h-14 mx-auto rounded-full bg-cnb-gold/10 border border-cnb-gold flex items-center justify-center mb-4">
                <span class="text-cnb-gold font-serif text-xl">✦</span>
            </div>
            <h3 class="font-semibold mb-1">{{ $f['title'] }}</h3>
            <p class="text-sm text-cnb-gray">{{ $f['desc'] }}</p>
        </div>
        @endforeach
    </div>
</section>

<!-- PREVIEW KATEGORI -->
<section class="bg-white py-20">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-12">
            <p class="text-cnb-gold font-semibold text-sm tracking-widest">PILIHAN MENU</p>
            <h2 class="font-serif text-3xl font-bold mt-2">Kategori Favorit</h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            @forelse($categories as $i => $category)
                <a href="{{ route('menu.show', $category->slug) }}" class="group block overflow-hidden rounded-xl shadow-md hover:shadow-xl transition">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://placehold.co/500x400/1A1A1A/D4AF37?text={{ urlencode($category->name) }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="p-5 bg-white">
                        <h3 class="font-serif font-semibold text-lg">{{ $category->name }}</h3>
                        <span class="text-cnb-gold text-sm">Lihat Paket →</span>
                    </div>
                </a>
            @empty
                {{-- Dummy fallback kalau data kategori masih kosong --}}
                @foreach(['Nasi Box', 'Tumpeng', 'Snack Box'] as $dummy)
                <div class="block overflow-hidden rounded-xl shadow-md">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://placehold.co/500x400/1A1A1A/D4AF37?text={{ urlencode($dummy) }}" class="w-full h-full object-cover">
                    </div>
                    <div class="p-5 bg-white">
                        <h3 class="font-serif font-semibold text-lg">{{ $dummy }}</h3>
                        <span class="text-cnb-gold text-sm">Segera Hadir</span>
                    </div>
                </div>
                @endforeach
            @endforelse
        </div>
    </div>
</section>

<!-- TENTANG SINGKAT -->
<section class="max-w-6xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-12 items-center">
    <img src="https://placehold.co/600x500/FDFBF7/1A1A1A?text=Foto+Dapur" class="rounded-xl shadow-lg">
    <div>
        <p class="text-cnb-gold font-semibold text-sm tracking-widest">TENTANG KAMI</p>
        <h2 class="font-serif text-3xl font-bold mt-2 mb-4">Dibuat dengan Hati, Disajikan dengan Bangga</h2>
        <p class="text-cnb-gray mb-4">
            Sejak berdiri, Catering Nusantara Bogor berkomitmen menghadirkan hidangan khas Nusantara dengan cita rasa rumahan yang hangat untuk setiap acara Anda.
        </p>
        <a href="{{ route('about') }}" class="text-cnb-gold font-semibold hover:underline">Selengkapnya tentang kami →</a>
    </div>
</section>

<!-- TESTIMONI -->
<section class="bg-cnb-black text-cnb-cream py-20">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-12">
            <p class="text-cnb-gold font-semibold text-sm tracking-widest">KATA MEREKA</p>
            <h2 class="font-serif text-3xl font-bold mt-2">Testimoni Pelanggan</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            @forelse($testimonials as $t)
                <div class="bg-white/5 border border-cnb-gold/20 rounded-xl p-6">
                    <p class="text-cnb-gold mb-3">★★★★★</p>
                    <p class="text-sm text-gray-300 mb-4">"{{ $t->review }}"</p>
                    <p class="font-semibold text-sm">{{ $t->client_name }}</p>
                    <p class="text-xs text-gray-400">{{ $t->event_type }}</p>
                </div>
            @empty
                @for($i = 0; $i < 3; $i++)
                <div class="bg-white/5 border border-cnb-gold/20 rounded-xl p-6">
                    <p class="text-cnb-gold mb-3">★★★★★</p>
                    <p class="text-sm text-gray-300 mb-4">"Testimoni pelanggan akan tampil di sini setelah data tersedia."</p>
                    <p class="font-semibold text-sm">Nama Pelanggan</p>
                    <p class="text-xs text-gray-400">Jenis Acara</p>
                </div>
                @endfor
            @endforelse
        </div>
    </div>
</section>

<!-- CTA -->
<section class="max-w-4xl mx-auto px-6 py-20 text-center">
    <h2 class="font-serif text-3xl font-bold mb-4">Siap Memesan untuk Acara Anda?</h2>
    <p class="text-cnb-gray mb-8">Konsultasikan kebutuhan catering Anda langsung dengan tim kami via WhatsApp.</p>
    <a href="https://wa.me/6280000000000" target="_blank" class="bg-cnb-gold hover:bg-cnb-gold-light text-cnb-black font-semibold px-8 py-3 rounded-full transition">
        Hubungi Kami Sekarang
    </a>
</section>

@endsection