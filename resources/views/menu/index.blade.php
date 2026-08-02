@extends('layouts.app')

@section('title', 'Menu - Catering Nusantara Bogor')

@section('content')
<div class="bg-cnb-black text-cnb-cream py-16 text-center">
    <p class="text-cnb-gold font-semibold text-sm tracking-widest">DAFTAR MENU</p>
    <h1 class="font-serif text-4xl font-bold mt-2">Pilihan Menu Kami</h1>
</div>

<div class="max-w-6xl mx-auto px-6 py-16">
    <div class="grid md:grid-cols-3 gap-8">
        @forelse($categories as $category)
            <a href="{{ route('menu.show', $category->slug) }}" class="group block overflow-hidden rounded-xl shadow-md hover:shadow-xl transition bg-white">
                <div class="relative h-52 overflow-hidden">
                    <img src="https://placehold.co/500x400/1A1A1A/D4AF37?text={{ urlencode($category->name) }}"
                         class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-5">
                    <h3 class="font-serif font-semibold text-lg mb-1">{{ $category->name }}</h3>
                    <p class="text-sm text-cnb-gray mb-3">{{ $category->packages->count() ?? 0 }} pilihan paket tersedia</p>
                    <span class="text-cnb-gold text-sm font-medium">Lihat Paket →</span>
                </div>
            </a>
        @empty
            @foreach(['Nasi Box', 'Tumpeng', 'Snack Box'] as $dummy)
            <div class="block overflow-hidden rounded-xl shadow-md bg-white">
                <div class="relative h-52 overflow-hidden">
                    <img src="https://placehold.co/500x400/1A1A1A/D4AF37?text={{ urlencode($dummy) }}" class="w-full h-full object-cover">
                </div>
                <div class="p-5">
                    <h3 class="font-serif font-semibold text-lg mb-1">{{ $dummy }}</h3>
                    <p class="text-sm text-cnb-gray">Data menyusul dari client</p>
                </div>
            </div>
            @endforeach
        @endforelse
    </div>
</div>
@endsection