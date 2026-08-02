@extends('layouts.app')

@section('title', ($category->name ?? 'Menu') . ' - Catering Nusantara Bogor')

@section('content')
<div class="bg-cnb-black text-cnb-cream py-16 text-center">
    <p class="text-cnb-gold font-semibold text-sm tracking-widest">MENU</p>
    <h1 class="font-serif text-4xl font-bold mt-2">{{ $category->name }}</h1>
</div>

<div class="max-w-6xl mx-auto px-6 py-16">
    <div class="grid md:grid-cols-3 gap-8">
        @forelse($packages as $package)
            <div class="rounded-xl overflow-hidden shadow-md bg-white border-t-4 border-cnb-gold">
                <img src="https://placehold.co/500x300/1A1A1A/D4AF37?text={{ urlencode($package->name) }}" class="w-full h-40 object-cover">
                <div class="p-5">
                    <span class="text-xs uppercase font-semibold text-cnb-gold">{{ $package->tier }}</span>
                    <h3 class="font-serif font-semibold text-xl mt-1">{{ $package->name }}</h3>
                    <p class="text-2xl font-bold mt-2">Rp {{ number_format($package->price_per_pax, 0, ',', '.') }}<span class="text-sm font-normal text-cnb-gray">/pax</span></p>
                    <p class="text-sm text-cnb-gray mt-1">Min. order {{ $package->min_order }} pax</p>
                    <a href="https://wa.me/6280000000000" target="_blank" class="block text-center mt-4 bg-cnb-black hover:bg-cnb-gold hover:text-cnb-black text-white py-2 rounded-full transition text-sm font-semibold">
                        Pesan Paket Ini
                    </a>
                </div>
            </div>
        @empty
            @foreach(['Silver', 'Gold', 'Premium'] as $tier)
            <div class="rounded-xl overflow-hidden shadow-md bg-white border-t-4 border-cnb-gold">
                <img src="https://placehold.co/500x300/1A1A1A/D4AF37?text=Paket+{{ $tier }}" class="w-full h-40 object-cover">
                <div class="p-5">
                    <span class="text-xs uppercase font-semibold text-cnb-gold">{{ $tier }}</span>
                    <h3 class="font-serif font-semibold text-xl mt-1">Paket {{ $tier }}</h3>
                    <p class="text-sm text-cnb-gray mt-2">Data harga menyusul dari client.</p>
                </div>
            </div>
            @endforeach
        @endforelse
    </div>

    <div class="text-center mt-12">
        <a href="{{ route('menu.index') }}" class="text-cnb-gold hover:underline">← Kembali ke Semua Menu</a>
    </div>
</div>
@endsection