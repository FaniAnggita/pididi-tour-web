@extends('layouts.admin')

@section('title', 'Detail Pesan Masuk')
@section('page-title', 'Detail Pesan Masuk')

@section('content')

<div class="max-w-3xl mx-auto bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-gray-100 space-y-6">
    
    <div class="flex items-center justify-between border-b border-gray-100 pb-4">
        <div>
            <h2 class="text-xl font-black text-brand-navy">Detail Pesan Masuk</h2>
            <p class="text-xs text-gray-500">Diterima pada {{ $inquiry->created_at->format('d F Y - H:i WITA') }}</p>
        </div>
        <a href="{{ route('admin.inquiries.index') }}" class="text-xs font-bold text-gray-500 hover:text-brand-navy">← Kembali</a>
    </div>

    <div class="space-y-4 text-xs">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 bg-brand-cream/30 p-4 rounded-2xl border border-brand-orange/15">
            <div>
                <span class="text-gray-500 font-bold block">Nama Pengirim</span>
                <span class="font-extrabold text-sm text-brand-navy">{{ $inquiry->full_name }}</span>
            </div>
            <div>
                <span class="text-gray-500 font-bold block">Nomor WhatsApp</span>
                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $inquiry->wa_number) }}?text=Halo%20{{ urlencode($inquiry->full_name) }},%20mengenai%20pesan%20Anda%20di%20website%20Vayana%20Wisata..." 
                   target="_blank" 
                   class="font-black text-sm text-emerald-600 hover:underline inline-flex items-center gap-1.5 mt-0.5">
                    <i class="fa-brands fa-whatsapp text-base"></i> {{ $inquiry->wa_number }} (Balas via WA)
                </a>
            </div>
            <div>
                <span class="text-gray-500 font-bold block">Email</span>
                <span class="font-bold text-brand-navy">{{ $inquiry->email ?? '-' }}</span>
            </div>
            <div>
                <span class="text-gray-500 font-bold block">Topik</span>
                <span class="font-bold text-brand-orange">{{ $inquiry->topic ?? 'Umum' }}</span>
            </div>
        </div>

        <div class="bg-gray-50 p-5 rounded-2xl border border-gray-200 space-y-2">
            <span class="font-bold text-brand-navy block uppercase text-[10px] tracking-wider text-gray-500">Isi Pesan:</span>
            <p class="text-sm text-gray-800 leading-relaxed whitespace-pre-line font-medium">{{ $inquiry->message }}</p>
        </div>
    </div>

    <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
        <form action="{{ route('admin.inquiries.destroy', $inquiry->id) }}" method="POST" onsubmit="return confirm('Hapus pesan ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-rose-50 hover:bg-rose-100 text-rose-600 font-bold text-xs px-4 py-2.5 rounded-xl transition-all">
                <i class="fa-solid fa-trash mr-1"></i> Hapus Pesan
            </button>
        </form>

        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $inquiry->wa_number) }}?text=Halo%20{{ urlencode($inquiry->full_name) }},%20mengenai%20pesan%20Anda%20di%20website%20Vayana%20Wisata..." 
           target="_blank" 
           class="bg-emerald-600 hover:bg-emerald-700 text-white font-extrabold text-xs px-6 py-2.5 rounded-xl shadow transition-all flex items-center gap-2">
            <i class="fa-brands fa-whatsapp text-lg"></i>
            <span>Balas Langsung via WhatsApp</span>
        </a>
    </div>

</div>

@endsection
