@extends('layouts.admin')

@section('title', 'Dashboard Admin')
@section('page-title', 'Ringkasan Dashboard')

@section('content')

<!-- Stat Cards Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-8">
    
    <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 flex items-center justify-between">
        <div>
            <p class="text-xs font-bold text-gray-500 uppercase tracking-wider">Total Paket Wisata</p>
            <p class="text-3xl font-black text-brand-navy mt-1">{{ $totalTours }}</p>
        </div>
        <div class="w-12 h-12 rounded-2xl bg-brand-orange/10 text-brand-orange flex items-center justify-center text-xl">
            <i class="fa-solid fa-map-location-dot"></i>
        </div>
    </div>

    <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 flex items-center justify-between">
        <div>
            <p class="text-xs font-bold text-gray-500 uppercase tracking-wider">Artikel Jurnal</p>
            <p class="text-3xl font-black text-brand-navy mt-1">{{ $totalArticles }}</p>
        </div>
        <div class="w-12 h-12 rounded-2xl bg-brand-blue/10 text-brand-blue flex items-center justify-center text-xl">
            <i class="fa-solid fa-book-open"></i>
        </div>
    </div>

    <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 flex items-center justify-between">
        <div>
            <p class="text-xs font-bold text-gray-500 uppercase tracking-wider">Ulasan Tamu</p>
            <p class="text-3xl font-black text-brand-navy mt-1">{{ $totalTestimonials }}</p>
        </div>
        <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-500 flex items-center justify-center text-xl">
            <i class="fa-solid fa-star"></i>
        </div>
    </div>

    <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 flex items-center justify-between">
        <div>
            <p class="text-xs font-bold text-gray-500 uppercase tracking-wider">Pesan Baru (Unread)</p>
            <p class="text-3xl font-black text-rose-600 mt-1">{{ $unreadInquiries }}</p>
        </div>
        <div class="w-12 h-12 rounded-2xl bg-rose-500/10 text-rose-500 flex items-center justify-center text-xl">
            <i class="fa-solid fa-envelope-open-text"></i>
        </div>
    </div>

</div>

<!-- Quick Links & Recent Data -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
    
    <!-- Recent Inquiries Table -->
    <div class="lg:col-span-7 bg-white rounded-3xl p-6 shadow-sm border border-gray-100 space-y-4">
        <div class="flex items-center justify-between border-b border-gray-100 pb-3">
            <h2 class="font-black text-base text-brand-navy flex items-center gap-2">
                <i class="fa-solid fa-envelope text-brand-orange"></i>
                <span>Pesan Masuk Terbaru</span>
            </h2>
            <a href="{{ route('admin.inquiries.index') }}" class="text-xs font-bold text-brand-blue hover:underline">Lihat Semua</a>
        </div>

        @if($recentInquiries->isEmpty())
            <p class="text-xs text-gray-400 py-4 text-center">Belum ada pesan masuk.</p>
        @else
            <div class="space-y-3">
                @foreach($recentInquiries as $inq)
                    <div class="p-3.5 rounded-2xl border border-gray-100 hover:bg-brand-cream/30 transition-colors flex items-center justify-between text-xs">
                        <div class="space-y-1">
                            <span class="font-bold text-brand-navy block">{{ $inq->full_name }} ({{ $inq->wa_number }})</span>
                            <span class="text-gray-500 line-clamp-1">{{ $inq->message }}</span>
                        </div>
                        <a href="{{ route('admin.inquiries.show', $inq->id) }}" class="bg-brand-blue text-white font-bold px-3 py-1.5 rounded-lg text-[10px]">
                            Detail
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <!-- Quick Navigation -->
    <div class="lg:col-span-5 space-y-4">
        <div class="bg-gradient-to-br from-brand-navy to-brand-light-navy text-white rounded-3xl p-6 shadow-md space-y-4">
            <span class="bg-amber-300 text-brand-navy text-[10px] font-black uppercase px-2.5 py-1 rounded-full">Pintasan Cepat</span>
            <h3 class="text-lg font-black">Kelola Konten Vayana Wisata</h3>
            <p class="text-xs text-gray-300">Tambahkan paket wisata baru, update legalitas perusahaan, atau terbitkan artikel perjalanan baru.</p>
            
            <div class="grid grid-cols-2 gap-3 pt-2">
                <a href="{{ route('admin.tours.create') }}" class="bg-brand-orange hover:bg-orange-600 text-white text-xs font-bold p-3 rounded-2xl text-center shadow">
                    + Paket Wisata
                </a>
                <a href="{{ route('admin.articles.create') }}" class="bg-white/20 hover:bg-white/30 text-white text-xs font-bold p-3 rounded-2xl text-center">
                    + Artikel Jurnal
                </a>
            </div>
        </div>
    </div>

</div>

@endsection
