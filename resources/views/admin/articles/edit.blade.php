@extends('layouts.admin')

@section('title', 'Edit Artikel Jurnal')
@section('page-title', 'Edit Artikel Jurnal')

@section('content')

<div class="max-w-4xl mx-auto bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-gray-100">
    
    <div class="flex items-center justify-between border-b border-gray-100 pb-4 mb-6">
        <div>
            <h2 class="text-xl font-black text-brand-navy">Edit Artikel Jurnal</h2>
            <p class="text-xs text-gray-500">Perbarui isi cerita dan metadata artikel.</p>
        </div>
        <a href="{{ route('admin.articles.index') }}" class="text-xs font-bold text-gray-500 hover:text-brand-navy">← Kembali</a>
    </div>

    <form action="{{ route('admin.articles.update', $article->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="sm:col-span-2">
                <label class="block text-xs font-bold text-gray-700 mb-1">Judul Artikel *</label>
                <input type="text" name="title" value="{{ old('title', $article->title) }}" required class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 mb-1">Kategori *</label>
                <select name="category" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
                    <option value="village" {{ $article->category === 'village' ? 'selected' : '' }}>🌾 Cerita Desa</option>
                    <option value="food" {{ $article->category === 'food' ? 'selected' : '' }}>🥘 Kuliner & Budaya</option>
                    <option value="tips" {{ $article->category === 'tips' ? 'selected' : '' }}>💡 Tips Perjalanan</option>
                </select>
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 mb-1">Penulis *</label>
                <input type="text" name="author" value="{{ old('author', $article->author) }}" required class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 mb-1">Estimasi Waktu Baca *</label>
                <input type="text" name="read_time" value="{{ old('read_time', $article->read_time) }}" required class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
            </div>

            <!-- Cover Image Options -->
            <div class="sm:col-span-2 bg-brand-cream/40 p-4 rounded-2xl border border-brand-orange/20 space-y-3">
                <label class="block text-xs font-black text-brand-navy">📸 Foto Sampul Artikel</label>
                
                @if($article->cover_image)
                    <div class="flex items-center gap-3 bg-white p-2.5 rounded-xl border border-gray-200 mb-2">
                        <img src="{{ Str::startsWith($article->cover_image, ['http://', 'https://']) ? $article->cover_image : asset($article->cover_image) }}" alt="Preview" class="w-16 h-12 object-cover rounded-lg">
                        <span class="text-xs text-gray-600 truncate">Foto saat ini: {{ $article->cover_image }}</span>
                    </div>
                @endif

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-[11px] font-bold text-gray-600 mb-1">Opsi 1: Ganti Foto dari Komputer / Lokal</label>
                        <input type="file" name="cover_image_file" accept="image/*" class="w-full text-xs text-gray-500 file:mr-3 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-bold file:bg-brand-orange file:text-white hover:file:bg-orange-600 cursor-pointer">
                    </div>
                    <div>
                        <label class="block text-[11px] font-bold text-gray-600 mb-1">Opsi 2: Atau Gunakan URL Foto</label>
                        <input type="text" name="cover_image_url" value="{{ old('cover_image_url', $article->cover_image) }}" placeholder="https://..." class="w-full bg-white border border-gray-200 rounded-xl px-3 py-2 text-xs font-semibold">
                    </div>
                </div>
            </div>


            <div class="sm:col-span-2">
                <label class="block text-xs font-bold text-gray-700 mb-1">Kutipan Ringkas (Excerpt) *</label>
                <textarea name="excerpt" rows="2" required class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">{{ old('excerpt', $article->excerpt) }}</textarea>
            </div>

            <div class="sm:col-span-2">
                <label class="block text-xs font-bold text-gray-700 mb-1">Isi Artikel Lengkap *</label>
                <textarea name="content" rows="8" required class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">{{ old('content', $article->content) }}</textarea>
            </div>
        </div>

        <div class="pt-4 border-t border-gray-100 text-right">
            <button type="submit" class="bg-brand-orange hover:bg-orange-600 text-white font-extrabold px-8 py-3 rounded-xl shadow-lg transition-all">
                Simpan Perubahan Artikel
            </button>
        </div>

    </form>

</div>

@endsection
