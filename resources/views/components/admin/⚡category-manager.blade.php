<?php

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use App\Models\Category;

new #[Layout('layouts.admin')] class extends Component
{
    use WithFileUploads;

    public $categories;
    public $showModal = false;
    public $showDeleteConfirm = null;
    public $editingId = null;

    public $name = '';
    public $description = '';
    public $image;
    public $existingImage = null;
    public $is_available = true;

    public function mount()
    {
        $this->loadCategories();
    }

    public function loadCategories()
    {
        $this->categories = Category::orderBy('name')->get();
    }

    public function openCreate()
    {
        $this->resetForm();
        $this->showModal = true;
    }

    public function openEdit($id)
    {
        $category = Category::findOrFail($id);
        $this->editingId = $category->id;
        $this->name = $category->name;
        $this->description = $category->description;
        $this->existingImage = $category->image;
        $this->is_available = $category->is_available;
        $this->image = null;
        $this->showModal = true;
    }

    public function resetForm()
    {
        $this->editingId = null;
        $this->name = '';
        $this->description = '';
        $this->image = null;
        $this->existingImage = null;
        $this->is_available = true;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ], [
            'name.required' => 'Nama kategori wajib diisi.',
            'image.image' => 'File harus berupa gambar foto (JPG/PNG).',
            'image.max' => 'Ukuran foto maksimal 2MB.',
        ]);

        $slug = \Illuminate\Support\Str::slug($this->name);
        $originalSlug = $slug;
        $counter = 1;
        while (Category::where('slug', $slug)->where('id', '!=', $this->editingId)->exists()) {
            $slug = $originalSlug . '-' . $counter++;
        }

        $data = [
            'name' => $this->name,
            'slug' => $slug,
            'description' => $this->description,
            'is_available' => $this->is_available,
        ];

        if ($this->image) {
            $data['image'] = $this->image->store('categories', 'public');
        }

        if ($this->editingId) {
            Category::findOrFail($this->editingId)->update($data);
            session()->flash('message', 'Kategori berhasil diperbarui!');
        } else {
            Category::create($data);
            session()->flash('message', 'Kategori baru berhasil ditambahkan!');
        }

        $this->showModal = false;
        $this->resetForm();
        $this->loadCategories();
    }

    public function confirmDelete($id)
    {
        $this->showDeleteConfirm = $id;
    }

    public function delete()
    {
        Category::findOrFail($this->showDeleteConfirm)->delete();
        session()->flash('message', 'Kategori berhasil dihapus.');
        $this->showDeleteConfirm = null;
        $this->loadCategories();
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
            <h1 class="font-serif text-2xl sm:text-3xl font-bold text-cnb-wood-dark">Kelola Kategori Menu</h1>
            <p class="text-sm text-gray-500 mt-1">Kelola kelompok menu utama seperti Nasi Box, Tumpeng, atau Snack Box.</p>
        </div>
        <button type="button" wire:click="openCreate"
                class="bg-cnb-gold hover:bg-cnb-gold-light text-cnb-wood-dark font-bold text-sm px-6 py-3 rounded-xl shadow-sm active:scale-95 transition flex items-center justify-center gap-2 whitespace-nowrap cursor-pointer">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/>
            </svg>
            Tambah Kategori Baru
        </button>
    </div>

    {{-- List Cards --}}
    <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
        @forelse($categories as $category)
            <div class="bg-white rounded-2xl shadow-sm overflow-hidden border border-gray-200 flex flex-col justify-between hover:border-cnb-gold transition duration-300">
                <div>
                    <div class="relative h-44 overflow-hidden bg-cnb-wood-dark">
                        <img src="{{ $category->image ? asset('storage/' . $category->image) : 'https://placehold.co/400x250/3E2A1E/C9A227?text=Belum+Ada+Foto' }}"
                             class="w-full h-full object-cover hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-linear-to-t from-cnb-wood-dark/70 via-transparent to-transparent"></div>

                        <div class="absolute top-3 right-3">
                            @if($category->is_available)
                                <span class="bg-emerald-600 text-white text-xs font-bold px-2.5 py-1 rounded-lg shadow">Tampil di Web</span>
                            @else
                                <span class="bg-gray-600 text-white text-xs font-bold px-2.5 py-1 rounded-lg shadow">Disembunyikan</span>
                            @endif
                        </div>
                    </div>

                    <div class="p-5 space-y-1.5">
                        <h3 class="font-serif text-lg font-bold text-cnb-wood-dark">{{ $category->name }}</h3>
                        <p class="text-sm text-gray-500 line-clamp-2 leading-relaxed">{{ $category->description ?: 'Belum ada keterangan.' }}</p>
                    </div>
                </div>

                <div class="px-5 pb-5 grid grid-cols-2 gap-2">
                    <button wire:click="openEdit({{ $category->id }})"
                            class="w-full bg-gray-100 hover:bg-cnb-gold/20 text-cnb-wood-dark font-semibold text-sm py-2.5 rounded-xl active:scale-95 transition flex items-center justify-center gap-1.5">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                        Ubah
                    </button>
                    <button wire:click="confirmDelete({{ $category->id }})"
                            class="w-full bg-red-50 hover:bg-red-100 text-red-600 font-semibold text-sm py-2.5 rounded-xl active:scale-95 transition flex items-center justify-center gap-1.5">
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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                    </svg>
                </div>
                <h3 class="font-serif text-xl font-bold text-cnb-wood-dark mb-1">Belum Ada Kategori Menu</h3>
                <p class="text-gray-500 text-sm mb-6 max-w-sm mx-auto">Klik tombol di atas untuk membuat kategori baru pertama.</p>
                <button type="button" wire:click="openCreate" class="bg-cnb-gold text-cnb-wood-dark font-bold px-6 py-2.5 rounded-xl hover:bg-cnb-gold-light transition text-sm cursor-pointer">
                    Tambah Kategori Baru
                </button>
            </div>
        @endforelse
    </div>

    {{-- MODAL TAMBAH / EDIT --}}
    @if($showModal)
        <div class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-end sm:items-center justify-center z-50 p-0 sm:p-4">
            <div class="bg-white rounded-t-3xl sm:rounded-2xl shadow-2xl max-w-lg w-full p-6 sm:p-8 max-h-[92vh] overflow-y-auto">
                <div class="flex items-center justify-between border-b border-gray-100 pb-4 mb-6">
                    <h2 class="font-serif text-xl font-bold text-cnb-wood-dark">
                        {{ $editingId ? 'Ubah Kategori Menu' : 'Kategori Menu Baru' }}
                    </h2>
                    <button wire:click="$set('showModal', false)"
                            class="w-8 h-8 flex items-center justify-center rounded-lg hover:bg-gray-100 transition text-gray-500 hover:text-gray-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                <form wire:submit.prevent="save" class="space-y-5">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1.5">Nama Kategori *</label>
                        <input type="text" wire:model="name" placeholder="Contoh: Nasi Box Spesial"
                               class="w-full border border-gray-300 focus:border-cnb-gold focus:ring-2 focus:ring-cnb-gold/20 outline-none rounded-xl px-4 py-3 text-sm text-gray-800">
                        @error('name') <p class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1.5">Keterangan Singkat</label>
                        <textarea wire:model="description" rows="3"
                                  placeholder="Contoh: Aneka paket nasi kotak untuk konsumsi rapat dan seminar"
                                  class="w-full border border-gray-300 focus:border-cnb-gold focus:ring-2 focus:ring-cnb-gold/20 outline-none rounded-xl px-4 py-3 text-sm text-gray-800"></textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1.5">Foto Kategori (Opsional)</label>
                        <input type="file" wire:model="image" accept="image/*"
                               class="w-full text-sm text-gray-600 file:mr-3 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-cnb-gold/20 file:text-cnb-wood-dark file:font-semibold file:text-sm hover:file:bg-cnb-gold/30">
                        @error('image') <p class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</p> @enderror
                        <div wire:loading wire:target="image" class="text-xs text-cnb-gold font-semibold mt-2">Sedang memproses gambar...</div>
                        @if($image)
                            <img src="{{ $image->temporaryUrl() }}" class="mt-3 w-full h-40 object-cover rounded-xl border border-gray-200">
                        @elseif($existingImage)
                            <img src="{{ asset('storage/' . $existingImage) }}" class="mt-3 w-full h-40 object-cover rounded-xl border border-gray-200">
                        @endif
                    </div>

                    {{-- Toggle Switch --}}
                    <div class="flex items-center justify-between bg-gray-50 rounded-xl px-5 py-4 border border-gray-200">
                        <div>
                            <span class="text-sm font-semibold text-gray-800 block">Tampilkan di Website?</span>
                            <span class="text-xs text-gray-500">Pilih ON agar pembeli bisa melihat kategori ini.</span>
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
                            <span wire:loading.remove wire:target="save">Simpan Kategori</span>
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
                <h3 class="font-serif text-xl font-bold text-cnb-wood-dark">Yakin Ingin Menghapus?</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Kategori ini akan dihapus permanen dari sistem.</p>

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