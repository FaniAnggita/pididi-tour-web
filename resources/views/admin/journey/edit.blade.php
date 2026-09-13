@extends('layouts.admin')

@section('title', 'Kelola Signature VAYANA JOURNEY')
@section('page-title', 'Kelola Signature Package: THE JOGJA YOU HAVEN\'T MET')

@section('content')

<div class="max-w-4xl mx-auto bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-gray-100">
    
    <div class="border-b border-gray-100 pb-4 mb-6">
        <span class="bg-amber-400 text-brand-navy font-black text-[10px] uppercase px-3 py-1 rounded-full">✨ Flagship Experience</span>
        <h2 class="text-xl font-black text-brand-navy mt-2 flex items-center gap-2">
            <i class="fa-solid fa-compass text-brand-orange"></i>
            <span>Pengaturan VAYANA JOURNEY (3D2N)</span>
        </h2>
        <p class="text-xs text-gray-500 mt-1">Kelola harga, jadwal batch, dan prinsip perjalanan khas Vayana.</p>
    </div>

    <form action="{{ route('admin.journey.update') }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="sm:col-span-2">
                <label class="block text-xs font-bold text-gray-700 mb-1">Judul Paket Signature *</label>
                <input type="text" name="title" value="{{ old('title', $journey->title) }}" required class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 mb-1">Tagline Signature *</label>
                <input type="text" name="tagline" value="{{ old('tagline', $journey->tagline) }}" required class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 mb-1">Tema Perjalanan *</label>
                <input type="text" name="theme" value="{{ old('theme', $journey->theme) }}" required class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 mb-1">Harga All-Inclusive (Rp) *</label>
                <input type="number" name="price" value="{{ old('price', $journey->price) }}" required class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 mb-1">Durasi *</label>
                <input type="text" name="duration" value="{{ old('duration', $journey->duration) }}" required class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 mb-1">Minimum Peserta Group (Pax) *</label>
                <input type="number" name="min_pax" value="{{ old('min_pax', $journey->min_pax) }}" required class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 mb-1">Maksimum Peserta Group (Pax) *</label>
                <input type="number" name="max_pax" value="{{ old('max_pax', $journey->max_pax) }}" required class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
            </div>

            <div class="sm:col-span-2">
                <label class="block text-xs font-bold text-gray-700 mb-1">Info Jadwal Open Batch Keberangkatan</label>
                <input type="text" name="batch_schedule_info" value="{{ old('batch_schedule_info', $journey->batch_schedule_info) }}" placeholder="Contoh: Batch 1: 12-14 September 2026 | Batch 2: 10-12 Oktober 2026" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
            </div>

            <div class="sm:col-span-2">
                <label class="block text-xs font-bold text-gray-700 mb-1">Info Vayana Journey Book</label>
                <textarea name="journey_book_info" rows="2" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">{{ old('journey_book_info', $journey->journey_book_info) }}</textarea>
            </div>

            <div class="sm:col-span-2">
                <label class="block text-xs font-bold text-gray-700 mb-1">Info Vayana Voucher UMKM</label>
                <textarea name="voucher_info" rows="2" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">{{ old('voucher_info', $journey->voucher_info) }}</textarea>
            </div>
        </div>

        <!-- 5 Principles -->
        <div class="space-y-3 pt-4 border-t border-gray-100">
            <h3 class="text-sm font-extrabold text-brand-orange uppercase tracking-wider">Narasi 5 Prinsip Pengalaman</h3>
            
            <div class="space-y-2 text-xs">
                <div>
                    <label class="font-bold text-brand-navy">1. MEET</label>
                    <input type="text" name="principle_meet" value="{{ old('principle_meet', $journey->principles_content['MEET'] ?? '') }}" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-3 py-2 font-semibold">
                </div>
                <div>
                    <label class="font-bold text-brand-navy">2. EXPERIENCE</label>
                    <input type="text" name="principle_experience" value="{{ old('principle_experience', $journey->principles_content['EXPERIENCE'] ?? '') }}" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-3 py-2 font-semibold">
                </div>
                <div>
                    <label class="font-bold text-brand-navy">3. UNDERSTAND</label>
                    <input type="text" name="principle_understand" value="{{ old('principle_understand', $journey->principles_content['UNDERSTAND'] ?? '') }}" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-3 py-2 font-semibold">
                </div>
                <div>
                    <label class="font-bold text-brand-navy">4. CONNECT</label>
                    <input type="text" name="principle_connect" value="{{ old('principle_connect', $journey->principles_content['CONNECT'] ?? '') }}" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-3 py-2 font-semibold">
                </div>
                <div>
                    <label class="font-bold text-brand-navy">5. INSPIRE</label>
                    <input type="text" name="principle_inspire" value="{{ old('principle_inspire', $journey->principles_content['INSPIRE'] ?? '') }}" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-3 py-2 font-semibold">
                </div>
            </div>
        </div>

        <div class="flex items-center gap-2 pt-2">
            <input type="checkbox" name="is_active" id="is_active" value="1" {{ $journey->is_active ? 'checked' : '' }} class="rounded border-gray-300 text-brand-orange focus:ring-brand-orange">
            <label for="is_active" class="text-xs font-bold text-brand-navy">Tampilkan Banner Signature Paket di Beranda & Katalog</label>
        </div>

        <div class="pt-4 border-t border-gray-100 text-right">
            <button type="submit" class="bg-brand-orange hover:bg-orange-600 text-white font-extrabold px-8 py-3 rounded-xl shadow-lg transition-all">
                Simpan Perubahan VAYANA JOURNEY
            </button>
        </div>

    </form>

</div>

@endsection
