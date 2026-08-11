@extends('layouts.admin')

@section('title', 'Login Admin - Catering Nusantara Bogor')

@section('content')
<div class="min-h-[85vh] flex items-center justify-center py-12 px-4 sm:px-6">
    <div class="max-w-md w-full bg-white rounded-2xl shadow-2xl overflow-hidden border border-cnb-gold/20">

        {{-- Header Card --}}
        <div class="bg-cnb-wood-dark p-8 text-center text-white batik-pattern relative">
            <h1 class="font-serif text-2xl md:text-3xl font-bold tracking-wide text-white">Panel Admin</h1>
            <p class="text-cnb-gold text-sm font-sans mt-1">Catering Nusantara Bogor</p>
        </div>

        {{-- Form Login --}}
        <div class="p-8 space-y-6" x-data="{ showPassword: false }">
            <div class="text-center">
                <h2 class="font-serif text-xl font-bold text-cnb-wood-dark">Selamat Datang</h2>
                <p class="text-sm text-cnb-gray mt-1">Masukkan username dan password untuk mengelola menu.</p>
            </div>

            @if ($errors->any())
                <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl text-sm font-medium flex items-center gap-2">
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                    </svg>
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('admin.login.submit') }}" class="space-y-5">
                @csrf
                <div>
                    <label class="block text-sm font-semibold text-cnb-wood-dark mb-2">Username</label>
                    <input type="text" name="username" placeholder="Masukkan username admin"
                           class="w-full px-4 py-3.5 border border-cnb-gray/20 focus:border-cnb-gold focus:ring-2 focus:ring-cnb-gold/20 outline-none rounded-xl text-sm text-cnb-wood-dark transition" required>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-cnb-wood-dark mb-2">Password</label>
                    <div class="relative">
                        <input :type="showPassword ? 'text' : 'password'" name="password" placeholder="Masukkan password"
                               class="w-full pl-4 pr-24 py-3.5 border border-cnb-gray/20 focus:border-cnb-gold focus:ring-2 focus:ring-cnb-gold/20 outline-none rounded-xl text-sm text-cnb-wood-dark transition" required>
                        <button type="button" @click="showPassword = !showPassword"
                                class="absolute right-3 top-3 text-xs font-semibold text-cnb-gold hover:text-cnb-gold-light bg-cnb-gold/10 hover:bg-cnb-gold/20 px-2.5 py-1.5 rounded-lg transition focus:outline-none">
                            <span x-text="showPassword ? 'Sembunyikan' : 'Tampilkan'"></span>
                        </button>
                    </div>
                </div>

                <button type="submit"
                        class="w-full bg-cnb-gold hover:bg-cnb-gold-light text-cnb-wood-dark font-bold text-sm py-4 rounded-xl shadow-sm active:scale-95 transition duration-200">
                    Masuk ke Admin Panel
                </button>
            </form>

            <div class="text-center pt-2">
                <a href="{{ route('home') }}" class="text-sm font-semibold text-cnb-gold hover:underline inline-flex items-center gap-1.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Kembali ke Website Utama
                </a>
            </div>
        </div>

    </div>
</div>
@endsection