@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
<h1 class="font-serif text-2xl font-bold mb-6 text-cnb-black">Dashboard</h1>

<div class="grid grid-cols-3 gap-4">
    <div class="bg-white p-4 rounded shadow border-l-4 border-cnb-gold">
        <p class="text-cnb-gray text-sm">Total Kategori</p>
        <p class="text-2xl font-bold text-cnb-black">{{ $totalCategories }}</p>
    </div>
    <div class="bg-white p-4 rounded shadow border-l-4 border-cnb-gold">
        <p class="text-cnb-gray text-sm">Total Paket</p>
        <p class="text-2xl font-bold text-cnb-black">{{ $totalPackages }}</p>
    </div>
    <div class="bg-white p-4 rounded shadow border-l-4 border-cnb-gold">
        <p class="text-cnb-gray text-sm">Total Produk</p>
        <p class="text-2xl font-bold text-cnb-black">{{ $totalProducts }}</p>
    </div>
</div>

<div class="mt-6 space-x-4">
    <a href="{{ route('admin.category.index') }}" class="text-cnb-gold hover:underline">Kelola Kategori</a>
    <a href="{{ route('admin.menu.index') }}" class="text-cnb-gold hover:underline">Kelola Menu</a>
</div>
@endsection