<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Catering Nusantara Bogor')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-cnb-cream text-cnb-wood-dark min-h-screen flex flex-col justify-between"
      x-data="cartStore()"
      x-init="initCart()">

    {{-- NAVBAR --}}
    <nav class="sticky top-0 z-50 bg-cnb-wood-dark/95 backdrop-blur text-cnb-cream shadow-lg border-b border-cnb-gold/20">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="bg-cnb-cream/95 p-1.5 rounded-xl shadow-md border border-cnb-gold/40 flex items-center justify-center transition duration-300 group-hover:scale-105">
                    <img src="{{ asset('images/logocateringnobg.png') }}" alt="Logo Catering Nusantara Bogor" class="h-9 w-auto object-contain">
                </div>
                <span class="font-serif font-bold text-xl tracking-wide text-white group-hover:text-cnb-gold transition duration-300">Catering <span class="text-cnb-gold">Nusantara</span></span>
            </a>

            {{-- Desktop Menu --}}
            <div class="space-x-8 text-sm font-medium hidden md:flex items-center">
                <a href="{{ route('home') }}" class="hover:text-cnb-gold transition {{ request()->routeIs('home') ? 'text-cnb-gold font-bold' : '' }}">Beranda</a>
                <a href="{{ route('menu.index') }}" class="hover:text-cnb-gold transition {{ request()->routeIs('menu.*') ? 'text-cnb-gold font-bold' : '' }}">Menu</a>
                <a href="{{ route('about') }}" class="hover:text-cnb-gold transition {{ request()->routeIs('about') ? 'text-cnb-gold font-bold' : '' }}">Tentang</a>
                <a href="{{ route('cara-pesan') }}" class="hover:text-cnb-gold transition {{ request()->routeIs('cara-pesan') ? 'text-cnb-gold font-bold' : '' }}">Cara Pesan</a>
            </div>

            <div class="flex items-center gap-3">
                <button @click="isDrawerOpen = true"
                        class="relative bg-white/10 hover:bg-white/20 border border-cnb-gold/30 text-cnb-gold text-sm font-semibold px-4 py-2.5 rounded-full transition-all flex items-center gap-2">
                    <svg class="w-4 h-4 text-cnb-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 100 4 2 2 0 000-4z"/>
                    </svg>
                    <span>Keranjang</span>
                    <span x-show="cartItems.length > 0"
                          x-text="cartItems.length"
                          class="bg-cnb-gold text-cnb-wood-dark text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center"></span>
                </button>

                <a href="https://wa.me/628561155113" target="_blank"
                   class="hidden sm:inline-flex bg-cnb-gold text-cnb-wood-dark text-sm font-semibold px-5 py-2.5 rounded-full hover:bg-cnb-gold-light transition-all duration-300 shadow-md">
                    Pesan Sekarang
                </a>

                {{-- Mobile Hamburger Button --}}
                <button @click="isNavOpen = !isNavOpen"
                        class="md:hidden text-cnb-gold hover:text-white p-2 rounded-lg bg-white/10 border border-cnb-gold/30 transition-all focus:outline-none"
                        aria-label="Menu Utama">
                    <svg class="w-6 h-6" x-show="!isNavOpen" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg class="w-6 h-6" x-show="isNavOpen" style="display:none;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile Navigation Drawer / Dropdown --}}
        <div x-show="isNavOpen"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-2"
             class="md:hidden bg-cnb-wood-dark border-t border-cnb-gold/20 px-6 py-4 space-y-3"
             style="display: none;">
            <a href="{{ route('home') }}" @click="isNavOpen = false"
               class="block py-2 text-base font-semibold transition border-b border-white/5 {{ request()->routeIs('home') ? 'text-cnb-gold' : 'text-white hover:text-cnb-gold' }}">
                Beranda
            </a>
            <a href="{{ route('menu.index') }}" @click="isNavOpen = false"
               class="block py-2 text-base font-semibold transition border-b border-white/5 {{ request()->routeIs('menu.*') ? 'text-cnb-gold' : 'text-white hover:text-cnb-gold' }}">
                Menu Catering
            </a>
            <a href="{{ route('about') }}" @click="isNavOpen = false"
               class="block py-2 text-base font-semibold transition border-b border-white/5 {{ request()->routeIs('about') ? 'text-cnb-gold' : 'text-white hover:text-cnb-gold' }}">
                Tentang Kami
            </a>
            <a href="{{ route('cara-pesan') }}" @click="isNavOpen = false"
               class="block py-2 text-base font-semibold transition border-b border-white/5 {{ request()->routeIs('cara-pesan') ? 'text-cnb-gold' : 'text-white hover:text-cnb-gold' }}">
                Cara Pesan
            </a>
            <div class="pt-2">
                <a href="https://wa.me/628561155113" target="_blank"
                   class="w-full inline-flex items-center justify-center gap-2 bg-cnb-gold text-cnb-wood-dark font-bold text-sm py-3 rounded-full hover:bg-cnb-gold-light transition shadow-md">
                    <span>Pesan via WhatsApp</span>
                </a>
            </div>
        </div>
    </nav>

    {{-- MAIN CONTENT --}}
    <main class="grow">
        @yield('content')
    </main>

   {{-- FOOTER --}}
<footer class="bg-cnb-wood-dark text-cnb-cream pt-16 pb-10 batik-pattern-footer">
    <div class="max-w-6xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-4 gap-10">
        <div class="space-y-4">
            <h3 class="font-serif text-2xl font-bold tracking-wide">
                Catering <span class="text-cnb-gold">Nusantara</span>
            </h3>
            <p class="text-base text-cnb-cream/70 leading-relaxed">
                Penyedia catering terpercaya untuk nasi box, tumpeng, dan snack box khas Nusantara. Siap melayani berbagai acara spesial Anda dengan cita rasa autentik.
            </p>
        </div>

        <div>
            <h4 class="font-semibold text-lg mb-4 text-cnb-gold tracking-wide">Navigasi</h4>
            <ul class="text-base space-y-3 text-cnb-cream/70">
                <li><a href="{{ route('home') }}" class="hover:text-cnb-gold transition duration-200 block">Beranda</a></li>
                <li><a href="{{ route('menu.index') }}" class="hover:text-cnb-gold transition duration-200 block">Menu Catering</a></li>
                <li><a href="{{ route('about') }}" class="hover:text-cnb-gold transition duration-200 block">Tentang Kami</a></li>
                <li><a href="{{ route('cara-pesan') }}" class="hover:text-cnb-gold transition duration-200 block">Cara Pesan</a></li>
            </ul>
        </div>

        <div>
            <h4 class="font-semibold text-lg mb-4 text-cnb-gold tracking-wide">Jam Layanan</h4>
            <ul class="text-base space-y-2 text-cnb-cream/70">
                <li><span class="font-medium text-white">Senin - Sabtu:</span> 08.00 - 18.00 WIB</li>
                <li><span class="font-medium text-white">Minggu:</span> Khusus Pesanan Khusus</li>
                <li class="pt-2 text-sm text-cnb-cream/50">* Menerima pemesanan H-2 acara.</li>
            </ul>
        </div>

        <div>
            <h4 class="font-semibold text-lg mb-4 text-cnb-gold tracking-wide">Kontak & Dapur</h4>
            <div class="text-sm space-y-3 text-cnb-cream/70">
                <p>
                    <span class="font-semibold text-white block mb-0.5">WhatsApp:</span> 0856-1155-113
                </p>
                <p>
                    <span class="font-semibold text-white block mb-0.5">Alamat Dapur:</span>
                    9Q7F+3X6 Depan Raja Gadai, Jl. Raya Ciapus, Sukamantri, Kec. Tamansari, Kab. Bogor, Jawa Barat 16610
                </p>
                <a href="https://maps.app.goo.gl/zPY29kQVaqhEHYFZ6" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 text-xs text-cnb-gold hover:underline font-semibold pt-1">
                    <svg class="w-4 h-4 text-cnb-gold shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    Buka Google Maps
                </a>
            </div>
        </div>
    </div>

    <div class="text-center text-sm text-cnb-cream/50 py-6 border-t border-white/10">
        &copy; {{ date('Y') }} Catering Nusantara Bogor. All rights reserved.
    </div>
</footer>

    {{-- FLOATING ACTIONS (KERANJANG + WHATSAPP) --}}
    <div class="fixed bottom-6 right-6 z-50 flex flex-col gap-3 items-end">
        {{-- Floating Cart Button --}}
        <button @click="isDrawerOpen = true"
                aria-label="Buka Keranjang"
                class="relative bg-cnb-wood-dark border-2 border-cnb-gold text-cnb-gold rounded-full w-14 h-14 flex items-center justify-center shadow-2xl transition-all duration-300 hover:scale-110">
            <svg class="w-6 h-6 text-cnb-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 100 4 2 2 0 000-4z"/>
            </svg>
            <span x-show="cartItems.length > 0"
                  x-text="cartItems.length"
                  class="absolute -top-1 -right-1 bg-cnb-gold text-cnb-wood-dark text-xs font-bold rounded-full w-6 h-6 flex items-center justify-center border-2 border-cnb-wood-dark"></span>
        </button>

        {{-- Floating WhatsApp --}}
        <a href="https://wa.me/628561155113" target="_blank"
           aria-label="Chat WhatsApp"
           class="bg-green-500 hover:bg-green-600 text-white rounded-full w-14 h-14 flex items-center justify-center shadow-2xl transition-all duration-300 hover:scale-110">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
                <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2 22l5.29-1.39c1.44.79 3.06 1.2 4.71 1.2h.01c5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.05 2h-.01zm5.8 14.1c-.24.68-1.4 1.32-1.93 1.4-.5.08-1.12.11-1.8-.11-.42-.13-.96-.31-1.65-.6-2.9-1.25-4.8-4.17-4.94-4.36-.14-.19-1.19-1.58-1.19-3.01 0-1.43.75-2.13 1.02-2.42.27-.29.58-.36.78-.36.2 0 .39 0 .56.01.18.01.42-.07.66.5.24.58.83 2.01.9 2.16.07.15.12.32.02.51-.1.19-.15.31-.29.48-.15.17-.31.38-.44.51-.15.15-.3.31-.13.6.17.29.75 1.24 1.62 2.01 1.11.99 2.05 1.3 2.34 1.44.29.15.46.13.63-.08.17-.2.72-.84.92-1.13.19-.29.39-.24.66-.14.27.1 1.69.8 1.98.94.29.15.48.22.55.34.07.13.07.72-.17 1.4z"/>
            </svg>
        </a>
    </div>

    {{-- SHOPPING CART DRAWER MODAL --}}
    <div x-show="isDrawerOpen"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 bg-cnb-wood-dark/70 backdrop-blur-sm flex justify-end"
         style="display: none;">

        <div @click.outside="isDrawerOpen = false"
             class="w-full max-w-lg bg-white h-full shadow-2xl flex flex-col justify-between overflow-y-auto">

            {{-- Header --}}
            <div class="p-6 bg-cnb-wood-dark text-cnb-cream flex items-center justify-between border-b border-cnb-gold/30">
                <div class="flex items-center gap-3">
                    <svg class="w-6 h-6 text-cnb-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 100 4 2 2 0 000-4z"/>
                    </svg>
                    <div>
                        <h2 class="font-serif font-bold text-xl text-white">Keranjang Pesanan</h2>
                        <p class="text-xs text-cnb-gold font-sans">Hitung porsi & estimasi harga langsung</p>
                    </div>
                </div>
                <button @click="isDrawerOpen = false" class="text-white/70 hover:text-white text-xl font-bold p-1">Tutup</button>
            </div>

            {{-- Body List --}}
            <div class="p-6 grow overflow-y-auto space-y-6">

                <template x-if="cartItems.length === 0">
                    <div class="text-center py-16 space-y-4">
                        <h3 class="font-serif text-xl font-bold text-cnb-wood-dark">Keranjang Masih Kosong</h3>
                        <p class="text-sm text-cnb-gray max-w-xs mx-auto">Silakan pilih menu catering favorit Anda terlebih dahulu.</p>
                        <button @click="isDrawerOpen = false" class="inline-block bg-cnb-gold text-cnb-wood-dark font-bold text-sm px-6 py-3 rounded-full hover:bg-cnb-gold-light transition">
                            Lihat Katalog Menu
                        </button>
                    </div>
                </template>

                <template x-for="(item, index) in cartItems" :key="index">
                    <div class="bg-cnb-cream/40 border border-cnb-gold/20 rounded-2xl p-5 space-y-3 relative group">
                        <button @click="removeItem(index)" class="absolute top-4 right-4 text-xs font-semibold text-red-600 hover:underline">Hapus</button>

                        <div class="pr-12">
                            <span class="text-xs font-semibold px-2.5 py-0.5 rounded-full bg-cnb-gold/20 text-cnb-wood-dark" x-text="item.category"></span>
                            <h4 class="font-serif font-bold text-lg text-cnb-wood-dark mt-1" x-text="item.name"></h4>
                            <p class="text-xs text-cnb-gray" x-text="'Rp ' + formatRupiah(item.price) + ' / pax'"></p>
                        </div>

                        <div class="flex items-center justify-between pt-2 border-t border-cnb-gold/15">
                            <div>
                                <label class="text-xs font-semibold text-cnb-wood-dark block mb-1">Jumlah Porsi (Pax)</label>
                                <div class="flex items-center gap-2">
                                    <button @click="updateQty(index, item.qty - 5)" class="w-8 h-8 rounded-lg bg-cnb-wood-dark text-white font-bold text-sm flex items-center justify-center hover:bg-cnb-gold hover:text-cnb-wood-dark transition">-</button>
                                    <input type="number"
                                           :value="item.qty"
                                           @input="updateQty(index, parseInt($event.target.value) || 0)"
                                           class="w-16 text-center border border-cnb-gold/30 rounded-lg py-1 text-sm font-bold text-cnb-wood-dark">
                                    <button @click="updateQty(index, item.qty + 5)" class="w-8 h-8 rounded-lg bg-cnb-wood-dark text-white font-bold text-sm flex items-center justify-center hover:bg-cnb-gold hover:text-cnb-wood-dark transition">+</button>
                                </div>
                                <span x-show="item.qty < item.minOrder" class="text-[11px] text-amber-700 block mt-1">
                                    * Min. Order <span x-text="item.minOrder"></span> pax
                                </span>
                            </div>

                            <div class="text-right">
                                <span class="text-xs text-cnb-gray block">Subtotal:</span>
                                <span class="font-serif font-bold text-lg text-cnb-gold" x-text="'Rp ' + formatRupiah(item.qty * item.price)"></span>
                            </div>
                        </div>
                    </div>
                </template>

                {{-- FORM DATA PEMESAN --}}
                <div x-show="cartItems.length > 0" class="border-t border-cnb-gold/20 pt-6 space-y-4">
                    <h3 class="font-serif font-bold text-lg text-cnb-wood-dark flex items-center gap-2">
                        <span>Data Pemesan & Acara</span>
                    </h3>

                    <div>
                        <label class="block text-xs font-semibold text-cnb-wood-dark mb-1">Nama Pemesan *</label>
                        <input type="text" x-model="customer.name" placeholder="Contoh: Ibu Ani / Bpk Budi"
                               class="w-full border border-cnb-gold/30 focus:border-cnb-gold outline-none rounded-xl px-3.5 py-2.5 text-sm">
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <div>
                            <label class="block text-xs font-semibold text-cnb-wood-dark mb-1">Tanggal Acara *</label>
                            <input type="date" x-model="customer.date" :min="getMinDate()"
                                   class="w-full border border-cnb-gold/30 focus:border-cnb-gold outline-none rounded-xl px-3.5 py-2.5 text-sm bg-white font-medium text-cnb-wood-dark cursor-pointer">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-cnb-wood-dark mb-1">Jam Acara *</label>
                            <input type="time" x-model="customer.time"
                                   class="w-full border border-cnb-gold/30 focus:border-cnb-gold outline-none rounded-xl px-3.5 py-2.5 text-sm bg-white font-medium text-cnb-wood-dark cursor-pointer">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-cnb-wood-dark mb-1">Alamat Pengiriman (Bogor & Jabodetabek) *</label>
                        <textarea x-model="customer.address" rows="2" placeholder="Contoh: Jl. Pajajaran No. 12, Bogor Timur"
                                  class="w-full border border-cnb-gold/30 focus:border-cnb-gold outline-none rounded-xl px-3.5 py-2.5 text-sm"></textarea>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-cnb-wood-dark mb-1">Catatan Tambahan (Opsional)</label>
                        <textarea x-model="customer.notes" rows="2" placeholder="Contoh: Sambal dipisah, minta sendok plastik ekstra"
                                  class="w-full border border-cnb-gold/30 focus:border-cnb-gold outline-none rounded-xl px-3.5 py-2.5 text-sm"></textarea>
                    </div>
                </div>
            </div>

            {{-- Footer Summary & Action --}}
            <div x-show="cartItems.length > 0" class="p-6 bg-cnb-wood-dark text-cnb-cream space-y-4 border-t border-cnb-gold/30">
                <div class="flex justify-between items-center text-sm">
                    <span class="text-white/70">Total Pax / Porsi:</span>
                    <span class="font-bold text-white" x-text="getTotalPax() + ' Pax'"></span>
                </div>
                <div class="flex justify-between items-center text-lg">
                    <span class="font-serif font-bold text-white">Estimasi Total Harga:</span>
                    <span class="font-serif font-bold text-2xl text-cnb-gold" x-text="'Rp ' + formatRupiah(getTotalPrice())"></span>
                </div>

                <button @click="checkoutWhatsApp()"
                        class="w-full bg-cnb-gold hover:bg-cnb-gold-light text-cnb-wood-dark font-sans font-bold text-base py-4 rounded-full transition shadow-lg flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" /></svg>
                    <span>Kirim Pesanan via WhatsApp</span>
                </button>
            </div>
        </div>
    </div>

    {{-- CART JS SCRIPT --}}
    <script>
        function cartStore() {
            return {
                isDrawerOpen: false,
                isNavOpen: false,
                cartItems: [],
                customer: {
                    name: '',
                    date: '',
                    time: '11:00',
                    address: '',
                    notes: ''
                },

                getMinDate() {
                    const today = new Date();
                    today.setDate(today.getDate() + 1);
                    return today.toISOString().split('T')[0];
                },

                getFormattedEventDateTime() {
                    if (!this.customer.date) return '-';
                    try {
                        const dateObj = new Date(this.customer.date + 'T00:00:00');
                        const formattedDate = new Intl.DateTimeFormat('id-ID', {
                            weekday: 'long',
                            day: 'numeric',
                            month: 'long',
                            year: 'numeric'
                        }).format(dateObj);

                        const timeStr = this.customer.time ? ` (Jam ${this.customer.time} WIB)` : '';
                        return `${formattedDate}${timeStr}`;
                    } catch(e) {
                        return `${this.customer.date} ${this.customer.time || ''}`;
                    }
                },

                initCart() {
                    const saved = localStorage.getItem('cnb_cart');
                    if (saved) {
                        try { this.cartItems = JSON.parse(saved); } catch(e){}
                    }
                    window.addEventListener('add-to-cart', (e) => {
                        this.addItem(e.detail);
                    });
                },

                saveCart() {
                    localStorage.setItem('cnb_cart', JSON.stringify(this.cartItems));
                },

                addItem(item) {
                    const idx = this.cartItems.findIndex(i => i.name === item.name);
                    const defaultMin = item.minOrder || 30;
                    if (idx > -1) {
                        this.cartItems[idx].qty += (item.qty || defaultMin);
                    } else {
                        this.cartItems.push({
                            name: item.name,
                            category: item.category || 'Menu Catering',
                            price: item.price || 25000,
                            minOrder: defaultMin,
                            qty: item.qty || defaultMin
                        });
                    }
                    this.saveCart();
                    this.isDrawerOpen = true;
                },

                removeItem(index) {
                    this.cartItems.splice(index, 1);
                    this.saveCart();
                },

                updateQty(index, newQty) {
                    if (newQty < 1) newQty = 1;
                    this.cartItems[index].qty = newQty;
                    this.saveCart();
                },

                getTotalPax() {
                    return this.cartItems.reduce((acc, item) => acc + item.qty, 0);
                },

                getTotalPrice() {
                    return this.cartItems.reduce((acc, item) => acc + (item.qty * item.price), 0);
                },

                formatRupiah(num) {
                    return new Intl.NumberFormat('id-ID').format(num);
                },

                checkoutWhatsApp() {
                    if (this.cartItems.length === 0) return;
                    if (!this.customer.name.trim()) {
                        alert('Silakan isi Nama Pemesan terlebih dahulu.');
                        return;
                    }
                    if (!this.customer.date) {
                        alert('Silakan pilih Tanggal Acara terlebih dahulu.');
                        return;
                    }

                    let message = `Halo Catering Nusantara Bogor!\n\n`;
                    message += `Saya *${this.customer.name}* ingin memesan catering dengan rincian berikut:\n\n`;
                    message += `RINCIAN MENU ACARA:\n`;

                    this.cartItems.forEach((item, i) => {
                        const subtotal = item.qty * item.price;
                        message += `${i+1}. *${item.name}*\n`;
                        message += `   - Jumlah: ${item.qty} Pax\n`;
                        message += `   - Harga: Rp ${this.formatRupiah(item.price)} / pax\n`;
                        message += `   - Subtotal: Rp ${this.formatRupiah(subtotal)}\n\n`;
                    });

                    message += `==============================\n`;
                    message += `TOTAL ESTIMASI HARGA: Rp ${this.formatRupiah(this.getTotalPrice())}\n`;
                    message += `==============================\n\n`;

                    message += `INFORMASI PEMESAN & ACARA:\n`;
                    message += `- Nama Pemesan: ${this.customer.name}\n`;
                    message += `- Tanggal & Jam Acara: ${this.getFormattedEventDateTime()}\n`;
                    message += `- Alamat Kirim: ${this.customer.address || '-'}\n`;
                    if (this.customer.notes) {
                        message += `- Catatan: ${this.customer.notes}\n`;
                    }
                    message += `\nMohon konfirmasi ketersediaan slot & instruksi pembayaran DP-nya. Terima kasih.`;

                    const waUrl = `https://wa.me/628561155113?text=${encodeURIComponent(message)}`;
                    window.open(waUrl, '_blank');

                    // Kosongkan keranjang setelah pesanan dikirim via WhatsApp
                    this.cartItems = [];
                    this.customer = { name: '', date: '', time: '11:00', address: '', notes: '' };
                    this.saveCart();
                    this.isDrawerOpen = false;
                }
            }
        }

        // Global helper
        window.quickAddToCart = function(name, category, price, minOrder) {
            window.dispatchEvent(new CustomEvent('add-to-cart', {
                detail: { name, category, price, minOrder }
            }));
        };
    </script>

</body>
</html>