@extends('layouts.app')

@section('title', 'Tentang Kami - PIDIDI Tour & Travel Experience')

@section('content')

    <!-- Header Hero Banner -->
    <section class="bg-brand-cream pt-14 pb-20 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <span class="bg-brand-orange/10 text-brand-orange font-extrabold text-xs uppercase tracking-widest px-4 py-1.5 rounded-full inline-flex items-center gap-2 mb-4 shadow-sm border border-brand-orange/20">
                <i class="fa-solid fa-compass text-brand-orange"></i> PIDIDI — Travel Around Indonesia
            </span>
            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black text-brand-navy leading-tight tracking-tight">
                Perjalanan yang <span class="relative inline-block px-3 py-1"><svg class="absolute -inset-x-2 -inset-y-1.5 w-[calc(100%+1rem)] h-[calc(100%+0.75rem)] text-brand-blue/12 -z-10 pointer-events-none" viewBox="0 0 300 65" fill="currentColor" preserveAspectRatio="none"><path d="M 5,18 C 50,2 100,28 150,12 C 200,-2 250,22 295,12 C 302,28 298,42 295,52 C 245,64 195,44 145,58 C 95,70 45,48 5,56 C -2,40 2,26 5,18 Z"/></svg><span class="text-brand-blue">Menghubungkan Manusia</span></span> & Budaya
            </h1>
            <p class="text-gray-700 text-sm sm:text-base lg:text-lg max-w-3xl mx-auto mt-4 font-medium leading-relaxed">
                <strong>Pilih Destinasi, Dapat Inspirasi.</strong> Kami tidak hanya menjual perjalanan menuju suatu destinasi, tetapi menghadirkan pengalaman perjalanan yang memiliki cerita, karakter, dan nilai inspirasi bagi setiap wisatawan.
            </p>
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

    <!-- Positioning & Core Concept Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <!-- Left Visual Image Card -->
                <div class="lg:col-span-5 relative">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl border-4 border-brand-cream group bouncy-hover">
                        <img src="https://images.unsplash.com/photo-1544644181-1484b3fdfc62?auto=format&fit=crop&w=800&q=80"
                            alt="PIDIDI Curated Experience" class="w-full h-[420px] object-cover transform group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-navy/80 via-transparent to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6 text-white space-y-1">
                            <span class="bg-brand-orange text-white text-[10px] font-black uppercase px-2.5 py-1 rounded-full">Curated Travel Experience</span>
                            <h3 class="font-extrabold text-lg">Mengenal Manusia & Budaya</h3>
                            <p class="text-xs text-gray-200">Bukan sekadar foto, tapi kenangan dan inspirasi hidup.</p>
                        </div>
                    </div>

                    <!-- Floating Badge -->
                    <div class="absolute -bottom-6 -right-4 sm:right-2 bg-brand-navy text-white p-4 sm:p-5 rounded-2xl shadow-xl max-w-xs border border-amber-400/30">
                        <p class="text-xs font-bold leading-relaxed">
                            <i class="fa-solid fa-quote-left text-brand-orange mr-1"></i>
                            "Perjalanan yang dikurasi berdasarkan tema, mempertemukan wisatawan dengan cerita di balik destinasi."
                        </p>
                    </div>
                </div>

                <!-- Right Content Positioning -->
                <div class="lg:col-span-7 space-y-6">
                    <div class="space-y-2">
                        <span class="bg-brand-blue/10 text-brand-blue font-extrabold text-xs uppercase tracking-wider px-3.5 py-1.5 rounded-full inline-flex items-center gap-1.5">
                            <i class="fa-solid fa-bullseye text-brand-blue"></i> Brand Positioning
                        </span>
                        <h2 class="text-2xl sm:text-4xl font-black text-brand-navy leading-snug">
                            Travel Experience Company,<br>Bukan Sekadar Agen Konvensional
                        </h2>
                    </div>

                    <p class="text-gray-700 text-sm sm:text-base leading-relaxed font-medium">
                        PIDIDI memposisikan diri sebagai kurator perjalanan (*curated travel experience*). Wisatawan tidak hanya diajak datang ke objek wisata populer, tetapi meresapi kehidupan lokal, keahlian pengrajin desa, cita rasa resep leluhur, serta cerita inspiratif masyarakat setempat.
                    </p>

                    <!-- Formula Pill Flow: Destinasi -> Pengalaman -> Cerita -> Inspirasi -->
                    <div class="bg-brand-cream/60 p-5 rounded-3xl border border-brand-orange/20 space-y-3">
                        <span class="text-xs font-extrabold text-brand-orange uppercase tracking-wider block">Formula Nilai PIDIDI:</span>
                        <div class="flex flex-wrap items-center justify-between gap-2 text-xs sm:text-sm font-extrabold text-brand-navy">
                            <span class="bg-white px-3.5 py-2 rounded-xl shadow-sm border border-gray-100 flex items-center gap-1.5"><i class="fa-solid fa-map-pin text-brand-orange"></i> Destinasi</span>
                            <i class="fa-solid fa-arrow-right text-gray-400"></i>
                            <span class="bg-white px-3.5 py-2 rounded-xl shadow-sm border border-gray-100 flex items-center gap-1.5"><i class="fa-solid fa-compass text-brand-blue"></i> Pengalaman</span>
                            <i class="fa-solid fa-arrow-right text-gray-400"></i>
                            <span class="bg-white px-3.5 py-2 rounded-xl shadow-sm border border-gray-100 flex items-center gap-1.5"><i class="fa-solid fa-book-open text-amber-500"></i> Cerita</span>
                            <i class="fa-solid fa-arrow-right text-gray-400"></i>
                            <span class="bg-brand-orange text-white px-3.5 py-2 rounded-xl shadow-md flex items-center gap-1.5"><i class="fa-solid fa-sparkles"></i> Inspirasi</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- 6 Kategori Pengalaman PIDIDI Grid -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto space-y-3 mb-12">
                <span class="bg-amber-100 text-amber-800 font-extrabold text-xs uppercase tracking-wider px-3.5 py-1.5 rounded-full inline-flex items-center gap-1.5">
                    <i class="fa-solid fa-layer-group text-amber-500"></i> Kategori Perjalanan
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-brand-navy">
                    6 Bentuk Pengalaman Perjalanan PIDIDI
                </h2>
                <p class="text-gray-600 text-sm sm:text-base font-medium">
                    Setiap perjalanan dirancang memiliki tema dan karakter khas untuk menjawab kerinduan petualangan Anda.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- 1. DISCOVER -->
                <div class="bg-white p-6 rounded-3xl shadow-md border border-gray-100 hover:border-brand-orange hover:shadow-xl transition-all space-y-3 bouncy-hover">
                    <div class="w-12 h-12 rounded-2xl bg-orange-100 text-brand-orange flex items-center justify-center text-xl font-bold shadow-inner">
                        <i class="fa-solid fa-magnifying-glass-location"></i>
                    </div>
                    <span class="bg-orange-50 text-brand-orange font-black text-[10px] uppercase px-2.5 py-1 rounded-full">DISCOVER</span>
                    <h3 class="font-extrabold text-lg text-brand-navy">Menemukan Tempat Baru</h3>
                    <p class="text-xs text-gray-600 leading-relaxed font-medium">
                        Menjelajahi sudut-sudut tersembunyi (*hidden gems*) dan cerita sejarah otentik yang belum pernah terjamah pariwisata massal.
                    </p>
                </div>

                <!-- 2. MEET -->
                <div class="bg-white p-6 rounded-3xl shadow-md border border-gray-100 hover:border-brand-blue hover:shadow-xl transition-all space-y-3 bouncy-hover">
                    <div class="w-12 h-12 rounded-2xl bg-blue-100 text-brand-blue flex items-center justify-center text-xl font-bold shadow-inner">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <span class="bg-blue-50 text-brand-blue font-black text-[10px] uppercase px-2.5 py-1 rounded-full">MEET</span>
                    <h3 class="font-extrabold text-lg text-brand-navy">Bertemu Manusia & Komunitas</h3>
                    <p class="text-xs text-gray-600 leading-relaxed font-medium">
                        Berinteraksi dan berdiskusi hangat dengan pemandu lokal, seniman desa, pencerita rakyat, dan tokoh masyarakat asli.
                    </p>
                </div>

                <!-- 3. LIVE -->
                <div class="bg-white p-6 rounded-3xl shadow-md border border-gray-100 hover:border-emerald-500 hover:shadow-xl transition-all space-y-3 bouncy-hover">
                    <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-600 flex items-center justify-center text-xl font-bold shadow-inner">
                        <i class="fa-solid fa-house-chimney-window"></i>
                    </div>
                    <span class="bg-emerald-50 text-emerald-700 font-black text-[10px] uppercase px-2.5 py-1 rounded-full">LIVE</span>
                    <h3 class="font-extrabold text-lg text-brand-navy">Mengalami Kehidupan Lokal</h3>
                    <p class="text-xs text-gray-600 leading-relaxed font-medium">
                        Merasakan secara langsung ritme keseharian warga desa, bertani, tinggal di homestay lokal, dan meresapi kearifan lokal.
                    </p>
                </div>

                <!-- 4. TASTE -->
                <div class="bg-white p-6 rounded-3xl shadow-md border border-gray-100 hover:border-rose-500 hover:shadow-xl transition-all space-y-3 bouncy-hover">
                    <div class="w-12 h-12 rounded-2xl bg-rose-100 text-rose-600 flex items-center justify-center text-xl font-bold shadow-inner">
                        <i class="fa-solid fa-utensils"></i>
                    </div>
                    <span class="bg-rose-50 text-rose-700 font-black text-[10px] uppercase px-2.5 py-1 rounded-full">TASTE</span>
                    <h3 class="font-extrabold text-lg text-brand-navy">Mengenal Kuliner Tradisional</h3>
                    <p class="text-xs text-gray-600 leading-relaxed font-medium">
                        Menikmati hidangan otentik resep turun-temurun khas daerah yang dimasak oleh juru masak lokal dengan bumbu rempah pilihan.
                    </p>
                </div>

                <!-- 5. CREATE -->
                <div class="bg-white p-6 rounded-3xl shadow-md border border-gray-100 hover:border-purple-500 hover:shadow-xl transition-all space-y-3 bouncy-hover">
                    <div class="w-12 h-12 rounded-2xl bg-purple-100 text-purple-600 flex items-center justify-center text-xl font-bold shadow-inner">
                        <i class="fa-solid fa-palette"></i>
                    </div>
                    <span class="bg-purple-50 text-purple-700 font-black text-[10px] uppercase px-2.5 py-1 rounded-full">CREATE</span>
                    <h3 class="font-extrabold text-lg text-brand-navy">Belajar & Berkarya Bersama</h3>
                    <p class="text-xs text-gray-600 leading-relaxed font-medium">
                        Mengikuti workshop gerabah, membatik, menenun, atau membuat karya kerajinan tangan langsung di studio pengrajin lokal.
                    </p>
                </div>

                <!-- 6. ESCAPE -->
                <div class="bg-white p-6 rounded-3xl shadow-md border border-gray-100 hover:border-amber-500 hover:shadow-xl transition-all space-y-3 bouncy-hover">
                    <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-600 flex items-center justify-center text-xl font-bold shadow-inner">
                        <i class="fa-solid fa-umbrella-beach"></i>
                    </div>
                    <span class="bg-amber-50 text-amber-800 font-black text-[10px] uppercase px-2.5 py-1 rounded-full">ESCAPE</span>
                    <h3 class="font-extrabold text-lg text-brand-navy">Perjalanan Santai & Personal</h3>
                    <p class="text-xs text-gray-600 leading-relaxed font-medium">
                        Melepaskan penat dari rutinitas perkotaan melalui ritme trip yang santai, aman, privat, dan menenangkan jiwa.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- Top Animated Wave Divider into bg-brand-cream -->
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

    <!-- Product Concept & Asset-Light Model Section -->
    <section class="py-16 bg-brand-cream relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-12">
            
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto space-y-3">
                <span class="bg-brand-orange/10 text-brand-orange font-extrabold text-xs uppercase tracking-wider px-3.5 py-1.5 rounded-full inline-flex items-center gap-1.5">
                    <i class="fa-solid fa-diagram-project text-brand-orange"></i> Konsep Produk & Ekosistem
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-brand-navy">
                    Asset-Light Travel Business Model
                </h2>
                <p class="text-gray-600 text-sm sm:text-base font-medium">
                    PIDIDI berperan sebagai <strong>Kurator & Orkestrator</strong> yang merangkul jaringan mitra lokal di setiap daerah.
                </p>
            </div>

            <!-- 5 Network Partners Grid -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                
                <div class="bg-white p-5 rounded-2xl shadow border border-brand-orange/10 text-center space-y-2">
                    <div class="w-10 h-10 mx-auto rounded-xl bg-orange-100 text-brand-orange flex items-center justify-center text-lg">
                        <i class="fa-solid fa-hotel"></i>
                    </div>
                    <h4 class="font-extrabold text-xs text-brand-navy">Homestay & Hotel Karakter</h4>
                </div>

                <div class="bg-white p-5 rounded-2xl shadow border border-brand-blue/10 text-center space-y-2">
                    <div class="w-10 h-10 mx-auto rounded-xl bg-blue-100 text-brand-blue flex items-center justify-center text-lg">
                        <i class="fa-solid fa-user-tie"></i>
                    </div>
                    <h4 class="font-extrabold text-xs text-brand-navy">Local Guide & Pencerita</h4>
                </div>

                <div class="bg-white p-5 rounded-2xl shadow border border-emerald-500/10 text-center space-y-2">
                    <div class="w-10 h-10 mx-auto rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center text-lg">
                        <i class="fa-solid fa-store"></i>
                    </div>
                    <h4 class="font-extrabold text-xs text-brand-navy">UMKM & Pengrajin Desa</h4>
                </div>

                <div class="bg-white p-5 rounded-2xl shadow border border-amber-500/10 text-center space-y-2">
                    <div class="w-10 h-10 mx-auto rounded-xl bg-amber-100 text-amber-600 flex items-center justify-center text-lg">
                        <i class="fa-solid fa-van-shuttle"></i>
                    </div>
                    <h4 class="font-extrabold text-xs text-brand-navy">Transportasi Lokal Ramah</h4>
                </div>

                <div class="bg-white p-5 rounded-2xl shadow border border-purple-500/10 text-center space-y-2 col-span-2 sm:col-span-1">
                    <div class="w-10 h-10 mx-auto rounded-xl bg-purple-100 text-purple-600 flex items-center justify-center text-lg">
                        <i class="fa-solid fa-camera"></i>
                    </div>
                    <h4 class="font-extrabold text-xs text-brand-navy">Kreator & Fotografer</h4>
                </div>

            </div>

            <!-- Flagship Product Highlight Card -->
            <div class="bg-gradient-to-r from-brand-navy via-brand-light-navy to-brand-navy rounded-3xl p-8 sm:p-10 text-white shadow-2xl border-2 border-amber-400/40 relative overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center relative z-10">
                    <div class="lg:col-span-8 space-y-4">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="bg-amber-400 text-brand-navy font-black text-xs px-3 py-1 rounded-full uppercase flex items-center gap-1"><i class="fa-solid fa-sparkles"></i> FLAGSHIP VALIDATED PRODUCT</span>
                            <span class="bg-white/10 text-white text-xs font-bold px-3 py-1 rounded-full"><i class="fa-solid fa-users text-brand-orange mr-1"></i> Small Group (8–12 Pax)</span>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-black">PIDIDI JOURNEY — THE JOGJA YOU HAVEN'T MET</h3>
                        <p class="text-gray-300 text-xs sm:text-sm leading-relaxed">
                            Perjalanan 3 hari 2 malam yang mengajak peserta mengenal Yogyakarta melalui manusia, karya, rasa, desa, dan cerita lokal. Format kelompok kecil menjamin kehangatan percakapan dan kedalaman impresi.
                        </p>
                    </div>
                    <div class="lg:col-span-4 flex justify-center lg:justify-end">
                        <a href="{{ route('tours.jogja-journey') }}" class="bg-brand-orange hover:bg-orange-600 text-white font-extrabold text-sm px-6 py-3.5 rounded-2xl shadow-xl transition-all flex items-center gap-2 transform hover:-translate-y-1">
                            <span>Jelajahi Program</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Bottom Animated Wave Divider into bg-brand-navy -->
    <div class="relative w-full overflow-hidden leading-none z-20 bg-brand-cream">
        <div class="w-[200%] flex animate-wave-slow pointer-events-none opacity-40">
            <svg class="w-1/2 h-10 sm:h-16 text-brand-navy" viewBox="0 0 1200 120" preserveAspectRatio="none" fill="currentColor">
                <path d="M0,0 C150,90 350,-40 500,40 C650,120 900,10 1200,60 L1200,120 L0,120 Z"></path>
            </svg>
            <svg class="w-1/2 h-10 sm:h-16 text-brand-navy" viewBox="0 0 1200 120" preserveAspectRatio="none" fill="currentColor">
                <path d="M0,0 C150,90 350,-40 500,40 C650,120 900,10 1200,60 L1200,120 L0,120 Z"></path>
            </svg>
        </div>
        <div class="w-[200%] flex animate-wave-fast absolute top-0 left-0 pointer-events-none">
            <svg class="w-1/2 h-10 sm:h-16 text-brand-navy" viewBox="0 0 1200 120" preserveAspectRatio="none" fill="currentColor">
                <path d="M0,20 C200,80 400,-20 600,50 C800,120 1000,10 1200,40 L1200,120 L0,120 Z"></path>
            </svg>
            <svg class="w-1/2 h-10 sm:h-16 text-brand-navy" viewBox="0 0 1200 120" preserveAspectRatio="none" fill="currentColor">
                <path d="M0,20 C200,80 400,-20 600,50 C800,120 1000,10 1200,40 L1200,120 L0,120 Z"></path>
            </svg>
        </div>
    </div>

    <!-- Identitas Visual & Journey Line Section -->
    <section class="py-16 bg-brand-navy text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <div class="lg:col-span-6 space-y-5">
                    <span class="bg-brand-orange/20 text-brand-orange font-extrabold text-xs uppercase tracking-wider px-3.5 py-1.5 rounded-full inline-flex items-center gap-1.5 border border-brand-orange/30">
                        <i class="fa-solid fa-paintbrush"></i> Simbol Visual Brand
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-black leading-snug">
                        Falsafah Identitas Visual: <br><span class="text-brand-orange">Journey Line</span>
                    </h2>
                    <p class="text-gray-300 text-sm sm:text-base leading-relaxed font-medium">
                        Identitas visual PIDIDI diarahkan menjadi modern, berani, dan premium. Elemen visual utama kami adalah <strong>Journey Line</strong> — garis mengalir abstrak yang terinspirasi dari gelombang ombak, sekaligus melambangkan:
                    </p>

                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 pt-2 text-xs font-bold text-gray-200">
                        <div class="bg-white/10 p-3 rounded-xl border border-white/10 flex items-center gap-2"><i class="fa-solid fa-road text-brand-orange"></i> Jalan</div>
                        <div class="bg-white/10 p-3 rounded-xl border border-white/10 flex items-center gap-2"><i class="fa-solid fa-water text-brand-blue"></i> Sungai & Ombak</div>
                        <div class="bg-white/10 p-3 rounded-xl border border-white/10 flex items-center gap-2"><i class="fa-solid fa-wind text-sky-400"></i> Angin</div>
                        <div class="bg-white/10 p-3 rounded-xl border border-white/10 flex items-center gap-2"><i class="fa-solid fa-mountain-sun text-amber-400"></i> Horizon</div>
                        <div class="bg-white/10 p-3 rounded-xl border border-white/10 flex items-center gap-2 col-span-2 sm:col-span-2"><i class="fa-solid fa-route text-rose-400"></i> Alur Perjalanan Hidup</div>
                    </div>
                </div>

                <!-- Right Visual Color Badge Card -->
                <div class="lg:col-span-6 flex justify-center">
                    <div class="bg-white/5 backdrop-blur-md p-8 rounded-3xl border border-white/10 space-y-6 max-w-md w-full shadow-2xl text-center">
                        <div class="flex items-center justify-center gap-4">
                            <div class="w-16 h-16 rounded-2xl bg-brand-orange shadow-lg shadow-orange-500/50 flex flex-col items-center justify-center text-white">
                                <span class="text-[10px] font-black uppercase">Electric</span>
                                <span class="text-xs font-bold">Orange</span>
                            </div>
                            <div class="w-16 h-16 rounded-2xl bg-brand-blue shadow-lg shadow-blue-500/50 flex flex-col items-center justify-center text-white">
                                <span class="text-[10px] font-black uppercase">Cobalt</span>
                                <span class="text-xs font-bold">Blue</span>
                            </div>
                        </div>

                        <!-- Wave Journey Line SVG Demo -->
                        <div class="w-full h-12 relative overflow-hidden">
                            <svg class="w-full h-full text-brand-orange" viewBox="0 0 300 40" fill="none">
                                <path d="M 0,20 C 50,5 100,35 150,20 C 200,5 250,35 300,20" stroke="#FF5A00" stroke-width="4" stroke-linecap="round"/>
                                <path d="M 0,24 C 50,9 100,39 150,24 C 200,9 250,39 300,24" stroke="#0057FF" stroke-width="2.5" stroke-linecap="round" opacity="0.6"/>
                            </svg>
                        </div>

                        <p class="text-xs text-gray-300 italic">
                            Kombinasi warna mencolok dan Journey Line mengekspresikan keberanian eksplorasi dan kehangatan koneksi antarmanusia.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Top Animated Wave Divider into bg-white -->
    <div class="relative w-full overflow-hidden leading-none z-20 bg-brand-navy">
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

    <!-- Long Term Vision & Win-Win Sustainable Ecosystem Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto space-y-3 mb-12">
                <span class="bg-emerald-100 text-emerald-800 font-extrabold text-xs uppercase tracking-wider px-3.5 py-1.5 rounded-full inline-flex items-center gap-1.5">
                    <i class="fa-solid fa-leaf text-emerald-600"></i> Ekosistem Berkelanjutan
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-brand-navy">
                    Platform Pengalaman Perjalanan Indonesia
                </h2>
                <p class="text-gray-600 text-sm sm:text-base font-medium">
                    Visi jangka panjang PIDIDI memberikan dampak nyata dan nilai positif bagi seluruh pihak.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                
                <!-- 1. Wisatawan -->
                <div class="bg-brand-cream/50 p-6 rounded-3xl border border-brand-orange/20 space-y-3 bouncy-hover">
                    <div class="w-10 h-10 rounded-xl bg-brand-orange text-white flex items-center justify-center font-bold">
                        <i class="fa-solid fa-user-astronaut text-base"></i>
                    </div>
                    <h3 class="font-extrabold text-base text-brand-navy">Wisatawan</h3>
                    <p class="text-xs text-gray-600 leading-relaxed font-medium">
                        Mendapatkan pengalaman autentik, kenyamanan, dan inspirasi hidup bermakna.
                    </p>
                </div>

                <!-- 2. Destinasi -->
                <div class="bg-brand-cream/50 p-6 rounded-3xl border border-brand-blue/20 space-y-3 bouncy-hover">
                    <div class="w-10 h-10 rounded-xl bg-brand-blue text-white flex items-center justify-center font-bold">
                        <i class="fa-solid fa-map text-base"></i>
                    </div>
                    <h3 class="font-extrabold text-base text-brand-navy">Destinasi</h3>
                    <p class="text-xs text-gray-600 leading-relaxed font-medium">
                        Mendapatkan eksposur positif, apresiasi budaya, dan kepedulian lingkungan.
                    </p>
                </div>

                <!-- 3. Masyarakat -->
                <div class="bg-brand-cream/50 p-6 rounded-3xl border border-emerald-500/20 space-y-3 bouncy-hover">
                    <div class="w-10 h-10 rounded-xl bg-emerald-600 text-white flex items-center justify-center font-bold">
                        <i class="fa-solid fa-people-hold text-base"></i>
                    </div>
                    <h3 class="font-extrabold text-base text-brand-navy">Masyarakat</h3>
                    <p class="text-xs text-gray-600 leading-relaxed font-medium">
                        Mendapatkan peluang ekonomi yang adil, apresiasi seni, dan kebanggaan tradisi.
                    </p>
                </div>

                <!-- 4. UMKM -->
                <div class="bg-brand-cream/50 p-6 rounded-3xl border border-amber-500/20 space-y-3 bouncy-hover">
                    <div class="w-10 h-10 rounded-xl bg-amber-500 text-white flex items-center justify-center font-bold">
                        <i class="fa-solid fa-shop text-base"></i>
                    </div>
                    <h3 class="font-extrabold text-base text-brand-navy">UMKM & Pengrajin</h3>
                    <p class="text-xs text-gray-600 leading-relaxed font-medium">
                        Mendapatkan akses pasar baru untuk penjualan hasil karya dan produk lokal.
                    </p>
                </div>

                <!-- 5. PIDIDI -->
                <div class="bg-brand-cream/50 p-6 rounded-3xl border border-purple-500/20 space-y-3 bouncy-hover col-span-1 md:col-span-2 lg:col-span-1">
                    <div class="w-10 h-10 rounded-xl bg-purple-600 text-white flex items-center justify-center font-bold">
                        <i class="fa-solid fa-chart-line text-base"></i>
                    </div>
                    <h3 class="font-extrabold text-base text-brand-navy">PIDIDI Brand</h3>
                    <p class="text-xs text-gray-600 leading-relaxed font-medium">
                        Mencapai pertumbuhan bisnis sehat yang berlandaskan keberlanjutan.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- Final Conclusion & CTA Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="bg-gradient-to-r from-brand-orange via-orange-500 to-amber-500 rounded-3xl p-8 sm:p-14 text-white shadow-2xl relative overflow-hidden text-center space-y-6">
                <i class="fa-solid fa-quote-left text-5xl text-white/30 block mx-auto"></i>
                <h2 class="text-2xl sm:text-4xl font-black max-w-3xl mx-auto leading-tight">
                    "PIDIDI bukan sekadar mengajak orang pergi ke suatu tempat. PIDIDI mengajak orang menemukan sesuatu dari setiap perjalanan."
                </h2>
                <p class="text-amber-100 text-sm sm:text-base font-bold">
                    PIDIDI — Pilih Destinasi, Dapat Inspirasi (Travel Around Indonesia)
                </p>
                <div class="pt-4">
                    <a href="https://wa.me/6282231872974?text=Halo%20PIDIDI,%20saya%20tertarik%20dengan%20konsep%20perjalanan%20PIDIDI"
                       target="_blank"
                       class="inline-flex items-center justify-center gap-2.5 bg-brand-navy hover:bg-brand-light-navy text-white font-extrabold text-sm sm:text-base px-8 py-4 rounded-full shadow-2xl transition-all transform hover:-translate-y-1">
                        <i class="fa-brands fa-whatsapp text-emerald-400 text-xl"></i>
                        <span>Diskusi Perjalanan Bersama PIDIDI</span>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
