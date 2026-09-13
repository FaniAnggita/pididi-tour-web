@extends('layouts.admin')

@section('title', 'Edit Paket Wisata')
@section('page-title', 'Edit Paket Wisata & Detail')

@section('content')

<div class="space-y-8 max-w-5xl mx-auto">
    
    <!-- 1. Edit Main Tour Info -->
    <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-gray-100">
        <div class="flex items-center justify-between border-b border-gray-100 pb-4 mb-6">
            <div>
                <h2 class="text-xl font-black text-brand-navy">Edit Informasi Utama Paket</h2>
                <p class="text-xs text-gray-500">Judul, harga, kategori, dan deskripsi paket wisata.</p>
            </div>
            <a href="{{ route('admin.tours.index') }}" class="text-xs font-bold text-gray-500 hover:text-brand-navy">← Kembali ke List</a>
        </div>

        <form action="{{ route('admin.tours.update', $tour->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="sm:col-span-2">
                    <label class="block text-xs font-bold text-gray-700 mb-1">Judul Paket Wisata *</label>
                    <input type="text" name="title" value="{{ old('title', $tour->title) }}" required class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
                </div>

            <div x-data="{ isNewCategory: false }">
                <div class="flex items-center justify-between mb-1">
                    <label class="block text-xs font-bold text-gray-700">Kategori Paket *</label>
                    <button type="button" @click="isNewCategory = !isNewCategory" class="text-[11px] text-brand-blue font-bold hover:underline">
                        <span x-show="!isNewCategory">+ Buat Kategori Baru</span>
                        <span x-show="isNewCategory">← Pilih Dari List</span>
                    </button>
                </div>
                
                <div x-show="!isNewCategory">
                    <select name="category" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
                        @foreach($categories as $cat)
                            <option value="{{ $cat->slug }}" {{ $tour->category === $cat->slug ? 'selected' : '' }}>{{ $cat->icon ?? '🧭' }} {{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div x-show="isNewCategory" style="display: none;">
                    <input type="text" name="new_category_name" placeholder="Ketik nama kategori baru..." class="w-full bg-amber-50 border border-brand-orange/40 rounded-xl px-4 py-2.5 text-xs font-semibold text-brand-navy focus:ring-2 focus:ring-brand-orange">
                    <span class="text-[10px] text-gray-500 mt-1 block">* Kategori baru ini akan otomatis disimpan ke sistem.</span>
                </div>
            </div>


                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1">Durasi *</label>
                    <input type="text" name="duration" value="{{ old('duration', $tour->duration) }}" required class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1">Lokasi Destinasi *</label>
                    <input type="text" name="location" value="{{ old('location', $tour->location) }}" required class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1">Harga Mulai (Rp) *</label>
                    <input type="number" name="starting_price" value="{{ old('starting_price', $tour->starting_price) }}" required class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1">Minimum Peserta (Pax) *</label>
                    <input type="number" name="min_pax" value="{{ old('min_pax', $tour->min_pax) }}" required class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1">Rating Initial (1.0 - 5.0)</label>
                    <input type="number" step="0.1" name="rating" value="{{ old('rating', $tour->rating) }}" required class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1">Jumlah Ulasan Initial</label>
                    <input type="number" name="reviews_count" value="{{ old('reviews_count', $tour->reviews_count) }}" required class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1">Badge Highlight (Dipisah Koma)</label>
                    <input type="text" name="badges" value="{{ old('badges', is_array($tour->highlight_badges) ? implode(', ', $tour->highlight_badges) : '') }}" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
                </div>

                <!-- Cover Image Options -->
                <div class="sm:col-span-2 bg-brand-cream/40 p-4 rounded-2xl border border-brand-orange/20 space-y-3">
                    <label class="block text-xs font-black text-brand-navy">📸 Foto Sampul Utama (Cover Image)</label>
                    
                    @if($tour->cover_image)
                        <div class="flex items-center gap-3 bg-white p-2.5 rounded-xl border border-gray-200 mb-2">
                            <img src="{{ Str::startsWith($tour->cover_image, ['http://', 'https://']) ? $tour->cover_image : asset($tour->cover_image) }}" alt="Preview" class="w-16 h-12 object-cover rounded-lg">
                            <span class="text-xs text-gray-600 truncate">Foto saat ini: {{ $tour->cover_image }}</span>
                        </div>
                    @endif

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-[11px] font-bold text-gray-600 mb-1">Opsi 1: Ganti Foto dari Komputer / Lokal</label>
                            <input type="file" name="cover_image_file" accept="image/*" class="w-full text-xs text-gray-500 file:mr-3 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-bold file:bg-brand-orange file:text-white hover:file:bg-orange-600 cursor-pointer">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold text-gray-600 mb-1">Opsi 2: Atau Masukkan URL Foto</label>
                            <input type="text" name="cover_image_url" value="{{ old('cover_image_url', $tour->cover_image) }}" placeholder="https://..." class="w-full bg-white border border-gray-200 rounded-xl px-3 py-2 text-xs font-semibold">
                        </div>
                    </div>
                </div>


                <div class="sm:col-span-2">
                    <label class="block text-xs font-bold text-gray-700 mb-1">Ringkasan Singkat Paket *</label>
                    <textarea name="short_description" rows="2" required class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">{{ old('short_description', $tour->short_description) }}</textarea>
                </div>

                <div class="sm:col-span-2">
                    <label class="block text-xs font-bold text-gray-700 mb-1">Deskripsi Lengkap Paket</label>
                    <textarea name="full_description" rows="4" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">{{ old('full_description', $tour->full_description) }}</textarea>
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1">Fasilitas Inclusions (Pisahkan baris baru)</label>
                    <textarea name="inclusions" rows="4" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">{{ old('inclusions', is_array($tour->inclusions) ? implode("\n", $tour->inclusions) : '') }}</textarea>
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1">Fasilitas Exclusions (Pisahkan baris baru)</label>
                    <textarea name="exclusions" rows="4" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">{{ old('exclusions', is_array($tour->exclusions) ? implode("\n", $tour->exclusions) : '') }}</textarea>
                </div>
            </div>

            <div class="flex items-center gap-2">
                <input type="checkbox" name="is_featured" id="is_featured" value="1" {{ $tour->is_featured ? 'checked' : '' }} class="rounded border-gray-300 text-brand-orange focus:ring-brand-orange">
                <label for="is_featured" class="text-xs font-bold text-brand-navy">Tampilkan sebagai Paket Terfavorit / Featured di Beranda</label>
            </div>

            <div class="pt-4 border-t border-gray-100 text-right">
                <button type="submit" class="bg-brand-orange hover:bg-orange-600 text-white font-extrabold px-8 py-3 rounded-xl shadow-lg transition-all">
                    Simpan Perubahan Paket
                </button>
            </div>

        </form>
    </div>

    <!-- 2. Manage Photo Gallery -->
    <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-gray-100 space-y-6">
        <div class="border-b border-gray-100 pb-3">
            <h3 class="text-lg font-black text-brand-navy flex items-center gap-2">
                <i class="fa-solid fa-images text-brand-blue"></i>
                <span>Galeri Foto Tempat Wisata & Aktivitas</span>
            </h3>
            <p class="text-xs text-gray-500">Kelola foto-foto yang akan tampil di halaman detail paket publik.</p>
        </div>

        <!-- Add Photo Form -->
        <form action="{{ route('admin.tours.galleries.store', $tour->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4 bg-brand-cream/30 p-4 rounded-2xl border border-brand-blue/20">
            @csrf
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-[11px] font-bold text-gray-700 mb-1">Opsi 1: Unggah Foto Lokal dari Komputer</label>
                    <input type="file" name="image_file" accept="image/*" class="w-full text-xs text-gray-500 file:mr-3 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-bold file:bg-brand-blue file:text-white hover:file:bg-blue-700 cursor-pointer">
                </div>
                <div>
                    <label class="block text-[11px] font-bold text-gray-700 mb-1">Opsi 2: Atau Masukkan URL Foto Internet</label>
                    <input type="text" name="image_url" placeholder="https://images.unsplash.com/..." class="w-full bg-white border border-gray-200 rounded-xl px-3 py-2 text-xs font-semibold focus:ring-2 focus:ring-brand-blue">
                </div>
            </div>
            <div class="flex flex-col sm:flex-row items-center justify-between gap-3">
                <input type="text" name="caption" placeholder="Keterangan / Caption Foto (Opsional, misal: Sunrise Pulau Padar)" class="w-full bg-white border border-gray-200 rounded-xl px-3 py-2 text-xs font-semibold">
                <button type="submit" class="w-full sm:w-auto bg-brand-blue hover:bg-blue-700 text-white font-extrabold text-xs px-6 py-2.5 rounded-xl shadow transition-all shrink-0">
                    + Tambahkan Foto ke Galeri
                </button>
            </div>
        </form>

        <!-- Existing Photos Grid -->
        @if($tour->galleries->isEmpty())
            <p class="text-xs text-gray-400 italic">Belum ada foto galeri pendukung.</p>
        @else
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                @foreach($tour->galleries as $gal)
                    <div class="relative group rounded-2xl overflow-hidden shadow border border-gray-100">
                        <img src="{{ Str::startsWith($gal->image_url, ['http://', 'https://']) ? $gal->image_url : asset($gal->image_url) }}" alt="{{ $gal->caption }}" class="w-full h-32 object-cover">
                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center p-2 text-center">
                            <form action="{{ route('admin.tours.galleries.destroy', $gal->id) }}" method="POST" onsubmit="return confirm('Hapus foto ini dari galeri?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-rose-600 text-white text-xs font-bold px-3 py-1.5 rounded-lg shadow">
                                    <i class="fa-solid fa-trash mr-1"></i> Hapus
                                </button>
                            </form>
                        </div>
                        @if($gal->caption)
                            <div class="bg-brand-navy/90 text-white text-[10px] p-1.5 truncate text-center">
                                {{ $gal->caption }}
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        @endif

    </div>

    <!-- 3. Manage Itineraries -->
    <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-gray-100 space-y-6">
        <div class="border-b border-gray-100 pb-3">
            <h3 class="text-lg font-black text-brand-navy flex items-center gap-2">
                <i class="fa-solid fa-list-check text-brand-orange"></i>
                <span>Itinerari Kegiatan Harian</span>
            </h3>
            <p class="text-xs text-gray-500">Kelola urutan alur perjalanan per hari (Hari 1, Hari 2, dst).</p>
        </div>

        <!-- Add Itinerary Form -->
        <form action="{{ route('admin.tours.itineraries.store', $tour->id) }}" method="POST" class="space-y-3 bg-brand-cream/30 p-4 rounded-2xl border border-brand-orange/15">
            @csrf
            <div class="grid grid-cols-1 sm:grid-cols-12 gap-3">
                <div class="sm:col-span-2">
                    <label class="block text-[11px] font-bold text-gray-600 mb-1">Hari Ke- *</label>
                    <input type="number" name="day_number" value="{{ $tour->itineraries->count() + 1 }}" required class="w-full bg-white border border-gray-200 rounded-xl px-3 py-2 text-xs font-bold">
                </div>
                <div class="sm:col-span-10">
                    <label class="block text-[11px] font-bold text-gray-600 mb-1">Judul Kegiatan Harian *</label>
                    <input type="text" name="title" placeholder="Contoh: Trekking Sunrise & Workshop Gerabah" required class="w-full bg-white border border-gray-200 rounded-xl px-3 py-2 text-xs font-bold">
                </div>
            </div>
            <div>
                <label class="block text-[11px] font-bold text-gray-600 mb-1">Penjelasan Alur Kegiatan</label>
                <textarea name="description" rows="2" placeholder="Rincian jam dan tempat kegiatan harian..." class="w-full bg-white border border-gray-200 rounded-xl px-3 py-2 text-xs font-medium"></textarea>
            </div>
            <div class="text-right">
                <button type="submit" class="bg-brand-orange hover:bg-orange-600 text-white font-extrabold text-xs px-6 py-2 rounded-xl shadow">
                    + Tambah Hari Itinerari
                </button>
            </div>
        </form>

        <!-- Existing Itineraries List -->
        @if($tour->itineraries->isEmpty())
            <p class="text-xs text-gray-400 italic">Belum ada itinerari harian yang dibuat.</p>
        @else
            <div class="space-y-3">
                @foreach($tour->itineraries as $it)
                    <div class="p-4 rounded-2xl border border-gray-100 bg-white shadow-sm flex items-start justify-between gap-4">
                        <div class="space-y-1">
                            <span class="bg-brand-orange text-white text-[10px] font-black px-2.5 py-0.5 rounded-full">HARI {{ $it->day_number }}</span>
                            <h4 class="font-bold text-sm text-brand-navy">{{ $it->title }}</h4>
                            <p class="text-xs text-gray-600 leading-relaxed">{{ $it->description }}</p>
                        </div>
                        <form action="{{ route('admin.tours.itineraries.destroy', $it->id) }}" method="POST" onsubmit="return confirm('Hapus hari itinerari ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-rose-500 hover:text-rose-700 text-xs font-bold p-1">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

</div>

@endsection
