@extends('layouts.app')

@section('title', 'Pilih Destinasi, Dapat Inspirasi - Travel Around Indonesia')

@section('content')

    <!-- Hero Section -->
    <section class="relative bg-brand-cream pt-6 sm:pt-10 pb-16 sm:pb-24 overflow-hidden">
        <!-- Floating Subtle Background Decorative Accents -->
        <div class="absolute -top-12 -right-12 w-64 h-64 bg-brand-orange/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute top-1/2 -left-12 w-64 h-64 bg-brand-blue/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">

                <!-- Left Hero Content -->
                <div class="lg:col-span-7 space-y-5 sm:space-y-6 text-center lg:text-left">

                    <!-- Badge Pill -->
                    <div
                        class="inline-flex items-center gap-2 bg-white/90 backdrop-blur-md px-4 py-2 rounded-full border border-brand-orange/30 shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-brand-orange animate-ping"></span>
                        <i class="fa-solid fa-earth-asia text-brand-orange text-xs sm:text-sm"></i>
                        <span class="text-xs sm:text-sm font-bold text-brand-navy">Travel Around Indonesia</span>
                    </div>

                    <!-- Main Headline -->
                    <h1
                        class="text-3xl sm:text-5xl lg:text-6xl font-black text-brand-navy leading-[1.25] tracking-tight relative">
                        <span class="inline-block">
                            Pilih Destinasi,
                        </span>
                        <br>
                        <span class="relative inline-block mt-1 sm:mt-2.5 px-3 py-1">
                            <!-- Soft Subtle Organic Wave Background (Samar Translucent Orange Tint) -->
                            <svg class="absolute -inset-x-2 -inset-y-1.5 w-[calc(100%+1rem)] h-[calc(100%+0.75rem)] text-brand-orange/12 -z-10 pointer-events-none"
                                viewBox="0 0 300 65" fill="currentColor" preserveAspectRatio="none">
                                <path
                                    d="M 5,18 C 50,2 100,28 150,12 C 200,-2 250,22 295,12 C 302,28 298,42 295,52 C 245,64 195,44 145,58 C 95,70 45,48 5,56 C -2,40 2,26 5,18 Z" />
                            </svg>

                            <!-- Headline Text -->
                            <span class="text-brand-orange font-black relative z-10">
                                Dapat Inspirasi
                            </span>

                            <!-- Double Layer Smooth Wave Underline SVG Accent -->
                            <span
                                class="absolute left-0 right-0 -bottom-2 sm:-bottom-3 w-full h-5 sm:h-7 pointer-events-none z-20">
                                <svg class="w-full h-full text-brand-blue overflow-visible" viewBox="0 0 240 24"
                                    fill="none" preserveAspectRatio="none">
                                    <!-- Back Glow Wave -->
                                    <path d="M 2 14 C 30 4, 60 22, 90 12 C 120 2, 150 22, 180 12 C 205 4, 225 18, 238 12"
                                        stroke="#60A5FA" stroke-width="6" stroke-linecap="round" opacity="0.4" />
                                    <!-- Front Sharp Blue Wave -->
                                    <path d="M 2 12 C 30 2, 60 20, 90 10 C 120 0, 150 20, 180 10 C 205 2, 225 16, 238 10"
                                        stroke="#0057FF" stroke-width="4.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                        </span>
                    </h1>

                    <!-- Body Subheadline -->
                    <p
                        class="text-sm sm:text-base lg:text-lg text-gray-700 max-w-xl mx-auto lg:mx-0 font-medium leading-relaxed">
                        Nikmati perjalanan autentik yang ramah, hangat, dan penuh kenangan. Temukan cerita tersembunyi di
                        setiap pelosok nusantara bersama pemandu lokal berdedikasi.
                    </p>

                    <!-- Interactive Pill Tags (Using Clean FontAwesome Icons) -->
                    <div class="flex flex-wrap items-center justify-center lg:justify-start gap-2 pt-1">
                        <span
                            class="bg-amber-50 text-amber-900 border border-amber-200/80 text-xs font-extrabold px-3.5 py-2 rounded-full shadow-sm flex items-center gap-2 hover:scale-105 transition-all cursor-pointer">
                            <i class="fa-solid fa-tree-city text-amber-600 text-sm"></i>
                            <span>Village Life</span>
                        </span>
                        <span
                            class="bg-rose-50 text-rose-900 border border-rose-200/80 text-xs font-extrabold px-3.5 py-2 rounded-full shadow-sm flex items-center gap-2 hover:scale-105 transition-all cursor-pointer">
                            <i class="fa-solid fa-utensils text-rose-500 text-sm"></i>
                            <span>Taste Local</span>
                        </span>
                        <span
                            class="bg-emerald-50 text-emerald-900 border border-emerald-200/80 text-xs font-extrabold px-3.5 py-2 rounded-full shadow-sm flex items-center gap-2 hover:scale-105 transition-all cursor-pointer">
                            <i class="fa-solid fa-leaf text-emerald-500 text-sm"></i>
                            <span>Wellness & Nature</span>
                        </span>
                        <span
                            class="bg-indigo-50 text-indigo-900 border border-indigo-200/80 text-xs font-extrabold px-3.5 py-2 rounded-full shadow-sm flex items-center gap-2 hover:scale-105 transition-all cursor-pointer">
                            <i class="fa-solid fa-camera text-indigo-500 text-sm"></i>
                            <span>Photo Spot</span>
                        </span>
                    </div>

                    <!-- CTA Action Buttons -->
                    <div
                        class="flex flex-col sm:flex-row items-stretch sm:items-center justify-center lg:justify-start gap-3.5 pt-3">
                        <a href="#search-widget"
                            class="w-full sm:w-auto bg-gradient-to-r from-orange-500 to-amber-500 hover:from-orange-600 hover:to-amber-600 text-white font-extrabold text-base px-8 py-4 rounded-full shadow-xl shadow-orange-500/25 transition-all duration-300 flex items-center justify-center gap-3 transform active:scale-95">
                            <i class="fa-solid fa-compass text-xl"></i>
                            <span>Cari Destinasi Impian</span>
                        </a>
                        <a href="{{ route('tours') }}#bespoke"
                            class="w-full sm:w-auto bg-white hover:bg-brand-blue hover:text-white text-brand-navy border-2 border-brand-blue/80 font-extrabold text-base px-7 py-3.5 rounded-full shadow-md transition-all duration-300 flex items-center justify-center gap-2.5 active:scale-95">
                            <i class="fa-solid fa-wand-magic-sparkles text-brand-orange"></i>
                            <span>Rancang Trip Sendiri</span>
                        </a>
                    </div>

                    <!-- Trust Stats Badge -->
                    <div class="pt-6 border-t border-brand-orange/20 grid grid-cols-3 gap-3 max-w-lg mx-auto lg:mx-0">
                        <div
                            class="bg-white/60 backdrop-blur-sm p-3 rounded-2xl border border-white/60 shadow-sm text-center">
                            <p class="text-xl sm:text-3xl font-black text-brand-blue">1,200+</p>
                            <p class="text-[11px] sm:text-xs font-bold text-gray-600">Traveler Bahagia</p>
                        </div>
                        <div
                            class="bg-white/60 backdrop-blur-sm p-3 rounded-2xl border border-white/60 shadow-sm text-center">
                            <p class="text-xl sm:text-3xl font-black text-brand-orange">45+</p>
                            <p class="text-[11px] sm:text-xs font-bold text-gray-600">Desa Wisata Mitra</p>
                        </div>
                        <div
                            class="bg-white/60 backdrop-blur-sm p-3 rounded-2xl border border-white/60 shadow-sm text-center">
                            <p class="text-xl sm:text-3xl font-black text-amber-500">4.9/5</p>
                            <p class="text-[11px] sm:text-xs font-bold text-gray-600">Rating Ulasan</p>
                        </div>
                    </div>

                </div>

                <!-- Right Hero Visual Grid / Mockup -->
                <div class="lg:col-span-5 relative mt-6 lg:mt-0">
                    <div class="relative mx-auto max-w-md lg:max-w-none">
                        <!-- Main Hero Image Frame -->
                        <div
                            class="relative z-10 rounded-3xl overflow-hidden shadow-2xl border-4 border-white transform rotate-1 hover:rotate-0 transition-transform duration-500">
                            <img src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=800&q=80"
                                alt="PIDIDI Bali Beach & Culture" class="w-full h-80 sm:h-96 object-cover" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-brand-navy/80 via-transparent to-transparent flex items-end p-6">
                                <div class="text-white space-y-1">
                                    <span
                                        class="bg-brand-orange text-white text-[10px] uppercase font-bold px-2.5 py-1 rounded-full">Spotlight</span>
                                    <h3 class="text-lg font-bold">Labuan Bajo & Komodo Odyssey</h3>
                                    <p class="text-xs text-amber-200"><i class="fa-solid fa-location-dot"></i> Nusa Tenggara
                                        Timur</p>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Mini Card 1 -->
                        <div class="absolute -top-6 -left-4 z-20 bg-white p-3 rounded-2xl shadow-xl border border-brand-orange/20 flex items-center gap-3 animate-bounce"
                            style="animation-duration: 4s;">
                            <div
                                class="w-10 h-10 rounded-full bg-amber-100 flex items-center justify-center text-brand-orange text-lg">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                            <div>
                                <p class="text-xs font-extrabold text-brand-navy">Otentik & Bermakna</p>
                                <p class="text-[10px] text-gray-500">Bukan sekadar foto-foto</p>
                            </div>
                        </div>

                        <!-- Floating Mini Card 2 -->
                        <div
                            class="absolute -bottom-6 -right-4 z-20 bg-white p-3.5 rounded-2xl shadow-xl border border-brand-blue/20 flex items-center gap-3">
                            <div class="flex -space-x-2">
                                <img class="w-8 h-8 rounded-full border-2 border-white object-cover"
                                    src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80"
                                    alt="Avatar User">
                                <img class="w-8 h-8 rounded-full border-2 border-white object-cover"
                                    src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&q=80"
                                    alt="Avatar User">
                                <img class="w-8 h-8 rounded-full border-2 border-white object-cover"
                                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=150&q=80"
                                    alt="Avatar User">
                            </div>
                            <div>
                                <div class="flex text-amber-400 text-xs">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i>
                                </div>
                                <p class="text-[10px] font-bold text-gray-700">100% Ulasan Bintang 5</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Search Filter Widget (jQuery Interactive) -->
    <section id="search-widget" class="relative -mt-10 z-30 max-w-5xl mx-auto px-4">
        <div class="bg-white rounded-3xl p-6 md:p-8 shadow-2xl border border-brand-orange/20 backdrop-blur-lg">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4 border-b border-gray-100 pb-4 mb-4">
                <h2 class="text-xl font-black text-brand-navy flex items-center gap-2">
                    <i class="fa-solid fa-sliders text-brand-orange"></i>
                    <span>Cari Pengalaman Perjalanan Anda</span>
                </h2>
                <span
                    class="text-xs font-semibold text-brand-blue bg-brand-blue/10 px-3 py-1 rounded-full flex items-center gap-1.5">
                    <i class="fa-solid fa-bolt text-brand-orange"></i> Filter Cepat
                </span>
            </div>

            <form id="home-search-form" class="grid grid-cols-1 md:grid-cols-4 gap-4">

                <!-- Filter Destinasi -->
                <div>
                    <label for="filter-destination" class="block text-xs font-bold text-gray-600 mb-1">
                        <i class="fa-solid fa-location-dot text-brand-orange mr-1"></i> Destinasi
                    </label>
                    <select id="filter-destination"
                        class="w-full bg-brand-cream/60 border border-gray-200 rounded-xl px-3 py-2.5 text-sm font-semibold text-brand-navy focus:outline-none focus:ring-2 focus:ring-brand-orange">
                        <option value="all">Semua Destinasi</option>
                        <option value="bali">Bali & Nusa Penida</option>
                        <option value="labuan-bajo">Labuan Bajo</option>
                        <option value="yogyakarta">Yogyakarta & Borobudur</option>
                        <option value="toraja">Tana Toraja</option>
                        <option value="raja-ampat">Raja Ampat</option>
                    </select>
                </div>

                <!-- Filter Jenis Pengalaman -->
                <div>
                    <label for="filter-category" class="block text-xs font-bold text-gray-600 mb-1">
                        <i class="fa-solid fa-sparkles text-brand-orange mr-1"></i> Jenis Trip
                    </label>
                    <select id="filter-category"
                        class="w-full bg-brand-cream/60 border border-gray-200 rounded-xl px-3 py-2.5 text-sm font-semibold text-brand-navy focus:outline-none focus:ring-2 focus:ring-brand-orange">
                        <option value="all">Semua Pengalaman</option>
                        <option value="curated">Curated Experience</option>
                        <option value="essential">Essential Trip</option>
                        <option value="bespoke">Bespoke Custom</option>
                    </select>
                </div>

                <!-- Filter Rentang Budget -->
                <div>
                    <label for="filter-budget" class="block text-xs font-bold text-gray-600 mb-1">
                        <i class="fa-solid fa-wallet text-brand-orange mr-1"></i> Estimated Budget
                    </label>
                    <select id="filter-budget"
                        class="w-full bg-brand-cream/60 border border-gray-200 rounded-xl px-3 py-2.5 text-sm font-semibold text-brand-navy focus:outline-none focus:ring-2 focus:ring-brand-orange">
                        <option value="all">Semua Budget</option>
                        <option value="budget">Di bawah Rp 3 Juta</option>
                        <option value="mid">Rp 3 Juta - Rp 7 Juta</option>
                        <option value="premium">Di atas Rp 7 Juta</option>
                    </select>
                </div>

                <!-- Submit Filter Button -->
                <div class="flex items-end">
                    <button type="submit" id="btn-search-trigger"
                        class="w-full bg-brand-orange hover:bg-orange-600 text-white font-bold py-2.5 px-4 rounded-xl shadow-lg hover:shadow-orange-500/30 transition-all flex items-center justify-center gap-2">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <span>Temukan Trip</span>
                    </button>
                </div>

            </form>
        </div>
    </section>

    <!-- Animated Bottom Wave Transition (bg-brand-cream to bg-white) -->
    <div class="relative w-full overflow-hidden leading-none z-20 -mt-6 sm:-mt-8 bg-brand-cream">
        <div class="w-[200%] flex animate-wave-slow pointer-events-none opacity-40">
            <svg class="w-1/2 h-10 sm:h-16 text-white" viewBox="0 0 1200 120" preserveAspectRatio="none" fill="currentColor">
                <path d="M0,0 C150,90 350,-40 500,40 C650,120 900,10 1200,60 L1200,120 L0,120 Z"></path>
            </svg>
            <svg class="w-1/2 h-10 sm:h-16 text-white" viewBox="0 0 1200 120" preserveAspectRatio="none" fill="currentColor">
                <path d="M0,0 C150,90 350,-40 500,40 C650,120 900,10 1200,60 L1200,120 L0,120 Z"></path>
            </svg>
        </div>
        <div class="w-[200%] flex animate-wave-fast absolute top-0 left-0 pointer-events-none">
            <svg class="w-1/2 h-10 sm:h-16 text-white" viewBox="0 0 1200 120" preserveAspectRatio="none" fill="currentColor">
                <path d="M0,20 C200,80 400,-20 600,50 C800,120 1000,10 1200,40 L1200,120 L0,120 Z"></path>
            </svg>
            <svg class="w-1/2 h-10 sm:h-16 text-white" viewBox="0 0 1200 120" preserveAspectRatio="none" fill="currentColor">
                <path d="M0,20 C200,80 400,-20 600,50 C800,120 1000,10 1200,40 L1200,120 L0,120 Z"></path>
            </svg>
        </div>
    </div>

    <!-- Hook Section: Philosophy PIDIDI -->
    <section class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="bg-gradient-to-r from-brand-cream via-orange-50 to-amber-50 rounded-3xl p-8 md:p-12 shadow-md border border-brand-orange/15 relative overflow-hidden">

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center relative z-10">
                    <div class="lg:col-span-8 space-y-4">
                        <span class="bg-brand-blue text-white text-xs font-extrabold uppercase px-3 py-1 rounded-full">
                            Filosifi PIDIDI
                        </span>
                        <h2 class="text-2xl sm:text-3xl md:text-4xl font-black text-brand-navy leading-snug">
                            Bukan Sekadar Travel Agent,<br>
                            Tapi <span class="text-brand-orange">Pembuat Cerita & Kenangan</span>
                        </h2>
                        <p class="text-gray-700 text-base leading-relaxed">
                            Di PIDIDI, kami percaya setiap perjalanan adalah kanvas pengalaman. Kami tidak hanya mengantar
                            Anda ke destinasi wisata populer, tetapi mengajak Anda meresapi kehidupan warga lokal, menikmati
                            hidangan otentik resep turun-temurun, serta menciptakan inspirasi hidup yang membawa dampak
                            nyata bagi komunitas setempat.
                        </p>
                    </div>
                    <div class="lg:col-span-4 flex justify-center">
                        <div
                            class="text-center bg-white p-6 rounded-2xl shadow-xl border border-brand-orange/20 max-w-xs transform hover:rotate-1 transition-transform">
                            <i class="fa-solid fa-quote-left text-3xl text-brand-orange mb-2 block"></i>
                            <p class="text-xs italic text-gray-600 font-medium">
                                "Pulang dari perjalanan tidak hanya membawa foto, tapi membawa makna baru tentang
                                kehidupan."
                            </p>
                            <p class="text-xs font-bold text-brand-navy mt-3">- Tim Pendiri PIDIDI</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Grid Paket Wisata (Signature & Essential) -->
    <section id="tour-grid-section" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto space-y-3 mb-12">
                <span
                    class="bg-brand-orange/10 text-brand-orange font-extrabold text-xs uppercase tracking-wider px-3.5 py-1.5 rounded-full inline-flex items-center gap-1.5">
                    <i class="fa-solid fa-star text-amber-400"></i> Pilihan Paket Terfavorit
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-brand-navy">
                    Curated & Essential Travel Experience
                </h2>
                <p class="text-gray-600 text-sm sm:text-base">
                    Dirancang khusus dengan fleksibilitas tinggi, keamanan terjamin, dan pemandu lokal yang ramah.
                </p>
            </div>

            <!-- Tour Cards Grid -->
            <div id="tour-cards-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Flagship Special Card: PIDIDI JOURNEY - THE JOGJA YOU HAVEN'T MET -->
                <div class="tour-card lg:col-span-3 bg-gradient-to-r from-brand-navy via-brand-light-navy to-brand-navy rounded-3xl overflow-hidden shadow-2xl border-2 border-amber-400/40 text-white p-6 sm:p-10 relative group bouncy-hover"
                    data-destination="yogyakarta" data-category="curated" data-budget="mid">
                    <div class="absolute -right-10 -bottom-10 opacity-10 group-hover:opacity-20 transition-opacity">
                        <i class="fa-solid fa-compass text-9xl text-amber-300"></i>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center relative z-10">
                        <div class="lg:col-span-7 space-y-4">
                            <div class="flex flex-wrap items-center gap-2">
                                <span
                                    class="bg-amber-400 text-brand-navy font-black text-xs px-3 py-1 rounded-full uppercase flex items-center gap-1"><i
                                        class="fa-solid fa-sparkles"></i> SIGNATURE JOURNEY</span>
                                <span
                                    class="bg-white/10 text-white text-xs font-bold px-3 py-1 rounded-full flex items-center gap-1.5"><i
                                        class="fa-solid fa-users text-brand-orange"></i> Small Group 8-12 Pax</span>
                                <span
                                    class="bg-brand-orange text-white text-xs font-bold px-3 py-1 rounded-full flex items-center gap-1.5"><i
                                        class="fa-solid fa-clock"></i> 3H 2M</span>
                            </div>

                            <div>
                                <span
                                    class="text-brand-orange font-extrabold text-xs tracking-widest uppercase block">PIDIDI
                                    JOURNEY</span>
                                <h3 class="text-2xl sm:text-3xl font-black text-white">THE JOGJA YOU HAVEN'T MET</h3>
                                <p class="text-amber-200 text-sm italic mt-1">"Datang sebagai wisatawan. Pulang membawa
                                    cerita."</p>
                            </div>

                            <p class="text-xs sm:text-sm text-gray-300 leading-relaxed line-clamp-2">
                                Menemukan Jogja melalui manusia, karya, rasa, dan cerita. Walking experience kampung
                                bercerita, meet the maker batik/gerabah, belanja pasar tradisional & cook bersama host,
                                hingga PIDIDI Night.
                            </p>

                            <div class="flex flex-wrap gap-2 text-[11px] font-bold text-gray-200 pt-1">
                                <span class="bg-white/10 px-2.5 py-1 rounded-lg flex items-center gap-1.5"><i
                                        class="fa-solid fa-book-open text-brand-orange"></i> PIDIDI Journey Book</span>
                                <span class="bg-white/10 px-2.5 py-1 rounded-lg flex items-center gap-1.5"><i
                                        class="fa-solid fa-ticket text-brand-orange"></i> Local Voucher</span>
                                <span class="bg-white/10 px-2.5 py-1 rounded-lg flex items-center gap-1.5"><i
                                        class="fa-solid fa-house-chimney text-brand-orange"></i> Boutique Homestay</span>
                            </div>
                        </div>

                        <div
                            class="lg:col-span-5 flex flex-col items-center lg:items-end space-y-4 border-t lg:border-t-0 lg:border-l border-white/15 pt-4 lg:pt-0 lg:pl-8">
                            <div class="text-center lg:text-right">
                                <span class="text-xs text-gray-300 font-semibold block">Curated Small Group</span>
                                <span class="text-2xl sm:text-3xl font-black text-amber-300">Rp 3.650.000</span>
                                <span class="text-[10px] text-gray-400 block">/orang (termasuk semua aktivitas)</span>
                            </div>

                            <a href="{{ route('tours.jogja-journey') }}"
                                class="w-full sm:w-auto bg-brand-orange hover:bg-orange-600 text-white font-extrabold text-sm px-6 py-3.5 rounded-full shadow-xl transition-all flex items-center justify-center gap-2">
                                <span>Jelajahi Itinerari Lengkap</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>


                <!-- Card 1 -->
                <div class="tour-card bg-white rounded-3xl overflow-hidden shadow-lg border border-gray-100 bouncy-hover flex flex-col"
                    data-destination="bali" data-category="curated" data-budget="mid">
                    <div class="relative h-60 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=600&q=80"
                            alt="Ubud Cultural & Village Life"
                            class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-500">
                        <span
                            class="absolute top-4 left-4 bg-brand-orange text-white text-xs font-bold px-3 py-1 rounded-full shadow flex items-center gap-1.5">
                            <i class="fa-solid fa-tree-city"></i> Village Life
                        </span>
                        <span
                            class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-brand-navy text-xs font-bold px-2.5 py-1 rounded-full shadow flex items-center gap-1">
                            <i class="fa-solid fa-clock text-brand-orange"></i> 4H 3M
                        </span>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                        <div>
                            <div class="flex items-center justify-between text-xs text-gray-500 mb-2">
                                <span><i class="fa-solid fa-location-dot text-brand-orange mr-1"></i> Ubud, Bali</span>
                                <span class="text-amber-500 font-bold"><i class="fa-solid fa-star"></i> 4.9 (128)</span>
                            </div>
                            <h3
                                class="text-xl font-bold text-brand-navy line-clamp-1 hover:text-brand-orange transition-colors">
                                Ubud Cultural & Authentic Village Life
                            </h3>
                            <p class="text-xs text-gray-600 mt-2 line-clamp-2">
                                Tinggal bersama warga lokal Ubud, belajar membuat banten tradisional, dan jelajah sawah
                                bertingkat Tegallalang.
                            </p>
                        </div>
                        <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                            <div>
                                <span class="text-[10px] text-gray-400 font-semibold block">Mulai dari</span>
                                <span class="text-lg font-black text-brand-orange">Rp 3.850.000</span>
                                <span class="text-[10px] text-gray-500">/orang</span>
                            </div>
                            <a href="{{ route('tours') }}"
                                class="bg-brand-blue hover:bg-blue-700 text-white text-xs font-bold px-4 py-2.5 rounded-xl shadow transition-all">
                                Detail Trip
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="tour-card bg-white rounded-3xl overflow-hidden shadow-lg border border-gray-100 bouncy-hover flex flex-col"
                    data-destination="labuan-bajo" data-category="curated" data-budget="premium">
                    <div class="relative h-60 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?auto=format&fit=crop&w=600&q=80"
                            alt="Labuan Bajo Komodo Sailing"
                            class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-500">
                        <span
                            class="absolute top-4 left-4 bg-brand-blue text-white text-xs font-bold px-3 py-1 rounded-full shadow flex items-center gap-1.5">
                            <i class="fa-solid fa-camera"></i> Photo Spot
                        </span>
                        <span
                            class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-brand-navy text-xs font-bold px-2.5 py-1 rounded-full shadow flex items-center gap-1">
                            <i class="fa-solid fa-clock text-brand-orange"></i> 3H 2M
                        </span>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                        <div>
                            <div class="flex items-center justify-between text-xs text-gray-500 mb-2">
                                <span><i class="fa-solid fa-location-dot text-brand-orange mr-1"></i> Labuan Bajo,
                                    NTT</span>
                                <span class="text-amber-500 font-bold"><i class="fa-solid fa-star"></i> 5.0 (96)</span>
                            </div>
                            <h3
                                class="text-xl font-bold text-brand-navy line-clamp-1 hover:text-brand-orange transition-colors">
                                Liveaboard Sailing Komodo Islands
                            </h3>
                            <p class="text-xs text-gray-600 mt-2 line-clamp-2">
                                Mengarungi lautan Phinisi premium, trekking Pulau Padar saat sunrise, dan bertemu satwa
                                Komodo otentik.
                            </p>
                        </div>
                        <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                            <div>
                                <span class="text-[10px] text-gray-400 font-semibold block">Mulai dari</span>
                                <span class="text-lg font-black text-brand-orange">Rp 7.500.000</span>
                                <span class="text-[10px] text-gray-500">/orang</span>
                            </div>
                            <a href="{{ route('tours') }}"
                                class="bg-brand-blue hover:bg-blue-700 text-white text-xs font-bold px-4 py-2.5 rounded-xl shadow transition-all">
                                Detail Trip
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="tour-card bg-white rounded-3xl overflow-hidden shadow-lg border border-gray-100 bouncy-hover flex flex-col"
                    data-destination="yogyakarta" data-category="essential" data-budget="budget">
                    <div class="relative h-60 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1596402184320-417e7178b2cd?auto=format&fit=crop&w=600&q=80"
                            alt="Jogja Culinary & Village Heritage"
                            class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-500">
                        <span
                            class="absolute top-4 left-4 bg-rose-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow flex items-center gap-1.5">
                            <i class="fa-solid fa-utensils"></i> Taste Local
                        </span>
                        <span
                            class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-brand-navy text-xs font-bold px-2.5 py-1 rounded-full shadow flex items-center gap-1">
                            <i class="fa-solid fa-clock text-brand-orange"></i> 3H 2M
                        </span>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                        <div>
                            <div class="flex items-center justify-between text-xs text-gray-500 mb-2">
                                <span><i class="fa-solid fa-location-dot text-brand-orange mr-1"></i> Yogyakarta</span>
                                <span class="text-amber-500 font-bold"><i class="fa-solid fa-star"></i> 4.8 (210)</span>
                            </div>
                            <h3
                                class="text-xl font-bold text-brand-navy line-clamp-1 hover:text-brand-orange transition-colors">
                                Jogja Kuliner Resep Leluhur & Borobudur
                            </h3>
                            <p class="text-xs text-gray-600 mt-2 line-clamp-2">
                                Jelajah gudeg legendaris, workshop pembuatan gerabah di Desa Kasongan, dan matahari terbit
                                Candi Borobudur.
                            </p>
                        </div>
                        <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                            <div>
                                <span class="text-[10px] text-gray-400 font-semibold block">Mulai dari</span>
                                <span class="text-lg font-black text-brand-orange">Rp 2.450.000</span>
                                <span class="text-[10px] text-gray-500">/orang</span>
                            </div>
                            <a href="{{ route('tours') }}"
                                class="bg-brand-blue hover:bg-blue-700 text-white text-xs font-bold px-4 py-2.5 rounded-xl shadow transition-all">
                                Detail Trip
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="mt-12 text-center">
                <a href="{{ route('tours') }}"
                    class="inline-flex items-center gap-2 bg-brand-cream hover:bg-brand-orange hover:text-white text-brand-navy border-2 border-brand-orange font-bold text-sm px-8 py-3.5 rounded-full shadow transition-all duration-300">
                    <span>Lihat Semua Paket Wisata (20+)</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

        </div>
    </section>

    <!-- Top Animated Wave Divider (bg-white into bg-brand-cream) -->
    <div class="relative w-full overflow-hidden leading-none z-20 bg-white">
        <div class="w-[200%] flex animate-wave-slow pointer-events-none opacity-30">
            <svg class="w-1/2 h-10 sm:h-16 text-brand-cream" viewBox="0 0 1200 120" preserveAspectRatio="none" fill="currentColor">
                <path d="M0,0 C150,90 350,-40 500,40 C650,120 900,10 1200,60 L1200,120 L0,120 Z"></path>
            </svg>
            <svg class="w-1/2 h-10 sm:h-16 text-brand-cream" viewBox="0 0 1200 120" preserveAspectRatio="none" fill="currentColor">
                <path d="M0,0 C150,90 350,-40 500,40 C650,120 900,10 1200,60 L1200,120 L0,120 Z"></path>
            </svg>
        </div>
        <div class="w-[200%] flex animate-wave-fast absolute top-0 left-0 pointer-events-none">
            <svg class="w-1/2 h-10 sm:h-16 text-brand-cream" viewBox="0 0 1200 120" preserveAspectRatio="none" fill="currentColor">
                <path d="M0,20 C200,80 400,-20 600,50 C800,120 1000,10 1200,40 L1200,120 L0,120 Z"></path>
            </svg>
            <svg class="w-1/2 h-10 sm:h-16 text-brand-cream" viewBox="0 0 1200 120" preserveAspectRatio="none" fill="currentColor">
                <path d="M0,20 C200,80 400,-20 600,50 C800,120 1000,10 1200,40 L1200,120 L0,120 Z"></path>
            </svg>
        </div>
    </div>

    <!-- Section Why Us / 5 Pilar PIDIDI -->
    <section class="py-16 bg-brand-cream relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto space-y-3 mb-12">
                <span
                    class="bg-brand-blue/10 text-brand-blue font-extrabold text-xs uppercase tracking-wider px-3.5 py-1.5 rounded-full inline-flex items-center gap-1.5">
                    <i class="fa-solid fa-shield-heart text-brand-orange"></i> Keunggulan PIDIDI
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-brand-navy">
                    Mengapa Memilih Perjalanan Bersama PIDIDI?
                </h2>
                <p class="text-gray-600 text-sm sm:text-base">
                    Kami berkomitmen memberikan nilai tambah di setiap helai perjalanan Anda.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-6">

                <!-- Pilar 1 -->
                <div
                    class="bg-white p-6 rounded-3xl shadow-md border border-brand-orange/10 hover:shadow-xl transition-all text-center space-y-3 bouncy-hover">
                    <div
                        class="w-14 h-14 mx-auto rounded-2xl bg-orange-100 text-brand-orange flex items-center justify-center text-2xl shadow-inner">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    <h3 class="font-extrabold text-base text-brand-navy">Pengalaman Bermakna</h3>
                    <p class="text-xs text-gray-600 leading-relaxed">
                        Setiap itinerari dirancang mendalam untuk menyentuh hati dan inspirasi jiwa.
                    </p>
                </div>

                <!-- Pilar 2 -->
                <div
                    class="bg-white p-6 rounded-3xl shadow-md border border-brand-blue/10 hover:shadow-xl transition-all text-center space-y-3 bouncy-hover">
                    <div
                        class="w-14 h-14 mx-auto rounded-2xl bg-blue-100 text-brand-blue flex items-center justify-center text-2xl shadow-inner">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <h3 class="font-extrabold text-base text-brand-navy">Terhubung Manusia Lokal</h3>
                    <p class="text-xs text-gray-600 leading-relaxed">
                        Berinteraksi langsung dengan pencerita dan seniman lokal yang ramah dan jujur.
                    </p>
                </div>

                <!-- Pilar 3 -->
                <div
                    class="bg-white p-6 rounded-3xl shadow-md border border-emerald-500/10 hover:shadow-xl transition-all text-center space-y-3 bouncy-hover">
                    <div
                        class="w-14 h-14 mx-auto rounded-2xl bg-emerald-100 text-emerald-600 flex items-center justify-center text-2xl shadow-inner">
                        <i class="fa-solid fa-hand-holding-heart"></i>
                    </div>
                    <h3 class="font-extrabold text-base text-brand-navy">Ekonomi Lokal</h3>
                    <p class="text-xs text-gray-600 leading-relaxed">
                        Mendukung UMKM desa dan pengrajin tradisional secara langsung dan berkelanjutan.
                    </p>
                </div>

                <!-- Pilar 4 -->
                <div
                    class="bg-white p-6 rounded-3xl shadow-md border border-amber-500/10 hover:shadow-xl transition-all text-center space-y-3 bouncy-hover">
                    <div
                        class="w-14 h-14 mx-auto rounded-2xl bg-amber-100 text-amber-600 flex items-center justify-center text-2xl shadow-inner">
                        <i class="fa-solid fa-camera-retro"></i>
                    </div>
                    <h3 class="font-extrabold text-base text-brand-navy">Cerita Otentik</h3>
                    <p class="text-xs text-gray-600 leading-relaxed">
                        Kenangan indah yang dikemas dalam cerita foto dan sudut pandang lokal yang asli.
                    </p>
                </div>

                <!-- Pilar 5 -->
                <div
                    class="bg-white p-6 rounded-3xl shadow-md border border-purple-500/10 hover:shadow-xl transition-all text-center space-y-3 bouncy-hover">
                    <div
                        class="w-14 h-14 mx-auto rounded-2xl bg-purple-100 text-purple-600 flex items-center justify-center text-2xl shadow-inner">
                        <i class="fa-solid fa-face-smile-wink"></i>
                    </div>
                    <h3 class="font-extrabold text-base text-brand-navy">Inspirasi Pulang</h3>
                    <p class="text-xs text-gray-600 leading-relaxed">
                        Pulang membawa kesegaran baru, ide kreatif, dan energi positif untuk berkarya.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- Bottom Animated Wave Divider (bg-brand-cream into bg-white) -->
    <div class="relative w-full overflow-hidden leading-none z-20 bg-brand-cream">
        <div class="w-[200%] flex animate-wave-slow pointer-events-none opacity-40">
            <svg class="w-1/2 h-10 sm:h-16 text-white" viewBox="0 0 1200 120" preserveAspectRatio="none" fill="currentColor">
                <path d="M0,0 C150,90 350,-40 500,40 C650,120 900,10 1200,60 L1200,120 L0,120 Z"></path>
            </svg>
            <svg class="w-1/2 h-10 sm:h-16 text-white" viewBox="0 0 1200 120" preserveAspectRatio="none" fill="currentColor">
                <path d="M0,0 C150,90 350,-40 500,40 C650,120 900,10 1200,60 L1200,120 L0,120 Z"></path>
            </svg>
        </div>
        <div class="w-[200%] flex animate-wave-fast absolute top-0 left-0 pointer-events-none">
            <svg class="w-1/2 h-10 sm:h-16 text-white" viewBox="0 0 1200 120" preserveAspectRatio="none" fill="currentColor">
                <path d="M0,20 C200,80 400,-20 600,50 C800,120 1000,10 1200,40 L1200,120 L0,120 Z"></path>
            </svg>
            <svg class="w-1/2 h-10 sm:h-16 text-white" viewBox="0 0 1200 120" preserveAspectRatio="none" fill="currentColor">
                <path d="M0,20 C200,80 400,-20 600,50 C800,120 1000,10 1200,40 L1200,120 L0,120 Z"></path>
            </svg>
        </div>
    </div>

    <!-- Testimoni Section (Google Review Style) -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
                <div>
                    <span
                        class="bg-amber-100 text-amber-800 font-extrabold text-xs uppercase tracking-wider px-3.5 py-1.5 rounded-full inline-flex items-center gap-1.5">
                        <i class="fa-solid fa-star text-amber-500"></i> Ulasan Asli Google Review
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-black text-brand-navy mt-3">
                        Cerita dari Para Traveler
                    </h2>
                </div>
                <div class="mt-4 md:mt-0 flex items-center gap-2">
                    <div class="flex text-amber-400 text-lg">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <span class="text-sm font-bold text-gray-700">4.9 / 5.0 (250+ Ulasan)</span>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- Review 1 -->
                <div class="bg-brand-cream/40 p-6 rounded-3xl border border-gray-100 space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80"
                                alt="Siti Rahma" class="w-12 h-12 rounded-full object-cover border-2 border-brand-orange">
                            <div>
                                <h3 class="font-bold text-sm text-brand-navy">Siti Rahmawati</h3>
                                <p class="text-[10px] text-gray-500">Jakarta • Trip Ubud Bali</p>
                            </div>
                        </div>
                        <svg class="w-5 h-5 shrink-0 opacity-90" viewBox="0 0 24 24" aria-label="Google">
                            <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                            <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                            <path fill="#FBBC05" d="M5.84 14.1c-.22-.66-.35-1.36-.35-2.1s.13-1.44.35-2.1V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.62z"/>
                            <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
                        </svg>
                    </div>
                    <div class="flex text-amber-400 text-xs">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-xs text-gray-700 leading-relaxed italic">
                        "Pengalaman luar biasa bersama PIDIDI! Kami diajak menginap di desa binaan, belajar masak kuliner
                        lokal dengan bahan organik. Rasanya seperti berkunjung ke rumah saudara sendiri. Highly
                        recommended!"
                    </p>
                </div>

                <!-- Review 2 -->
                <div class="bg-brand-cream/40 p-6 rounded-3xl border border-gray-100 space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&q=80"
                                alt="Budi Santoso" class="w-12 h-12 rounded-full object-cover border-2 border-brand-blue">
                            <div>
                                <h3 class="font-bold text-sm text-brand-navy">Budi Santoso</h3>
                                <p class="text-[10px] text-gray-500">Surabaya • Liveaboard Komodo</p>
                            </div>
                        </div>
                        <svg class="w-5 h-5 shrink-0 opacity-90" viewBox="0 0 24 24" aria-label="Google">
                            <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                            <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                            <path fill="#FBBC05" d="M5.84 14.1c-.22-.66-.35-1.36-.35-2.1s.13-1.44.35-2.1V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.62z"/>
                            <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
                        </svg>
                    </div>
                    <div class="flex text-amber-400 text-xs">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-xs text-gray-700 leading-relaxed italic">
                        "Fasilitas kapalnya bersih dan nyaman banget. Tour guide dari PIDIDI ramah dan tahu spot foto yang
                        gak terlalu ramai. Anak-anak saya senang sekali lihat Komodo dan snorkeling di Pink Beach."
                    </p>
                </div>

                <!-- Review 3 -->
                <div class="bg-brand-cream/40 p-6 rounded-3xl border border-gray-100 space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=150&q=80"
                                alt="Dewi Lestari"
                                class="w-12 h-12 rounded-full object-cover border-2 border-brand-orange">
                            <div>
                                <h3 class="font-bold text-sm text-brand-navy">Dewi Lestari</h3>
                                <p class="text-[10px] text-gray-500">Bandung • Bespoke Custom Trip</p>
                            </div>
                        </div>
                        <svg class="w-5 h-5 shrink-0 opacity-90" viewBox="0 0 24 24" aria-label="Google">
                            <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                            <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                            <path fill="#FBBC05" d="M5.84 14.1c-.22-.66-.35-1.36-.35-2.1s.13-1.44.35-2.1V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.62z"/>
                            <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
                        </svg>
                    </div>
                    <div class="flex text-amber-400 text-xs">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-xs text-gray-700 leading-relaxed italic">
                        "Req trip custom untuk anniversary pernikahan kami disiapkan sangat mendetail. Kejutan dinner di
                        pinggir pantai bikin terharu. Terima kasih Mas & Mbak PIDIDI atas pelayanannya!"
                    </p>
                </div>

            </div>

            <div class="mt-8 text-center">
                <a href="{{ route('testimonials') }}"
                    class="text-xs font-bold text-brand-orange hover:underline flex items-center justify-center gap-1">
                    <span>Lihat 200+ ulasan traveler lainnya</span>
                    <i class="fa-solid fa-angle-right"></i>
                </a>
            </div>

        </div>
    </section>

@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // jQuery Search Filter Functionality
            $('#home-search-form').on('submit', function(e) {
                e.preventDefault();
                var dest = $('#filter-destination').val();
                var cat = $('#filter-category').val();
                var budget = $('#filter-budget').val();

                // Scroll to grid section
                $('html, body').animate({
                    scrollTop: $("#tour-grid-section").offset().top - 100
                }, 500);

                // Filter tour cards based on data attributes
                $('.tour-card').each(function() {
                    var cardDest = $(this).data('destination');
                    var cardCat = $(this).data('category');
                    var cardBudget = $(this).data('budget');

                    var matchDest = (dest === 'all' || cardDest === dest);
                    var matchCat = (cat === 'all' || cardCat === cat);
                    var matchBudget = (budget === 'all' || cardBudget === budget);

                    if (matchDest && matchCat && matchBudget) {
                        $(this).fadeIn(300);
                    } else {
                        $(this).fadeOut(300);
                    }
                });
            });
        });
    </script>
@endpush
