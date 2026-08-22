@extends('layouts.app')

@section('title', 'Jurnal Perjalanan & Cerita Desa - PIDIDI')

@section('content')

    <!-- Header Banner -->
    <section class="bg-brand-cream pt-12 pb-16 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <span
                class="bg-brand-orange/10 text-brand-orange font-extrabold text-xs uppercase tracking-wider px-3.5 py-1.5 rounded-full inline-flex items-center gap-1.5 mb-3">
                <i class="fa-solid fa-book-open text-brand-orange"></i> Jurnal & Inspirasi
            </span>
            <h1 class="text-3xl sm:text-5xl font-black text-brand-navy">
                Cerita Otentik dari <span class="text-brand-orange">Pelosok Negeri</span>
            </h1>
            <p class="text-gray-600 text-sm sm:text-base max-w-2xl mx-auto mt-3 font-medium">
                Kumpulan artikel pilihan mengenai tradisi desa, resep rahasia masakan lokal, dan panduan perjalanan yang
                menginspirasi.
            </p>

            <!-- Category Tabs -->
            <div class="flex flex-wrap items-center justify-center gap-2 mt-8">
                <button type="button" data-blog-filter="all"
                    class="blog-tab-btn active px-5 py-2 rounded-full text-xs sm:text-sm font-extrabold bg-brand-orange text-white shadow">
                    Semua Artikel
                </button>
                <button type="button" data-blog-filter="village"
                    class="blog-tab-btn px-5 py-2 rounded-full text-xs sm:text-sm font-extrabold bg-white text-brand-navy border border-gray-200 flex items-center gap-1.5">
                    <i class="fa-solid fa-tree-city text-amber-600"></i> Cerita Desa
                </button>
                <button type="button" data-blog-filter="food"
                    class="blog-tab-btn px-5 py-2 rounded-full text-xs sm:text-sm font-extrabold bg-white text-brand-navy border border-gray-200 flex items-center gap-1.5">
                    <i class="fa-solid fa-utensils text-rose-500"></i> Kuliner & Budaya
                </button>
                <button type="button" data-blog-filter="tips"
                    class="blog-tab-btn px-5 py-2 rounded-full text-xs sm:text-sm font-extrabold bg-white text-brand-navy border border-gray-200 flex items-center gap-1.5">
                    <i class="fa-solid fa-lightbulb text-amber-500"></i> Tips Perjalanan
                </button>
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

    <!-- Blog Cards Grid (Magazine Style) -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div id="blog-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Blog 1 -->
                <article
                    class="blog-card bg-white rounded-3xl overflow-hidden shadow-md border border-gray-100 bouncy-hover flex flex-col"
                    data-category="village">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1544644181-1484b3fdfc62?auto=format&fit=crop&w=600&q=80"
                            alt="Desa Sidemen Bali" class="w-full h-full object-cover">
                        <span
                            class="absolute top-4 left-4 bg-amber-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow flex items-center gap-1.5"><i
                                class="fa-solid fa-tree-city"></i> Cerita Desa</span>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                        <div>
                            <div class="flex items-center gap-2 text-xs text-gray-400 mb-2">
                                <span><i class="fa-solid fa-calendar"></i> 18 Agustus 2026</span>
                                <span>•</span>
                                <span><i class="fa-solid fa-clock"></i> 5 Menit Baca</span>
                            </div>
                            <h3 class="text-xl font-bold text-brand-navy hover:text-brand-orange transition-colors">
                                Menemukan Kedamaian Sejati di Desa Sidemen Karangasem
                            </h3>
                            <p class="text-xs text-gray-600 mt-2 line-clamp-3">
                                Jauh dari keramaian kuta, Desa Sidemen menawarkan pemandangan terasering sawah berlatar
                                Gunung Agung serta kerajinan tenun ikat legendaris.
                            </p>
                        </div>
                        <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                            <span class="text-xs font-bold text-brand-blue">Oleh Mas Danang (Guide PIDIDI)</span>
                            <span class="text-xs font-extrabold text-brand-orange flex items-center gap-1">Baca <i
                                    class="fa-solid fa-arrow-right"></i></span>
                        </div>
                    </div>
                </article>

                <!-- Blog 2 -->
                <article
                    class="blog-card bg-white rounded-3xl overflow-hidden shadow-md border border-gray-100 bouncy-hover flex flex-col"
                    data-category="food">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1596402184320-417e7178b2cd?auto=format&fit=crop&w=600&q=80"
                            alt="Kuliner Gudeg Jogja" class="w-full h-full object-cover">
                        <span
                            class="absolute top-4 left-4 bg-rose-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow flex items-center gap-1.5"><i
                                class="fa-solid fa-utensils"></i> Kuliner</span>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                        <div>
                            <div class="flex items-center gap-2 text-xs text-gray-400 mb-2">
                                <span><i class="fa-solid fa-calendar"></i> 12 Agustus 2026</span>
                                <span>•</span>
                                <span><i class="fa-solid fa-clock"></i> 4 Menit Baca</span>
                            </div>
                            <h3 class="text-xl font-bold text-brand-navy hover:text-brand-orange transition-colors">
                                Rahasia Kelezatan Gudeg Manggar Warisan Kraton Jogja
                            </h3>
                            <p class="text-xs text-gray-600 mt-2 line-clamp-3">
                                Mengapa gudeg bunga kelapa muda begitu langka dan disukai para bangsawan kuno? Simak
                                penelusuran kuliner otentik kami.
                            </p>
                        </div>
                        <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                            <span class="text-xs font-bold text-brand-blue">Oleh Mbak Nisa</span>
                            <span class="text-xs font-extrabold text-brand-orange flex items-center gap-1">Baca <i
                                    class="fa-solid fa-arrow-right"></i></span>
                        </div>
                    </div>
                </article>

                <!-- Blog 3 -->
                <article
                    class="blog-card bg-white rounded-3xl overflow-hidden shadow-md border border-gray-100 bouncy-hover flex flex-col"
                    data-category="tips">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?auto=format&fit=crop&w=600&q=80"
                            alt="Tips Liveaboard Komodo" class="w-full h-full object-cover">
                        <span
                            class="absolute top-4 left-4 bg-brand-blue text-white text-xs font-bold px-3 py-1 rounded-full shadow flex items-center gap-1.5"><i
                                class="fa-solid fa-lightbulb"></i> Tips Trip</span>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                        <div>
                            <div class="flex items-center gap-2 text-xs text-gray-400 mb-2">
                                <span><i class="fa-solid fa-calendar"></i> 05 Agustus 2026</span>
                                <span>•</span>
                                <span><i class="fa-solid fa-clock"></i> 6 Menit Baca</span>
                            </div>
                            <h3 class="text-xl font-bold text-brand-navy hover:text-brand-orange transition-colors">
                                Panduan Pertama Kali Liveaboard di Labuan Bajo
                            </h3>
                            <p class="text-xs text-gray-600 mt-2 line-clamp-3">
                                Apa saja yang perlu dibawa saat menginap di kapal Phinisi? Ini dia daftar perlengkapan wajib
                                dan etika menjaga kebersihan laut.
                            </p>
                        </div>
                        <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                            <span class="text-xs font-bold text-brand-blue">Oleh Tim Kapten PIDIDI</span>
                            <span class="text-xs font-extrabold text-brand-orange flex items-center gap-1">Baca <i
                                    class="fa-solid fa-arrow-right"></i></span>
                        </div>
                    </div>
                </article>

            </div>

        </div>
    </section>

@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.blog-tab-btn').on('click', function() {
                $('.blog-tab-btn').removeClass('active bg-brand-orange text-white').addClass(
                    'bg-white text-brand-navy border border-gray-200');
                $(this).addClass('active bg-brand-orange text-white').removeClass(
                    'bg-white text-brand-navy border border-gray-200');

                var filter = $(this).data('blog-filter');

                if (filter === 'all') {
                    $('.blog-card').fadeIn(300);
                } else {
                    $('.blog-card').each(function() {
                        if ($(this).data('category') === filter) {
                            $(this).fadeIn(300);
                        } else {
                            $(this).fadeOut(300);
                        }
                    });
                }
            });
        });
    </script>
@endpush
