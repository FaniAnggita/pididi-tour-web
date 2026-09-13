@extends('layouts.admin')

@section('title', 'Tulis Artikel Baru')
@section('page-title', 'Tulis Artikel Baru')

@section('content')

<div class="max-w-4xl mx-auto bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-gray-100">
    
    <div class="flex items-center justify-between border-b border-gray-100 pb-4 mb-6">
        <div>
            <h2 class="text-xl font-black text-brand-navy">Form Tulis Artikel Baru</h2>
            <p class="text-xs text-gray-500">Terbitkan artikel cerita desa, kuliner, & tips travel.</p>
        </div>
        <a href="{{ route('admin.articles.index') }}" class="text-xs font-bold text-gray-500 hover:text-brand-navy">← Kembali</a>
    </div>

    <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="sm:col-span-2">
                <label class="block text-xs font-bold text-gray-700 mb-1">Judul Artikel *</label>
                <input type="text" name="title" value="{{ old('title') }}" required placeholder="Contoh: Menemukan Kedamaian Sejati di Desa Sidemen" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 mb-1">Kategori *</label>
                <select name="category" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
                    <option value="village">🌾 Cerita Desa</option>
                    <option value="food">🥘 Kuliner & Budaya</option>
                    <option value="tips">💡 Tips Perjalanan</option>
                </select>
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 mb-1">Penulis *</label>
                <input type="text" name="author" value="{{ old('author', 'Tim Vayana') }}" required class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 mb-1">Estimasi Waktu Baca *</label>
                <input type="text" name="read_time" value="{{ old('read_time', '5 Menit Baca') }}" required class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
            </div>

            <!-- Cover Image Options -->
            <div class="sm:col-span-2 bg-brand-cream/40 p-4 rounded-2xl border border-brand-orange/20 space-y-3">
                <label class="block text-xs font-black text-brand-navy">📸 Foto Sampul Artikel</label>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-[11px] font-bold text-gray-600 mb-1">Opsi 1: Unggah Foto dari Komputer / Lokal</label>
                        <input type="file" name="cover_image_file" accept="image/*" class="w-full text-xs text-gray-500 file:mr-3 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-bold file:bg-brand-orange file:text-white hover:file:bg-orange-600 cursor-pointer">
                    </div>
                    <div>
                        <label class="block text-[11px] font-bold text-gray-600 mb-1">Opsi 2: Atau Gunakan URL Foto Internet</label>
                        <input type="text" name="cover_image_url" value="{{ old('cover_image_url') }}" placeholder="https://images.unsplash.com/..." class="w-full bg-white border border-gray-200 rounded-xl px-3 py-2 text-xs font-semibold">
                    </div>
                </div>
            </div>


            <div class="sm:col-span-2">
                <label class="block text-xs font-bold text-gray-700 mb-1">Kutipan Ringkas (Excerpt) *</label>
                <textarea name="excerpt" rows="2" required placeholder="Ringkasan 2 kalimat artikel untuk tampilan card..." class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">{{ old('excerpt') }}</textarea>
            </div>

            <div class="sm:col-span-2">
                <label class="block text-xs font-bold text-gray-700 mb-1">Isi Artikel Lengkap *</label>
                <textarea name="content" rows="8" required placeholder="Tuliskan isi cerita artikel lengkap di sini..." class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">{{ old('content') }}</textarea>
            </div>
        </div>

        <div class="pt-4 border-t border-gray-100 text-right">
            <button type="submit" class="bg-brand-orange hover:bg-orange-600 text-white font-extrabold px-8 py-3 rounded-xl shadow-lg transition-all">
                Terbitkan Artikel
            </button>
        </div>

    </form>

</div>

@endsection
