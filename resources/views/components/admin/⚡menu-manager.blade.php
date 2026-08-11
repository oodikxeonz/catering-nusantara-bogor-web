<?php

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use App\Models\Package;
use App\Models\Category;
use App\Models\Product;

new #[Layout('layouts.admin')] class extends Component
{
    use WithFileUploads;

    public $packages;
    public $categories;
    public $products;

    public $showModal = false;
    public $showDeleteConfirm = null;
    public $editingId = null;

    public $category_id = '';
    public $product_type = 'nasi_box';
    public $name = '';
    public $price_per_pax = '';
    public $min_order = 30;
    public $description = '';
    public $image;
    public $existingImage = null;
    public $is_customizable = false;
    public $is_available = true;
    public $selectedProducts = [];

    public function mount()
    {
        $this->categories = Category::orderBy('name')->get();
        $this->products = Product::orderBy('name')->get();
        $this->loadPackages();
    }

    public function loadPackages()
    {
        $this->packages = Package::with('category', 'products')->orderBy('name')->get();
    }

    public function openCreate()
    {
        $this->resetForm();
        $this->showModal = true;
    }

    public function openEdit($id)
    {
        $package = Package::with('products')->findOrFail($id);
        $this->editingId = $package->id;
        $this->category_id = $package->category_id;
        $this->product_type = $package->product_type;
        $this->name = $package->name;
        $this->price_per_pax = $package->price_per_pax;
        $this->min_order = $package->min_order;
        $this->description = $package->description;
        $this->existingImage = $package->image;
        $this->is_customizable = $package->is_customizable;
        $this->is_available = $package->is_available;
        $this->selectedProducts = $package->products->pluck('id')->toArray();
        $this->image = null;
        $this->showModal = true;
    }

    public function resetForm()
    {
        $this->editingId = null;
        $this->category_id = '';
        $this->product_type = 'nasi_box';
        $this->name = '';
        $this->price_per_pax = '';
        $this->min_order = 30;
        $this->description = '';
        $this->image = null;
        $this->existingImage = null;
        $this->is_customizable = false;
        $this->is_available = true;
        $this->selectedProducts = [];
    }

    public function save()
    {
        $this->validate([
            'category_id' => 'required|exists:categories,id',
            'product_type' => 'required|in:nasi_box,tumpeng,snack_box',
            'name' => 'required|string|max:255',
            'price_per_pax' => 'required|numeric|min:0',
            'min_order' => 'required|integer|min:1',
            'image' => 'nullable|image|max:2048',
        ], [
            'category_id.required' => 'Silakan pilih Kategori terlebih dahulu.',
            'name.required' => 'Nama Paket wajib diisi.',
            'price_per_pax.required' => 'Harga per Pax wajib diisi.',
        ]);

        $data = [
            'category_id' => $this->category_id,
            'product_type' => $this->product_type,
            'name' => $this->name,
            'price_per_pax' => $this->price_per_pax,
            'min_order' => $this->min_order,
            'description' => $this->description,
            'is_customizable' => $this->is_customizable,
            'is_available' => $this->is_available,
        ];

        if ($this->image) {
            $data['image'] = $this->image->store('packages', 'public');
        }

        if ($this->editingId) {
            $package = Package::findOrFail($this->editingId);
            $package->update($data);
            session()->flash('message', 'Paket menu berhasil diperbarui!');
        } else {
            $package = Package::create($data);
            session()->flash('message', 'Paket menu baru berhasil ditambahkan!');
        }

        $syncData = [];
        foreach ($this->selectedProducts as $productId) {
            $syncData[$productId] = ['quantity' => 1];
        }
        $package->products()->sync($syncData);

        $this->showModal = false;
        $this->resetForm();
        $this->loadPackages();
    }

    public function confirmDelete($id)
    {
        $this->showDeleteConfirm = $id;
    }

    public function delete()
    {
        Package::findOrFail($this->showDeleteConfirm)->delete();
        session()->flash('message', 'Paket menu berhasil dihapus.');
        $this->showDeleteConfirm = null;
        $this->loadPackages();
    }
};
?>

<div class="space-y-6">
    @if (session('message'))
        <div class="bg-emerald-50 border border-emerald-300 text-emerald-800 px-5 py-4 rounded-xl text-sm font-semibold flex items-center gap-3 shadow-sm">
            <svg class="w-5 h-5 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <span>{{ session('message') }}</span>
        </div>
    @endif

    {{-- Header --}}
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 bg-white p-6 rounded-2xl shadow-sm border border-gray-200">
        <div>
            <h1 class="font-serif text-2xl sm:text-3xl font-bold text-cnb-wood-dark">Kelola Paket Menu Catering</h1>
            <p class="text-sm text-gray-500 mt-1">Atur varian paket, harga per porsi (pax), minimal order, dan isi makanan.</p>
        </div>
        <button type="button" wire:click="openCreate"
                class="bg-cnb-gold hover:bg-cnb-gold-light text-cnb-wood-dark font-bold text-sm px-6 py-3 rounded-xl shadow-sm active:scale-95 transition flex items-center justify-center gap-2 whitespace-nowrap cursor-pointer">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/>
            </svg>
            Tambah Paket Menu Baru
        </button>
    </div>

    {{-- List Cards --}}
    <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
        @forelse($packages as $package)
            <div class="bg-white rounded-2xl shadow-sm overflow-hidden border border-gray-200 flex flex-col justify-between hover:border-cnb-gold transition duration-300">
                <div>
                    <div class="relative h-44 overflow-hidden bg-cnb-wood-dark">
                        <img src="{{ $package->image ? asset('storage/' . $package->image) : 'https://placehold.co/500x400/5C4030/F3EAD9?text=Belum+Ada+Foto' }}"
                             class="w-full h-full object-cover hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-linear-to-t from-cnb-wood-dark/70 via-transparent to-transparent"></div>

                        <div class="absolute top-3 left-3">
                            <span class="bg-cnb-wood-dark/90 text-cnb-gold text-xs font-bold px-2.5 py-1 rounded-lg border border-cnb-gold/30">
                                {{ $package->category->name ?? 'Menu' }}
                            </span>
                        </div>
                        <div class="absolute top-3 right-3">
                            @if($package->is_available)
                                <span class="bg-emerald-600 text-white text-xs font-bold px-2.5 py-1 rounded-lg">Aktif</span>
                            @else
                                <span class="bg-gray-600 text-white text-xs font-bold px-2.5 py-1 rounded-lg">Nonaktif</span>
                            @endif
                        </div>
                    </div>

                    <div class="p-5 space-y-2">
                        <div class="flex justify-between items-start gap-2">
                            <h3 class="font-serif text-lg font-bold text-cnb-wood-dark leading-snug">{{ $package->name }}</h3>
                            <div class="text-right shrink-0">
                                <span class="font-serif font-bold text-cnb-gold text-base">Rp{{ number_format($package->price_per_pax, 0, ',', '.') }}</span>
                                <span class="text-xs text-gray-400 block">/pax</span>
                            </div>
                        </div>

                        <span class="inline-block text-xs text-amber-800 bg-amber-50 border border-amber-200 px-2.5 py-1 rounded-lg font-semibold">
                            Min. Order: {{ $package->min_order }} pax
                        </span>

                        <p class="text-xs text-gray-500 line-clamp-2 leading-relaxed pt-0.5">
                            @forelse($package->products as $product)
                                {{ $product->name }}{{ !$loop->last ? ' · ' : '' }}
                            @empty
                                Belum ada daftar lauk yang dipilih.
                            @endforelse
                        </p>
                    </div>
                </div>

                <div class="px-5 pb-5 grid grid-cols-2 gap-2">
                    <button type="button" wire:click="openEdit({{ $package->id }})"
                            class="w-full bg-gray-100 hover:bg-cnb-gold/20 text-cnb-wood-dark font-semibold text-sm py-2.5 rounded-xl active:scale-95 transition flex items-center justify-center gap-1.5 cursor-pointer">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                        Ubah
                    </button>
                    <button type="button" wire:click="confirmDelete({{ $package->id }})"
                            class="w-full bg-red-50 hover:bg-red-100 text-red-600 font-semibold text-sm py-2.5 rounded-xl active:scale-95 transition flex items-center justify-center gap-1.5 cursor-pointer">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                        </svg>
                        Hapus
                    </button>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center py-16 bg-white rounded-2xl border border-gray-200 px-8">
                <div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gray-100 flex items-center justify-center">
                    <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                </div>
                <h3 class="font-serif text-xl font-bold text-cnb-wood-dark mb-1">Belum Ada Paket Menu</h3>
                <p class="text-gray-500 text-sm mb-6 max-w-sm mx-auto">Klik tombol di atas untuk menambah paket menu baru.</p>
                <button type="button" wire:click="openCreate" class="bg-cnb-gold text-cnb-wood-dark font-bold px-6 py-2.5 rounded-xl hover:bg-cnb-gold-light transition text-sm cursor-pointer">
                    Tambah Paket Menu Baru
                </button>
            </div>
        @endforelse
    </div>

    {{-- MODAL FORM --}}
    @if($showModal)
        <div class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-end sm:items-center justify-center z-50 p-0 sm:p-4">
            <div class="bg-white rounded-t-3xl sm:rounded-2xl shadow-2xl max-w-2xl w-full p-6 sm:p-8 max-h-[92vh] overflow-y-auto">
                <div class="flex items-center justify-between border-b border-gray-100 pb-4 mb-6">
                    <h2 class="font-serif text-xl font-bold text-cnb-wood-dark">
                        {{ $editingId ? 'Ubah Paket Menu' : 'Paket Menu Baru' }}
                    </h2>
                    <button wire:click="$set('showModal', false)"
                            class="w-8 h-8 flex items-center justify-center rounded-lg hover:bg-gray-100 transition text-gray-500 hover:text-gray-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                <form wire:submit.prevent="save" class="space-y-5">
                    @if($categories->isEmpty())
                        <div class="bg-amber-50 border border-amber-300 text-amber-800 px-4 py-3 rounded-xl text-xs font-semibold flex items-center justify-between gap-2">
                            <span>Belum ada Kategori. Silakan buat kategori di menu "Kategori" terlebih dahulu.</span>
                            <a href="{{ route('admin.category.index') }}" wire:navigate class="underline font-bold hover:text-amber-900 shrink-0">Kelola Kategori</a>
                        </div>
                    @endif

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1.5">Kategori Menu *</label>
                            <select wire:model="category_id" class="w-full border border-gray-300 focus:border-cnb-gold outline-none rounded-xl px-4 py-3 text-sm text-gray-800 bg-white">
                                <option value="">{{ $categories->isEmpty() ? '-- Belum Ada Kategori --' : '-- Pilih Kategori --' }}</option>
                                @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id') <p class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1.5">Jenis Sajian</label>
                            <select wire:model="product_type" class="w-full border border-gray-300 focus:border-cnb-gold outline-none rounded-xl px-4 py-3 text-sm text-gray-800 bg-white">
                                <option value="nasi_box">Nasi Box</option>
                                <option value="tumpeng">Tumpeng</option>
                                <option value="snack_box">Snack Box</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1.5">Nama Paket Menu *</label>
                        <input type="text" wire:model="name" placeholder="Contoh: Nasi Pasundan Empal Spesial"
                               class="w-full border border-gray-300 focus:border-cnb-gold outline-none rounded-xl px-4 py-3 text-sm text-gray-800">
                        @error('name') <p class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</p> @enderror
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1.5">Harga per Pax (Rp) *</label>
                            <input type="number" wire:model="price_per_pax" placeholder="Contoh: 25000"
                                   class="w-full border border-gray-300 focus:border-cnb-gold outline-none rounded-xl px-4 py-3 text-sm text-gray-800">
                            @error('price_per_pax') <p class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1.5">Minimal Order (Pax) *</label>
                            <input type="number" wire:model="min_order" placeholder="30"
                                   class="w-full border border-gray-300 focus:border-cnb-gold outline-none rounded-xl px-4 py-3 text-sm text-gray-800">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1.5">Keterangan Singkat</label>
                        <textarea wire:model="description" rows="2" placeholder="Keterangan singkat rasa atau keunikan..."
                                  class="w-full border border-gray-300 focus:border-cnb-gold outline-none rounded-xl px-4 py-3 text-sm text-gray-800"></textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1.5">Foto Paket Menu</label>
                        <input type="file" wire:model="image" accept="image/*"
                               class="w-full text-sm text-gray-600 file:mr-3 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-cnb-gold/20 file:text-cnb-wood-dark file:font-semibold file:text-sm hover:file:bg-cnb-gold/30">
                        @error('image') <p class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</p> @enderror
                        @if($image)
                            <img src="{{ $image->temporaryUrl() }}" class="mt-3 w-36 h-28 object-cover rounded-xl border border-gray-200">
                        @elseif($existingImage)
                            <img src="{{ asset('storage/' . $existingImage) }}" class="mt-3 w-36 h-28 object-cover rounded-xl border border-gray-200">
                        @endif
                    </div>

                    {{-- Multi Select Products --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1.5">Pilih Isi Lauk / Makanan (Beri tanda centang)</label>
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-2 max-h-48 overflow-y-auto border border-gray-200 rounded-xl p-4 bg-gray-50">
                            @forelse($products as $prod)
                                <label class="flex items-center gap-2 text-sm text-gray-700 cursor-pointer select-none hover:text-cnb-wood-dark">
                                    <input type="checkbox" wire:model="selectedProducts" value="{{ $prod->id }}"
                                           class="w-4 h-4 rounded text-cnb-gold focus:ring-cnb-gold border-gray-300">
                                    <span>{{ $prod->name }}</span>
                                </label>
                            @empty
                                <p class="text-xs text-gray-500 col-span-full">Belum ada lauk yang terdaftar. Tambahkan di menu "Kelola Lauk / Isian".</p>
                            @endforelse
                        </div>
                    </div>

                    {{-- Toggle Status --}}
                    <div class="flex items-center justify-between bg-gray-50 rounded-xl px-5 py-4 border border-gray-200">
                        <div>
                            <span class="text-sm font-semibold text-gray-800 block">Status Tersedia (ON / OFF)</span>
                            <span class="text-xs text-gray-500">Jika OFF, menu akan ditandai habis di website.</span>
                        </div>
                        <button type="button" wire:click="$toggle('is_available')"
                                class="relative w-14 h-8 rounded-full transition duration-300 {{ $is_available ? 'bg-emerald-500' : 'bg-gray-300' }}">
                            <span class="absolute top-0.5 text-[10px] font-bold text-white leading-7 transition-all {{ $is_available ? 'right-2' : 'left-2' }}">
                                {{ $is_available ? 'ON' : 'OFF' }}
                            </span>
                            <span class="absolute top-0.5 w-7 h-7 bg-white rounded-full shadow transition-all {{ $is_available ? 'left-7' : 'left-0.5' }}"></span>
                        </button>
                    </div>

                    <div class="grid grid-cols-2 gap-3 pt-2">
                        <button type="button" wire:click="$set('showModal', false)"
                                class="border border-gray-200 text-gray-600 font-semibold text-sm py-3 rounded-xl active:scale-95 transition hover:bg-gray-50">
                            Batal
                        </button>
                        <button type="submit"
                                wire:loading.attr="disabled"
                                class="bg-cnb-gold hover:bg-cnb-gold-light text-cnb-wood-dark font-bold text-sm py-3 rounded-xl shadow-sm active:scale-95 transition cursor-pointer disabled:opacity-50">
                            <span wire:loading.remove wire:target="save">Simpan Paket Menu</span>
                            <span wire:loading wire:target="save" class="flex items-center justify-center gap-2">
                                <svg class="animate-spin h-4 w-4 text-cnb-wood-dark" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                Menyimpan...
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endif

    {{-- MODAL KONFIRMASI HAPUS --}}
    @if($showDeleteConfirm)
        <div class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center z-50 p-4">
            <div class="bg-white rounded-2xl shadow-2xl max-w-sm w-full p-7 text-center space-y-4">
                <div class="w-14 h-14 mx-auto rounded-full bg-red-100 flex items-center justify-center">
                    <svg class="w-7 h-7 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                    </svg>
                </div>
                <h3 class="font-serif text-xl font-bold text-cnb-wood-dark">Hapus Paket Ini?</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Paket menu akan dihapus dari katalog website secara permanen.</p>

                <div class="grid grid-cols-2 gap-3 pt-2">
                    <button wire:click="$set('showDeleteConfirm', null)"
                            class="border border-gray-200 text-gray-600 font-semibold py-3 rounded-xl active:scale-95 transition hover:bg-gray-50">
                        Batal
                    </button>
                    <button wire:click="delete"
                            class="bg-red-500 hover:bg-red-600 text-white font-bold py-3 rounded-xl shadow active:scale-95 transition">
                        Ya, Hapus
                    </button>
                </div>
            </div>
        </div>
    @endif
</div>