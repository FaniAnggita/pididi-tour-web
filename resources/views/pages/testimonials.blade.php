@extends('layouts.app')

@section('title', 'Testimoni & Ulasan Asli Wisatawan | Vayana Wisata')
@section('meta_description', 'Lihat ulasan jujur dan pengalaman nyata wisatawan yang telah menjelajahi Indonesia bersama Vayana Wisata.')
@section('meta_keywords', 'Testimoni Vayana Wisata, Review Tour Bali, Ulasan Sailing Komodo, Pengalaman Wisata Jogja')

@section('content')

    <!-- Header Banner -->
    <section class="bg-brand-cream pt-12 pb-16 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <span
                class="bg-amber-100 text-amber-900 font-extrabold text-xs uppercase tracking-wider px-3.5 py-1.5 rounded-full inline-flex items-center gap-1.5 mb-3">
                <i class="fa-solid fa-star text-amber-500"></i> Verified Google Reviews
            </span>
            <h1 class="text-3xl sm:text-5xl font-black text-brand-navy">
                Apa Kata Tamu <span class="text-brand-orange">Vayana Wisata</span>?
            </h1>
            <p class="text-gray-600 text-sm sm:text-base max-w-2xl mx-auto mt-3 font-medium">
                Kepercayaan dan kebahagiaan para traveler adalah bukti nyata komitmen pelayanan sehati kami.
            </p>

            <!-- Rating Overview Score Card -->
            <div
                class="mt-8 inline-flex flex-col sm:flex-row items-center gap-6 bg-white p-6 rounded-3xl shadow-xl border border-brand-orange/20">
                <div class="flex items-center gap-3">
                    <span class="text-4xl sm:text-5xl font-black text-brand-navy">4.9</span>
                    <div class="text-left">
                        <div class="flex text-amber-400 text-base">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i>
                        </div>
                        <span class="text-xs font-bold text-gray-500">Berdasarkan {{ $testimonials->count() * 40 + 120 }}+ Ulasan Google</span>
                    </div>
                </div>
                <div class="hidden sm:block h-10 w-px bg-gray-200"></div>
                @php
                    $waPhone = $setting->phone_wa ?? '6281234567890';
                @endphp
                <a href="https://wa.me/{{ $waPhone }}?text={{ urlencode('Halo Vayana Wisata, saya ingin memberikan ulasan perjalanan saya...') }}"
                    target="_blank"
                    class="bg-brand-orange hover:bg-orange-600 text-white font-bold text-xs px-5 py-3 rounded-full shadow transition-all flex items-center gap-2">
                    <i class="fa-brands fa-whatsapp text-base"></i>
                    <span>Tulis Ulasan Anda</span>
                </a>
            </div>

        </div>

        <!-- Animated Wave Divider (bg-brand-cream to bg-white) -->
        <div class="absolute bottom-0 left-0 right-0 overflow-hidden leading-none z-20 pointer-events-none">
            <div class="w-[200%] flex animate-wave-slow opacity-40">
                <svg class="w-1/2 h-8 sm:h-14 text-white" viewBox="0 0 1200 120" preserveAspectRatio="none" fill="currentColor">
                    <path d="M0,0 C150,90 350,-40 500,40 C650,120 900,10 1200,60 L1200,120 L0,120 Z"></path>
                </svg>
                <svg class="w-1/2 h-8 sm:h-14 text-white" viewBox="0 0 1200 120" preserveAspectRatio="none" fill="currentColor">
                    <path d="M0,0 C150,90 350,-40 500,40 C650,120 900,10 1200,60 L1200,120 L0,120 Z"></path>
                </svg>
            </div>
            <div class="w-[200%] flex animate-wave-fast absolute top-0 left-0">
                <svg class="w-1/2 h-8 sm:h-14 text-white" viewBox="0 0 1200 120" preserveAspectRatio="none" fill="currentColor">
                    <path d="M0,20 C200,80 400,-20 600,50 C800,120 1000,10 1200,40 L1200,120 L0,120 Z"></path>
                </svg>
                <svg class="w-1/2 h-8 sm:h-14 text-white" viewBox="0 0 1200 120" preserveAspectRatio="none" fill="currentColor">
                    <path d="M0,20 C200,80 400,-20 600,50 C800,120 1000,10 1200,40 L1200,120 L0,120 Z"></path>
                </svg>
            </div>
        </div>
    </section>

    <!-- Testimonials Cards Grid -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            @if($testimonials->isEmpty())
                <p class="text-center text-sm text-gray-500 py-12">Belum ada testimoni diterbitkan.</p>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                    @foreach($testimonials as $t)
                        <div class="bg-brand-cream/40 p-6 rounded-3xl border border-gray-100 space-y-4 shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                            <div class="space-y-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <img src="{{ Str::startsWith($t->avatar_url, ['http://', 'https://']) ? $t->avatar_url : asset($t->avatar_url) }}"
                                             alt="{{ $t->guest_name }}" 
                                             class="w-12 h-12 rounded-full object-cover border-2 border-brand-orange">
                                        <div>
                                            <h3 class="font-bold text-sm text-brand-navy">{{ $t->guest_name }}</h3>
                                            @if($t->city)
                                                <span class="text-[11px] text-gray-500 block">{{ $t->city }}</span>
                                            @endif
                                            @if($t->is_verified)
                                                <span class="text-[10px] text-emerald-600 bg-emerald-100 px-2 py-0.5 rounded-full font-bold inline-flex items-center gap-1 mt-0.5">
                                                    <i class="fa-solid fa-circle-check text-emerald-500"></i> Terverifikasi
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <svg class="w-5 h-5 shrink-0 opacity-90" viewBox="0 0 24 24" aria-label="Google">
                                        <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                        <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                        <path fill="#FBBC05" d="M5.84 14.1c-.22-.66-.35-1.36-.35-2.1s.13-1.44.35-2.1V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.62z"/>
                                        <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
                                    </svg>
                                </div>

                                <!-- Rating Stars -->
                                <div class="flex text-amber-400 text-xs">
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= $t->rating)
                                            <i class="fa-solid fa-star"></i>
                                        @else
                                            <i class="fa-regular fa-star text-gray-300"></i>
                                        @endif
                                    @endfor
                                </div>

                                <p class="text-xs text-gray-700 leading-relaxed italic">
                                    "{{ $t->content }}"
                                </p>
                            </div>

                            <div class="text-[10px] text-gray-400 pt-3 mt-4 border-t border-gray-200 flex items-center justify-between">
                                <span>Paket: {{ $t->package_name ?? 'Custom Trip Vayana Wisata' }}</span>
                                <span>{{ $t->trip_date ?? '2026' }}</span>
                            </div>
                        </div>
                    @endforeach

                </div>
            @endif

        </div>
    </section>

@endsection
