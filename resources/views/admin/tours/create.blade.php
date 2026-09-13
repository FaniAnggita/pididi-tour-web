@extends('layouts.admin')

@section('title', 'Tambah Paket Wisata Baru')
@section('page-title', 'Tambah Paket Wisata Baru')

@section('content')

<div class="max-w-4xl mx-auto bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-gray-100">
    
    <div class="flex items-center justify-between border-b border-gray-100 pb-4 mb-6">
        <div>
            <h2 class="text-xl font-black text-brand-navy">Form Tambah Paket Wisata Baru</h2>
            <p class="text-xs text-gray-500">Isi rincian informasi dasar paket wisata.</p>
        </div>
        <a href="{{ route('admin.tours.index') }}" class="text-xs font-bold text-gray-500 hover:text-brand-navy">← Kembali</a>
    </div>

    <form action="{{ route('admin.tours.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="sm:col-span-2">
                <label class="block text-xs font-bold text-gray-700 mb-1">Judul Paket Wisata *</label>
                <input type="text" name="title" value="{{ old('title') }}" required placeholder="Contoh: Ubud Cultural & Authentic Village Life" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
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
                            <option value="{{ $cat->slug }}">{{ $cat->icon ?? '🧭' }} {{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div x-show="isNewCategory" style="display: none;">
                    <input type="text" name="new_category_name" placeholder="Ketik nama kategori baru (misal: Honeymoon & Romantic)..." class="w-full bg-amber-50 border border-brand-orange/40 rounded-xl px-4 py-2.5 text-xs font-semibold text-brand-navy focus:ring-2 focus:ring-brand-orange">
                    <span class="text-[10px] text-gray-500 mt-1 block">* Kategori baru ini akan otomatis disimpan ke sistem.</span>
                </div>
            </div>


            <div>
                <label class="block text-xs font-bold text-gray-700 mb-1">Durasi *</label>
                <input type="text" name="duration" value="{{ old('duration', '3H 2M') }}" placeholder="Contoh: 4H 3M" required class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 mb-1">Lokasi Destinasi *</label>
                <input type="text" name="location" value="{{ old('location') }}" placeholder="Contoh: Ubud, Bali" required class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 mb-1">Harga Mulai (Rp) *</label>
                <input type="number" name="starting_price" value="{{ old('starting_price') }}" placeholder="3850000" required class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 mb-1">Minimum Peserta (Pax) *</label>
                <input type="number" name="min_pax" value="{{ old('min_pax', 2) }}" required class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 mb-1">Rating Initial (1.0 - 5.0)</label>
                <input type="number" step="0.1" name="rating" value="{{ old('rating', 4.9) }}" required class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 mb-1">Jumlah Ulasan Initial</label>
                <input type="number" name="reviews_count" value="{{ old('reviews_count', 100) }}" required class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 mb-1">Badge Highlight (Dipisah Koma)</label>
                <input type="text" name="badges" value="{{ old('badges', '🌾 Village Life, 📸 Photo Spot') }}" placeholder="🌾 Village Life, 🥘 Taste Local" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
            </div>

            <!-- Cover Image Upload & URL Options -->
            <div class="sm:col-span-2 bg-brand-cream/40 p-4 rounded-2xl border border-brand-orange/20 space-y-3">
                <label class="block text-xs font-black text-brand-navy">📸 Foto Sampul Utama (Cover Image)</label>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-[11px] font-bold text-gray-600 mb-1">Opsi 1: Unggah Foto dari Komputer / Lokal</label>
                        <input type="file" name="cover_image_file" accept="image/*" class="w-full text-xs text-gray-500 file:mr-3 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-bold file:bg-brand-orange file:text-white hover:file:bg-orange-600 cursor-pointer">
                    </div>
                    <div>
                        <label class="block text-[11px] font-bold text-gray-600 mb-1">Opsi 2: Atau Gunakan URL Foto (Unsplash / Internet)</label>
                        <input type="text" name="cover_image_url" value="{{ old('cover_image_url') }}" placeholder="https://images.unsplash.com/..." class="w-full bg-white border border-gray-200 rounded-xl px-3 py-2 text-xs font-semibold">
                    </div>
                </div>
            </div>


            <div class="sm:col-span-2">
                <label class="block text-xs font-bold text-gray-700 mb-1">Ringkasan Singkat Paket *</label>
                <textarea name="short_description" rows="2" required placeholder="Deskripsi ringkas 2-3 kalimat menarik..." class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">{{ old('short_description') }}</textarea>
            </div>

            <div class="sm:col-span-2">
                <label class="block text-xs font-bold text-gray-700 mb-1">Deskripsi Lengkap Paket</label>
                <textarea name="full_description" rows="4" placeholder="Penjelasan lengkap daya tarik dan keistimewaan perjalanan..." class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">{{ old('full_description') }}</textarea>
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 mb-1">Fasilitas Inclusions (Pisahkan baris baru)</label>
                <textarea name="inclusions" rows="4" placeholder="Penginapan Boutique Homestay 3M&#10;Makan 3x sehari&#10;Guide lokal" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">{{ old('inclusions') }}</textarea>
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 mb-1">Fasilitas Exclusions (Pisahkan baris baru)</label>
                <textarea name="exclusions" rows="4" placeholder="Tiket pesawat PP&#10;Pengeluaran pribadi&#10;Tipping guide" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">{{ old('exclusions') }}</textarea>
            </div>
        </div>

        <div class="flex items-center gap-2">
            <input type="checkbox" name="is_featured" id="is_featured" value="1" {{ old('is_featured') ? 'checked' : '' }} class="rounded border-gray-300 text-brand-orange focus:ring-brand-orange">
            <label for="is_featured" class="text-xs font-bold text-brand-navy">Tampilkan sebagai Paket Terfavorit / Featured di Beranda</label>
        </div>

        <div class="pt-4 border-t border-gray-100 text-right">
            <button type="submit" class="bg-brand-orange hover:bg-orange-600 text-white font-extrabold px-8 py-3 rounded-xl shadow-lg transition-all">
                Simpan & Lanjut ke Galeri Foto & Itinerari
            </button>
        </div>

    </form>

</div>

@endsection
