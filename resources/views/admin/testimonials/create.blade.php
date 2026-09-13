@extends('layouts.admin')

@section('title', 'Tambah Testimoni Baru')
@section('page-title', 'Tambah Testimoni Baru')

@section('content')

<div class="max-w-3xl mx-auto bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-gray-100">
    
    <div class="flex items-center justify-between border-b border-gray-100 pb-4 mb-6">
        <div>
            <h2 class="text-xl font-black text-brand-navy">Form Tambah Ulasan Tamu</h2>
            <p class="text-xs text-gray-500">Input testimoni tamu untuk tampilan Google Review.</p>
        </div>
        <a href="{{ route('admin.testimonials.index') }}" class="text-xs font-bold text-gray-500 hover:text-brand-navy">← Kembali</a>
    </div>

    <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-xs font-bold text-gray-700 mb-1">Nama Tamu *</label>
                <input type="text" name="guest_name" value="{{ old('guest_name') }}" required placeholder="Contoh: Siti Rahmawati" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 mb-1">Kota Asal Tamu</label>
                <input type="text" name="city" value="{{ old('city') }}" placeholder="Contoh: Jakarta" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 mb-1">Nama Paket Wisata yang Diikuti</label>
                <input type="text" name="package_name" value="{{ old('package_name') }}" placeholder="Contoh: Ubud Cultural Experience" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 mb-1">Rating Bintang (1 - 5) *</label>
                <select name="rating" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
                    <option value="5">⭐⭐⭐⭐⭐ (5 Bintang)</option>
                    <option value="4">⭐⭐⭐⭐ (4 Bintang)</option>
                    <option value="3">⭐⭐⭐ (3 Bintang)</option>
                </select>
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 mb-1">Waktu Trip (Bulan/Tahun)</label>
                <input type="text" name="trip_date" value="{{ old('trip_date', 'Agustus 2026') }}" placeholder="Agustus 2026" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
            </div>

            <!-- Avatar Options -->
            <div class="sm:col-span-2 bg-brand-cream/40 p-4 rounded-2xl border border-brand-orange/20 space-y-3">
                <label class="block text-xs font-black text-brand-navy">📸 Foto Avatar Profile Tamu</label>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-[11px] font-bold text-gray-600 mb-1">Opsi 1: Unggah Foto dari Komputer / Lokal</label>
                        <input type="file" name="avatar_file" accept="image/*" class="w-full text-xs text-gray-500 file:mr-3 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-bold file:bg-brand-orange file:text-white hover:file:bg-orange-600 cursor-pointer">
                    </div>
                    <div>
                        <label class="block text-[11px] font-bold text-gray-600 mb-1">Opsi 2: Atau Gunakan URL Foto Avatar</label>
                        <input type="text" name="avatar_url" value="{{ old('avatar_url') }}" placeholder="https://images.unsplash.com/..." class="w-full bg-white border border-gray-200 rounded-xl px-3 py-2 text-xs font-semibold">
                    </div>
                </div>
            </div>
        </div>


        <div>
            <label class="block text-xs font-bold text-gray-700 mb-1">Teks Ulasan / Testimoni *</label>
            <textarea name="content" rows="4" required placeholder="Tuliskan isi ulasan tamu di sini..." class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">{{ old('content') }}</textarea>
        </div>

        <div class="flex items-center gap-2">
            <input type="checkbox" name="is_verified" id="is_verified" value="1" checked class="rounded border-gray-300 text-brand-orange focus:ring-brand-orange">
            <label for="is_verified" class="text-xs font-bold text-brand-navy">Tampilkan Badge Verified Review</label>
        </div>

        <div class="pt-4 border-t border-gray-100 text-right">
            <button type="submit" class="bg-brand-orange hover:bg-orange-600 text-white font-extrabold px-8 py-3 rounded-xl shadow-lg transition-all">
                Simpan Ulasan Tamu
            </button>
        </div>

    </form>

</div>

@endsection
