@extends('layouts.app')

@section('title', 'Galeri - Catering Nusantara Bogor')

@section('content')
<div class="bg-cnb-black text-cnb-cream py-16 text-center">
    <p class="text-cnb-gold font-semibold text-sm tracking-widest">DOKUMENTASI</p>
    <h1 class="font-serif text-4xl font-bold mt-2">Galeri Kami</h1>
</div>

<div class="max-w-6xl mx-auto px-6 py-16">
    <div class="columns-2 md:columns-3 gap-4 space-y-4">
        @for($i = 1; $i <= 9; $i++)
            <img src="https://placehold.co/400x{{ [400,500,350,450,600,400,500,380,420][$i-1] }}/1A1A1A/C9A227?text=Foto+{{ $i }}"
                 class="rounded-lg w-full break-inside-avoid shadow">
        @endfor
    </div>
</div>
@endsection