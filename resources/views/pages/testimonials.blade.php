@extends('layouts.app')

@section('title', 'Testimoni & Ulasan Tamu - PIDIDI')

@section('content')

    <!-- Header Banner -->
    <section class="bg-brand-cream pt-12 pb-16 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <span
                class="bg-amber-100 text-amber-900 font-extrabold text-xs uppercase tracking-wider px-3.5 py-1.5 rounded-full inline-flex items-center gap-1.5 mb-3">
                <i class="fa-solid fa-star text-amber-500"></i> Verified Google Reviews
            </span>
            <h1 class="text-3xl sm:text-5xl font-black text-brand-navy">
                Apa Kata Tamu <span class="text-brand-orange">PIDIDI</span>?
            </h1>
            <p class="text-gray-600 text-sm sm:text-base max-w-2xl mx-auto mt-3 font-medium">
                Kepercayaan dan kebahagiaan para traveler adalah bukti nyata komitmen pelayanan sehati kami.
            </p>

            <!-- Rating Overview Score Card -->
            <div
                class="mt-8 inline-flex flex-col sm:flex-row items-center gap-6 bg-white p-6 rounded-3xl shadow-xl border border-brand-orange/20">
                <div class="flex items-center gap-3">
                    <span class="text-4xl sm:text-5xl font-black text-brand-navy">4.9</span>
                    <div>
                        <div class="flex text-amber-400 text-base">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i>
                        </div>
                        <span class="text-xs font-bold text-gray-500">Berdasarkan 250+ Ulasan Google</span>
                    </div>
                </div>
                <div class="hidden sm:block h-10 w-px bg-gray-200"></div>
                <a href="https://wa.me/6282231872974?text=Halo%20PIDIDI,%20saya%20ingin%20memberikan%20ulasan"
                    target="_blank"
                    class="bg-brand-orange hover:bg-orange-600 text-white font-bold text-xs px-5 py-3 rounded-full shadow transition-all">
                    Tulis Ulasan Anda
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

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Card 1 -->
                <div
                    class="bg-brand-cream/40 p-6 rounded-3xl border border-gray-100 space-y-4 shadow-sm hover:shadow-md transition-all">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80"
                                alt="Siti" class="w-12 h-12 rounded-full object-cover border-2 border-brand-orange">
                            <div>
                                <h3 class="font-bold text-sm text-brand-navy">Siti Rahmawati</h3>
                                <span
                                    class="text-[10px] text-emerald-600 bg-emerald-100 px-2 py-0.5 rounded-full font-bold flex items-center gap-1"><i
                                        class="fa-solid fa-circle-check text-emerald-500"></i> Terverifikasi</span>
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
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-xs text-gray-700 leading-relaxed italic">
                        "Pengalaman privat trip bersama PIDIDI ke Sidemen sangat menyentuh hati. Kami diajak berinteraksi
                        dengan warga desa, belajar menenun, dan makan malam di pinggir sawah. Pelayanannya 10/10!"
                    </p>
                    <div class="text-[10px] text-gray-400 pt-2 border-t border-gray-200">
                        Paket: Ubud Cultural Experience • Agustus 2026
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="bg-brand-cream/40 p-6 rounded-3xl border border-gray-100 space-y-4 shadow-sm hover:shadow-md transition-all">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&q=80"
                                alt="Budi" class="w-12 h-12 rounded-full object-cover border-2 border-brand-blue">
                            <div>
                                <h3 class="font-bold text-sm text-brand-navy">Budi Santoso</h3>
                                <span
                                    class="text-[10px] text-emerald-600 bg-emerald-100 px-2 py-0.5 rounded-full font-bold flex items-center gap-1"><i
                                        class="fa-solid fa-circle-check text-emerald-500"></i> Terverifikasi</span>
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
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-xs text-gray-700 leading-relaxed italic">
                        "Sailing Phinisi Komodo bersama PIDIDI luar biasa lancar. Kapal sangat terawat, koki kapal
                        masakannya enak sekali. Guide ramah dan fotogenik bantu dokumentasi."
                    </p>
                    <div class="text-[10px] text-gray-400 pt-2 border-t border-gray-200">
                        Paket: Liveaboard Komodo • Juli 2026
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    class="bg-brand-cream/40 p-6 rounded-3xl border border-gray-100 space-y-4 shadow-sm hover:shadow-md transition-all">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=150&q=80"
                                alt="Dewi" class="w-12 h-12 rounded-full object-cover border-2 border-brand-orange">
                            <div>
                                <h3 class="font-bold text-sm text-brand-navy">Dewi Lestari</h3>
                                <span
                                    class="text-[10px] text-emerald-600 bg-emerald-100 px-2 py-0.5 rounded-full font-bold flex items-center gap-1"><i
                                        class="fa-solid fa-circle-check text-emerald-500"></i> Terverifikasi</span>
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
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                            class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-xs text-gray-700 leading-relaxed italic">
                        "Bespoke trip rancangan PIDIDI untuk rombongan keluarga besar kami berjalan sempurna. Semua
                        fleksibel, ramah anak dan lansia."
                    </p>
                    <div class="text-[10px] text-gray-400 pt-2 border-t border-gray-200">
                        Paket: Bespoke Custom Trip Jogja • Juni 2026
                    </div>
                </div>

                <!-- Card 4 -->
                <div
                    class="bg-brand-cream/40 p-6 rounded-3xl border border-gray-100 space-y-4 shadow-sm hover:shadow-md transition-all">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=150&q=80"
                                alt="Hendrik" class="w-12 h-12 rounded-full object-cover border-2 border-brand-blue">
                            <div>
                                <h3 class="font-bold text-sm text-brand-navy">Hendrik Wijaya</h3>
                                <span
                                    class="text-[10px] text-emerald-600 bg-emerald-100 px-2 py-0.5 rounded-full font-bold flex items-center gap-1"><i
                                        class="fa-solid fa-circle-check text-emerald-500"></i> Terverifikasi</span>
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
                        "Trip Raja Ampat bareng PIDIDI terbaik! Pemandu lokalnya sangat paham spot diving dan sejarah adat
                        lokal."
                    </p>
                    <div class="text-[10px] text-gray-400 pt-2 border-t border-gray-200">
                        Paket: Raja Ampat Paradise • Mei 2026
                    </div>
                </div>

                <!-- Card 5 -->
                <div
                    class="bg-brand-cream/40 p-6 rounded-3xl border border-gray-100 space-y-4 shadow-sm hover:shadow-md transition-all">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&w=150&q=80"
                                alt="Anita" class="w-12 h-12 rounded-full object-cover border-2 border-brand-orange">
                            <div>
                                <h3 class="font-bold text-sm text-brand-navy">Anita Wijaya</h3>
                                <span
                                    class="text-[10px] text-emerald-600 bg-emerald-100 px-2 py-0.5 rounded-full font-bold flex items-center gap-1"><i
                                        class="fa-solid fa-circle-check text-emerald-500"></i> Terverifikasi</span>
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
                        "Sangat transparan soal legalitas dan pembayaran. Dikasih kuitansi resmi atas nama PT PIDIDI TOUR.
                        Sangat terpercaya!"
                    </p>
                    <div class="text-[10px] text-gray-400 pt-2 border-t border-gray-200">
                        Paket: Toraja Culture • April 2026
                    </div>
                </div>

                <!-- Card 6 -->
                <div
                    class="bg-brand-cream/40 p-6 rounded-3xl border border-gray-100 space-y-4 shadow-sm hover:shadow-md transition-all">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=150&q=80"
                                alt="Reza" class="w-12 h-12 rounded-full object-cover border-2 border-brand-blue">
                            <div>
                                <h3 class="font-bold text-sm text-brand-navy">Reza Pratama</h3>
                                <span
                                    class="text-[10px] text-emerald-600 bg-emerald-100 px-2 py-0.5 rounded-full font-bold flex items-center gap-1"><i
                                        class="fa-solid fa-circle-check text-emerald-500"></i> Terverifikasi</span>
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
                        "Pilihan desa wisatanya otentik sekali. Beda sama travel agent biasa yang cuma bawa ke toko souvenir
                        komersial."
                    </p>
                    <div class="text-[10px] text-gray-400 pt-2 border-t border-gray-200">
                        Paket: Jogja Culinary Trail • Maret 2026
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection
