@extends('layouts.admin')

@section('title', 'Pengaturan Perusahaan & Legalitas')
@section('page-title', 'Profil & Legalitas Perusahaan')

@section('content')

<div class="max-w-4xl mx-auto bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-gray-100">
    
    <div class="border-b border-gray-100 pb-4 mb-6">
        <h2 class="text-xl font-black text-brand-navy">Identitas & Informasi Perusahaan</h2>
        <p class="text-xs text-gray-500">Kelola informasi publik, legalitas hukum, kontak hotline, dan logo.</p>
    </div>

    <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        <!-- General Info -->
        <div class="space-y-4">
            <h3 class="text-xs font-extrabold text-brand-orange uppercase tracking-wider">Identitas Utama</h3>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="sm:col-span-2">
                    <label class="block text-xs font-bold text-gray-700 mb-1">Nama Perusahaan / Biro Wisata *</label>
                    <input type="text" name="company_name" value="{{ old('company_name', $setting->company_name) }}" required class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1">Tagline Singkat</label>
                    <input type="text" name="tagline" value="{{ old('tagline', $setting->tagline) }}" placeholder="Travel Around Indonesia" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1">Jam Operasional</label>
                    <input type="text" name="operational_hours" value="{{ old('operational_hours', $setting->operational_hours) }}" placeholder="Senin - Sabtu: 08.00 - 20.00 WITA" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
                </div>

                <div class="sm:col-span-2">
                    <label class="block text-xs font-bold text-gray-700 mb-1">Biografi / Profil Ringkas</label>
                    <textarea name="bio" rows="2" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">{{ old('bio', $setting->bio) }}</textarea>
                </div>
            </div>
        </div>

        <!-- Logo Upload -->
        <div class="sm:col-span-2 bg-brand-cream/40 p-4 rounded-2xl border border-brand-orange/20 space-y-3">
            <label class="block text-xs font-black text-brand-navy">📸 Logo Perusahaan</label>
            
            @if($setting->logo_path)
                <div class="flex items-center gap-3 bg-white p-2.5 rounded-xl border border-gray-200 mb-2">
                    <img src="{{ Str::startsWith($setting->logo_path, ['http://', 'https://']) ? $setting->logo_path : asset($setting->logo_path) }}" alt="Logo" class="h-10 object-contain">
                    <span class="text-xs text-gray-600 truncate">Logo saat ini: {{ $setting->logo_path }}</span>
                </div>
            @endif

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-[11px] font-bold text-gray-600 mb-1">Opsi 1: Unggah File Logo dari Komputer / Lokal</label>
                    <input type="file" name="logo_file" accept="image/*" class="w-full text-xs text-gray-500 file:mr-3 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-bold file:bg-brand-orange file:text-white hover:file:bg-orange-600 cursor-pointer">
                </div>
                <div>
                    <label class="block text-[11px] font-bold text-gray-600 mb-1">Opsi 2: Atau Masukkan Path/URL Logo</label>
                    <input type="text" name="logo_path" value="{{ old('logo_path', $setting->logo_path) }}" placeholder="https://... atau storage/logos/..." class="w-full bg-white border border-gray-200 rounded-xl px-3 py-2 text-xs font-semibold">
                </div>
            </div>
        </div>

        <!-- Legalities Card -->
        <div class="space-y-4 pt-4 border-t border-gray-100">
            <h3 class="text-xs font-extrabold text-brand-orange uppercase tracking-wider">Dokumen Legalitas & Bank</h3>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1">Nomor Induk Berusaha (NIB)</label>
                    <input type="text" name="nib" value="{{ old('nib', $setting->nib) }}" placeholder="Contoh: 9120304958102" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1">NPWP Badan</label>
                    <input type="text" name="npwp" value="{{ old('npwp', $setting->npwp) }}" placeholder="Contoh: 74.893.102.4-501.000" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1">Nama Bank</label>
                    <input type="text" name="bank_name" value="{{ old('bank_name', $setting->bank_name) }}" placeholder="Bank BRI" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1">Nomor Rekening</label>
                    <input type="text" name="bank_account_number" value="{{ old('bank_account_number', $setting->bank_account_number) }}" placeholder="0341-01-001928-56-7" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1">Atas Nama Rekening</label>
                    <input type="text" name="bank_account_holder" value="{{ old('bank_account_holder', $setting->bank_account_holder) }}" placeholder="PT VAYANA WISATA INDONESIA" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
                </div>
            </div>
        </div>

        <!-- Contact & Location -->
        <div class="space-y-4 pt-4 border-t border-gray-100">
            <h3 class="text-xs font-extrabold text-brand-orange uppercase tracking-wider">Kontak & Lokasi Kantor</h3>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1">Nomor WhatsApp Hotline (Tanpa +/spasi)</label>
                    <input type="text" name="phone_wa" value="{{ old('phone_wa', $setting->phone_wa) }}" placeholder="6281234567890" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-700 mb-1">Email Resmi</label>
                    <input type="email" name="email" value="{{ old('email', $setting->email) }}" placeholder="hello@vayanawisata.com" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 mb-1">Alamat Fisik Kantor</label>
                <textarea name="office_address" rows="2" class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">{{ old('office_address', $setting->office_address) }}</textarea>
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 mb-1">Embed HTML Google Maps (Iframe)</label>
                <textarea name="google_maps_iframe" rows="3" placeholder='<iframe src="https://www.google.com/maps/embed?..." ...></iframe>' class="w-full bg-brand-cream/30 border border-gray-200 rounded-xl px-4 py-2.5 text-xs font-semibold focus:ring-2 focus:ring-brand-orange">{{ old('google_maps_iframe', $setting->google_maps_iframe) }}</textarea>
            </div>
        </div>

        <!-- Bespoke Trip Pricing Section -->
        <div class="space-y-5 pt-6 border-t border-gray-200">
            <div>
                <h3 class="text-xs font-extrabold text-brand-orange uppercase tracking-wider flex items-center gap-2">
                    <i class="fa-solid fa-wand-magic-sparkles text-brand-orange"></i>
                    Manajerial Tarif Kalkulator Bespoke Trip (Rancang Trip Sendiri)
                </h3>
                <p class="text-xs text-gray-500 mt-0.5">Tentukan tarif acuan, multiplier destinasi, dan kebijakan diskon grup yang akan dihitung otomatis di halaman depan.</p>
            </div>
            
            <!-- Akomodasi Base Rates -->
            <div class="bg-brand-cream/30 p-5 rounded-2xl border border-brand-orange/20 space-y-3">
                <h4 class="text-xs font-bold text-brand-navy">1. Tarif Dasar Harian per Akomodasi (Per Orang / Hari)</h4>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-[11px] font-bold text-gray-700 mb-1">Village Homestay (Rp)</label>
                        <input type="number" name="bespoke_rate_homestay" value="{{ old('bespoke_rate_homestay', $setting->bespoke_rate_homestay ?? 600000) }}" required step="10000" class="w-full bg-white border border-gray-200 rounded-xl px-3 py-2 text-xs font-bold text-brand-navy focus:ring-2 focus:ring-brand-orange">
                    </div>
                    <div>
                        <label class="block text-[11px] font-bold text-gray-700 mb-1">Hotel Bintang 3 (Rp)</label>
                        <input type="number" name="bespoke_rate_hotel3" value="{{ old('bespoke_rate_hotel3', $setting->bespoke_rate_hotel3 ?? 950000) }}" required step="10000" class="w-full bg-white border border-gray-200 rounded-xl px-3 py-2 text-xs font-bold text-brand-navy focus:ring-2 focus:ring-brand-orange">
                    </div>
                    <div>
                        <label class="block text-[11px] font-bold text-gray-700 mb-1">Resort Bintang 4/5 (Rp)</label>
                        <input type="number" name="bespoke_rate_resort" value="{{ old('bespoke_rate_resort', $setting->bespoke_rate_resort ?? 1800000) }}" required step="10000" class="w-full bg-white border border-gray-200 rounded-xl px-3 py-2 text-xs font-bold text-brand-navy focus:ring-2 focus:ring-brand-orange">
                    </div>
                </div>
            </div>

            <!-- Destination Multipliers -->
            <div class="bg-brand-cream/30 p-5 rounded-2xl border border-brand-orange/20 space-y-3">
                <h4 class="text-xs font-bold text-brand-navy">2. Pengali Tarif Destinasi (Multiplier Rate)</h4>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3">
                    <div>
                        <label class="block text-[10px] font-bold text-gray-600 mb-1">Bali & Lombok</label>
                        <input type="number" name="bespoke_mult_bali" value="{{ old('bespoke_mult_bali', $setting->bespoke_mult_bali ?? 1.00) }}" required step="0.05" min="0.1" class="w-full bg-white border border-gray-200 rounded-xl px-3 py-2 text-xs font-bold text-brand-navy focus:ring-2 focus:ring-brand-orange">
                    </div>
                    <div>
                        <label class="block text-[10px] font-bold text-gray-600 mb-1">Labuan Bajo</label>
                        <input type="number" name="bespoke_mult_bajo" value="{{ old('bespoke_mult_bajo', $setting->bespoke_mult_bajo ?? 1.40) }}" required step="0.05" min="0.1" class="w-full bg-white border border-gray-200 rounded-xl px-3 py-2 text-xs font-bold text-brand-navy focus:ring-2 focus:ring-brand-orange">
                    </div>
                    <div>
                        <label class="block text-[10px] font-bold text-gray-600 mb-1">Yogyakarta & Solo</label>
                        <input type="number" name="bespoke_mult_jogja" value="{{ old('bespoke_mult_jogja', $setting->bespoke_mult_jogja ?? 0.85) }}" required step="0.05" min="0.1" class="w-full bg-white border border-gray-200 rounded-xl px-3 py-2 text-xs font-bold text-brand-navy focus:ring-2 focus:ring-brand-orange">
                    </div>
                    <div>
                        <label class="block text-[10px] font-bold text-gray-600 mb-1">Tana Toraja</label>
                        <input type="number" name="bespoke_mult_toraja" value="{{ old('bespoke_mult_toraja', $setting->bespoke_mult_toraja ?? 1.25) }}" required step="0.05" min="0.1" class="w-full bg-white border border-gray-200 rounded-xl px-3 py-2 text-xs font-bold text-brand-navy focus:ring-2 focus:ring-brand-orange">
                    </div>
                    <div>
                        <label class="block text-[10px] font-bold text-gray-600 mb-1">Raja Ampat</label>
                        <input type="number" name="bespoke_mult_rajaampat" value="{{ old('bespoke_mult_rajaampat', $setting->bespoke_mult_rajaampat ?? 2.10) }}" required step="0.05" min="0.1" class="w-full bg-white border border-gray-200 rounded-xl px-3 py-2 text-xs font-bold text-brand-navy focus:ring-2 focus:ring-brand-orange">
                    </div>
                    <div>
                        <label class="block text-[10px] font-bold text-gray-600 mb-1">Custom / Lainnya</label>
                        <input type="number" name="bespoke_mult_custom" value="{{ old('bespoke_mult_custom', $setting->bespoke_mult_custom ?? 1.00) }}" required step="0.05" min="0.1" class="w-full bg-white border border-gray-200 rounded-xl px-3 py-2 text-xs font-bold text-brand-navy focus:ring-2 focus:ring-brand-orange">
                    </div>
                </div>
            </div>

            <!-- Group Discount Rules -->
            <div class="bg-brand-cream/30 p-5 rounded-2xl border border-brand-orange/20 space-y-3">
                <h4 class="text-xs font-bold text-brand-navy">3. Kebijakan Diskon Rombongan / Grup</h4>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-[11px] font-bold text-gray-700 mb-1">Minimal Peserta untuk Diskon (Orang)</label>
                        <input type="number" name="bespoke_min_pax_discount" value="{{ old('bespoke_min_pax_discount', $setting->bespoke_min_pax_discount ?? 4) }}" required min="1" class="w-full bg-white border border-gray-200 rounded-xl px-3 py-2 text-xs font-bold text-brand-navy focus:ring-2 focus:ring-brand-orange">
                    </div>
                    <div>
                        <label class="block text-[11px] font-bold text-gray-700 mb-1">Besar Diskon Rombongan (%)</label>
                        <input type="number" name="bespoke_discount_percent" value="{{ old('bespoke_discount_percent', $setting->bespoke_discount_percent ?? 15) }}" required min="0" max="100" class="w-full bg-white border border-gray-200 rounded-xl px-3 py-2 text-xs font-bold text-brand-navy focus:ring-2 focus:ring-brand-orange">
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-4 border-t border-gray-100 text-right">
            <button type="submit" class="bg-brand-orange hover:bg-orange-600 text-white font-extrabold px-8 py-3 rounded-xl shadow-lg transition-all">
                Simpan Perubahan Pengaturan
            </button>
        </div>

    </form>

</div>

@endsection
