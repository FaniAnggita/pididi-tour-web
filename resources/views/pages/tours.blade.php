@extends('layouts.app')

@section('title', 'Paket Wisata & Bespoke Trip - PIDIDI')

@section('content')

    <!-- Header Banner -->
    <section class="bg-brand-cream pt-12 pb-16 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <span
                class="bg-brand-blue/10 text-brand-blue font-extrabold text-xs uppercase tracking-wider px-3.5 py-1.5 rounded-full inline-flex items-center gap-1.5 mb-3">
                <i class="fa-solid fa-compass text-brand-orange"></i> Catalog Experience
            </span>
            <h1 class="text-3xl sm:text-5xl font-black text-brand-navy">
                Temukan <span class="text-brand-orange">Pengalaman Perjalanan</span> Anda
            </h1>
            <p class="text-gray-600 text-sm sm:text-base max-w-2xl mx-auto mt-3 font-medium">
                Pilih dari deretan curated trip pilihan atau rancang perjalanan impian Anda sendiri secara personal.
            </p>

            <!-- Tab Filters (jQuery Driven) -->
            <div class="flex flex-wrap items-center justify-center gap-2 mt-8">
                <button type="button" data-filter="all"
                    class="tour-tab-btn active px-6 py-2.5 rounded-full text-xs sm:text-sm font-extrabold transition-all duration-300 bg-brand-orange text-white shadow-md flex items-center gap-1.5">
                    <i class="fa-solid fa-border-all"></i> Semua Trip
                </button>
                <button type="button" data-filter="curated"
                    class="tour-tab-btn px-6 py-2.5 rounded-full text-xs sm:text-sm font-extrabold transition-all duration-300 bg-white text-brand-navy border border-gray-200 hover:bg-brand-cream flex items-center gap-1.5">
                    <i class="fa-solid fa-compass text-brand-orange"></i> Curated Experience
                </button>
                <button type="button" data-filter="essential"
                    class="tour-tab-btn px-6 py-2.5 rounded-full text-xs sm:text-sm font-extrabold transition-all duration-300 bg-white text-brand-navy border border-gray-200 hover:bg-brand-cream flex items-center gap-1.5">
                    <i class="fa-solid fa-paper-plane text-brand-blue"></i> Essential Trip
                </button>
                <button type="button" data-filter="bespoke"
                    class="tour-tab-btn px-6 py-2.5 rounded-full text-xs sm:text-sm font-extrabold transition-all duration-300 bg-white text-brand-navy border border-gray-200 hover:bg-brand-cream flex items-center gap-1.5">
                    <i class="fa-solid fa-wand-magic-sparkles text-amber-500"></i> Bespoke (Custom Trip)
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

    <!-- Tour List Grid -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div id="tours-catalog-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Flagship Special Card: PIDIDI JOURNEY - THE JOGJA YOU HAVEN'T MET -->
                <div class="tour-item lg:col-span-3 bg-gradient-to-r from-brand-navy via-brand-light-navy to-brand-navy rounded-3xl overflow-hidden shadow-2xl border-2 border-amber-400/40 text-white p-6 sm:p-10 relative group bouncy-hover"
                    data-category="curated">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center relative z-10">
                        <div class="lg:col-span-7 space-y-4">
                            <div class="flex flex-wrap items-center gap-2">
                                <span
                                    class="bg-amber-400 text-brand-navy font-black text-xs px-3 py-1 rounded-full uppercase flex items-center gap-1"><i
                                        class="fa-solid fa-sparkles"></i> SIGNATURE JOURNEY</span>
                                <span class="bg-white/10 text-white text-xs font-bold px-3 py-1 rounded-full"><i
                                        class="fa-solid fa-users text-brand-orange"></i> Small Group 8-12 Pax</span>
                                <span class="bg-brand-orange text-white text-xs font-bold px-3 py-1 rounded-full"><i
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

                            <p class="text-xs sm:text-sm text-gray-300 leading-relaxed">
                                Menemukan Jogja melalui manusia, karya, rasa, dan cerita. Walking experience bersama
                                Storyteller lokal, workshop karya tangan bareng artisan, memasak pasar tradisional, dan
                                PIDIDI Night.
                            </p>
                        </div>

                        <div
                            class="lg:col-span-5 flex flex-col items-center lg:items-end space-y-4 border-t lg:border-t-0 lg:border-l border-white/15 pt-4 lg:pt-0 lg:pl-8">
                            <div class="text-center lg:text-right">
                                <span class="text-xs text-gray-300 font-semibold block">Curated Small Group</span>
                                <span class="text-2xl sm:text-3xl font-black text-amber-300">Rp 3.650.000</span>
                                <span class="text-[10px] text-gray-400 block">/orang (all inclusive)</span>
                            </div>

                            <a href="{{ route('tours.jogja-journey') }}"
                                class="w-full sm:w-auto bg-brand-orange hover:bg-orange-600 text-white font-extrabold text-sm px-6 py-3.5 rounded-full shadow-xl transition-all flex items-center justify-center gap-2">
                                <span>Lihat Itinerari Lengkap (3D2N)</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>


                <!-- Item 1: Curated Ubud -->
                <div class="tour-item bg-white rounded-3xl overflow-hidden shadow-lg border border-gray-100 bouncy-hover flex flex-col"
                    data-category="curated">
                    <div class="relative h-60 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=600&q=80"
                            alt="Ubud Experience" class="w-full h-full object-cover">
                        <span
                            class="absolute top-4 left-4 bg-brand-orange text-white text-xs font-bold px-3 py-1 rounded-full shadow flex items-center gap-1.5"><i
                                class="fa-solid fa-tree-city"></i> Curated</span>
                        <span
                            class="absolute top-4 right-4 bg-white/90 text-brand-navy text-xs font-bold px-2.5 py-1 rounded-full shadow"><i
                                class="fa-solid fa-clock text-brand-orange"></i> 4H 3M</span>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                        <div>
                            <p class="text-xs text-gray-500 mb-1"><i class="fa-solid fa-location-dot text-brand-orange"></i>
                                Ubud & Sidemen, Bali</p>
                            <h3 class="text-xl font-bold text-brand-navy">Ubud Cultural & Authentic Village</h3>
                            <p class="text-xs text-gray-600 mt-2">Menyelami kehidupan pedesaan Bali, belajar memasak
                                tradisional, dan trekking persawahan hijau.</p>
                        </div>
                        <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                            <div>
                                <span class="text-[10px] text-gray-400 block">Mulai dari</span>
                                <span class="text-lg font-black text-brand-orange">Rp 3.850.000</span>
                            </div>
                            <a href="https://wa.me/6282231872974?text=Halo%20PIDIDI,%20saya%20tertarik%20paket%20Ubud%20Cultural"
                                target="_blank"
                                class="bg-brand-orange text-white text-xs font-bold px-4 py-2.5 rounded-xl shadow hover:bg-orange-600 transition-all">Pesan
                                Sekarang</a>
                        </div>
                    </div>
                </div>

                <!-- Item 2: Essential Komodo -->
                <div class="tour-item bg-white rounded-3xl overflow-hidden shadow-lg border border-gray-100 bouncy-hover flex flex-col"
                    data-category="curated">
                    <div class="relative h-60 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?auto=format&fit=crop&w=600&q=80"
                            alt="Komodo Island" class="w-full h-full object-cover">
                        <span
                            class="absolute top-4 left-4 bg-brand-blue text-white text-xs font-bold px-3 py-1 rounded-full shadow flex items-center gap-1.5"><i
                                class="fa-solid fa-camera"></i> Curated</span>
                        <span
                            class="absolute top-4 right-4 bg-white/90 text-brand-navy text-xs font-bold px-2.5 py-1 rounded-full shadow"><i
                                class="fa-solid fa-clock text-brand-orange"></i> 3H 2M</span>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                        <div>
                            <p class="text-xs text-gray-500 mb-1"><i class="fa-solid fa-location-dot text-brand-orange"></i>
                                Labuan Bajo, NTT</p>
                            <h3 class="text-xl font-bold text-brand-navy">Phinisi Liveaboard Komodo Odyssey</h3>
                            <p class="text-xs text-gray-600 mt-2">Mengarungi gugusan pulau eksotis, sunrise di Padar Island,
                                dan snorkeling bersama manta ray.</p>
                        </div>
                        <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                            <div>
                                <span class="text-[10px] text-gray-400 block">Mulai dari</span>
                                <span class="text-lg font-black text-brand-orange">Rp 7.500.000</span>
                            </div>
                            <a href="https://wa.me/6282231872974?text=Halo%20PIDIDI,%20saya%20tertarik%20paket%20Komodo%20Liveaboard"
                                target="_blank"
                                class="bg-brand-orange text-white text-xs font-bold px-4 py-2.5 rounded-xl shadow hover:bg-orange-600 transition-all">Pesan
                                Sekarang</a>
                        </div>
                    </div>
                </div>

                <!-- Item 3: Essential Jogja -->
                <div class="tour-item bg-white rounded-3xl overflow-hidden shadow-lg border border-gray-100 bouncy-hover flex flex-col"
                    data-category="essential">
                    <div class="relative h-60 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1596402184320-417e7178b2cd?auto=format&fit=crop&w=600&q=80"
                            alt="Jogja Trip" class="w-full h-full object-cover">
                        <span
                            class="absolute top-4 left-4 bg-rose-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow flex items-center gap-1.5"><i
                                class="fa-solid fa-utensils"></i> Essential</span>
                        <span
                            class="absolute top-4 right-4 bg-white/90 text-brand-navy text-xs font-bold px-2.5 py-1 rounded-full shadow"><i
                                class="fa-solid fa-clock text-brand-orange"></i> 3H 2M</span>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                        <div>
                            <p class="text-xs text-gray-500 mb-1"><i
                                    class="fa-solid fa-location-dot text-brand-orange"></i> Yogyakarta</p>
                            <h3 class="text-xl font-bold text-brand-navy">Jogja Heritage & Culinary Trail</h3>
                            <p class="text-xs text-gray-600 mt-2">Jelajah warisan cagar budaya, sunrise Borobudur, dan
                                kuliner malam legendaris.</p>
                        </div>
                        <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                            <div>
                                <span class="text-[10px] text-gray-400 block">Mulai dari</span>
                                <span class="text-lg font-black text-brand-orange">Rp 2.450.000</span>
                            </div>
                            <a href="https://wa.me/6282231872974?text=Halo%20PIDIDI,%20saya%20tertarik%20paket%20Jogja%20Heritage"
                                target="_blank"
                                class="bg-brand-orange text-white text-xs font-bold px-4 py-2.5 rounded-xl shadow hover:bg-orange-600 transition-all">Pesan
                                Sekarang</a>
                        </div>
                    </div>
                </div>

                <!-- Item 4: Essential Toraja -->
                <div class="tour-item bg-white rounded-3xl overflow-hidden shadow-lg border border-gray-100 bouncy-hover flex flex-col"
                    data-category="essential">
                    <div class="relative h-60 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1516690561799-46d8f74f9abf?auto=format&fit=crop&w=600&q=80"
                            alt="Tana Toraja" class="w-full h-full object-cover">
                        <span
                            class="absolute top-4 left-4 bg-emerald-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow flex items-center gap-1.5"><i
                                class="fa-solid fa-mountain text-xs"></i> Essential</span>
                        <span
                            class="absolute top-4 right-4 bg-white/90 text-brand-navy text-xs font-bold px-2.5 py-1 rounded-full shadow"><i
                                class="fa-solid fa-clock text-brand-orange"></i> 4H 3M</span>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                        <div>
                            <p class="text-xs text-gray-500 mb-1"><i
                                    class="fa-solid fa-location-dot text-brand-orange"></i> Sulawesi Selatan</p>
                            <h3 class="text-xl font-bold text-brand-navy">Toraja Culture & Highlands</h3>
                            <p class="text-xs text-gray-600 mt-2">Menyaksikan megahnya rumah adat Tongkonan, tebing batu
                                kubur Kete Kesu, dan kopi khas Toraja.</p>
                        </div>
                        <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                            <div>
                                <span class="text-[10px] text-gray-400 block">Mulai dari</span>
                                <span class="text-lg font-black text-brand-orange">Rp 4.200.000</span>
                            </div>
                            <a href="https://wa.me/6282231872974?text=Halo%20PIDIDI,%20saya%20tertarik%20paket%20Toraja%20Culture"
                                target="_blank"
                                class="bg-brand-orange text-white text-xs font-bold px-4 py-2.5 rounded-xl shadow hover:bg-orange-600 transition-all">Pesan
                                Sekarang</a>
                        </div>
                    </div>
                </div>

                <!-- Item 5: Curated Raja Ampat -->
                <div class="tour-item bg-white rounded-3xl overflow-hidden shadow-lg border border-gray-100 bouncy-hover flex flex-col"
                    data-category="curated">
                    <div class="relative h-60 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1544644181-1484b3fdfc62?auto=format&fit=crop&w=600&q=80"
                            alt="Raja Ampat" class="w-full h-full object-cover">
                        <span
                            class="absolute top-4 left-4 bg-purple-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow flex items-center gap-1.5"><i
                                class="fa-solid fa-fish"></i> Curated</span>
                        <span
                            class="absolute top-4 right-4 bg-white/90 text-brand-navy text-xs font-bold px-2.5 py-1 rounded-full shadow"><i
                                class="fa-solid fa-clock text-brand-orange"></i> 5H 4M</span>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                        <div>
                            <p class="text-xs text-gray-500 mb-1"><i
                                    class="fa-solid fa-location-dot text-brand-orange"></i> Papua Barat</p>
                            <h3 class="text-xl font-bold text-brand-navy">Raja Ampat Paradise & Wayag Lagoon</h3>
                            <p class="text-xs text-gray-600 mt-2">Surga biodiversitas bawah laut dunia, gugusan pulau
                                karang Pianemo & Wayag.</p>
                        </div>
                        <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                            <div>
                                <span class="text-[10px] text-gray-400 block">Mulai dari</span>
                                <span class="text-lg font-black text-brand-orange">Rp 12.500.000</span>
                            </div>
                            <a href="https://wa.me/6282231872974?text=Halo%20PIDIDI,%20saya%20tertarik%20paket%20Raja%20Ampat"
                                target="_blank"
                                class="bg-brand-orange text-white text-xs font-bold px-4 py-2.5 rounded-xl shadow hover:bg-orange-600 transition-all">Pesan
                                Sekarang</a>
                        </div>
                    </div>
                </div>

                <!-- Item 6: Bespoke Card Placeholder -->
                <div class="tour-item bg-gradient-to-br from-brand-orange to-amber-500 rounded-3xl p-8 text-white shadow-xl flex flex-col justify-between"
                    data-category="bespoke">
                    <div class="space-y-4">
                        <span
                            class="bg-white/20 text-white text-xs font-bold px-3 py-1 rounded-full inline-flex items-center gap-1.5"><i
                                class="fa-solid fa-sliders"></i> Custom Unlimited</span>
                        <h3 class="text-2xl font-black">Bespoke Trip (Rancang Bebas)</h3>
                        <p class="text-xs text-amber-100 leading-relaxed">
                            Ingin rute khusus bersama grup pribadi, honeymoon romantis, atau perjalanan rombongan kantor?
                            Isi formulir di bawah untuk kalkulasi instan!
                        </p>
                    </div>
                    <a href="#bespoke"
                        class="mt-6 w-full bg-white text-brand-orange font-extrabold text-center py-3 rounded-2xl shadow hover:bg-brand-cream transition-all">
                        Mulai Rancang Trip
                    </a>
                </div>

            </div>

        </div>
    </section>

    <!-- Form Kustom Perjalanan "Rancang Trip Sendiri" (Bespoke Trip Calculator Widget) -->
    <section id="bespoke" class="py-16 bg-brand-cream">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="bg-white rounded-3xl p-8 sm:p-12 shadow-2xl border border-brand-orange/20 relative">

                <div class="text-center space-y-3 mb-8">
                    <span
                        class="bg-brand-orange text-white font-bold text-xs uppercase px-3.5 py-1 rounded-full inline-flex items-center gap-1.5">
                        <i class="fa-solid fa-wand-magic-sparkles"></i> Bespoke Trip Builder
                    </span>
                    <h2 class="text-3xl font-black text-brand-navy">Form Rancang Trip Sendiri</h2>
                    <p class="text-gray-600 text-sm">
                        Tentukan preferensi Anda, dan kami akan menyusun estimasi harga serta itinerari impian secara cepat.
                    </p>
                </div>

                <form id="bespoke-form" class="space-y-6">

                    <!-- Step 1: Destinasi & Durasi -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-brand-navy mb-2">1. Pilih Destinasi Impian</label>
                            <select id="bespoke-dest"
                                class="w-full bg-brand-cream/50 border border-gray-200 rounded-2xl px-4 py-3 text-sm font-bold text-brand-navy focus:ring-2 focus:ring-brand-orange">
                                <option value="bali">Bali & Lombok</option>
                                <option value="bajo">Labuan Bajo & Komodo</option>
                                <option value="jogja">Yogyakarta & Solo</option>
                                <option value="toraja">Tana Toraja</option>
                                <option value="rajaampat">Raja Ampat</option>
                                <option value="custom">Destinasi Lainnya (Kustom)</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-brand-navy mb-2">2. Durasi Perjalanan</label>
                            <select id="bespoke-days"
                                class="w-full bg-brand-cream/50 border border-gray-200 rounded-2xl px-4 py-3 text-sm font-bold text-brand-navy focus:ring-2 focus:ring-brand-orange">
                                <option value="3">3 Hari 2 Malam</option>
                                <option value="4" selected>4 Hari 3 Malam</option>
                                <option value="5">5 Hari 4 Malam</option>
                                <option value="7">7 Hari 6 Malam+</option>
                            </select>
                        </div>
                    </div>

                    <!-- Step 2: Jumlah Peserta & Tipe Penginapan -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-brand-navy mb-2">3. Jumlah Peserta (Orang)</label>
                            <input type="number" id="bespoke-people" min="1" max="50" value="2"
                                class="w-full bg-brand-cream/50 border border-gray-200 rounded-2xl px-4 py-3 text-sm font-bold text-brand-navy focus:ring-2 focus:ring-brand-orange">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-brand-navy mb-2">4. Tipe Akomodasi</label>
                            <select id="bespoke-stay"
                                class="w-full bg-brand-cream/50 border border-gray-200 rounded-2xl px-4 py-3 text-sm font-bold text-brand-navy focus:ring-2 focus:ring-brand-orange">
                                <option value="homestay">Village Homestay (Otentik)</option>
                                <option value="hotel3">Hotel Bintang 3 (Nyaman)</option>
                                <option value="resort">Resort Bintang 4/5 (Mewah)</option>
                            </select>
                        </div>
                    </div>

                    <!-- Live Estimator Box -->
                    <div
                        class="bg-gradient-to-r from-brand-navy to-brand-light-navy text-white p-6 rounded-2xl flex flex-col sm:flex-row items-center justify-between gap-4">
                        <div>
                            <span class="text-xs text-amber-300 font-bold block">Perkiraan Estimasi Biaya</span>
                            <span id="bespoke-estimate-price" class="text-2xl sm:text-3xl font-black text-white">Rp
                                3.800.000</span>
                            <span class="text-[10px] text-gray-300 block">/orang (dapat disesuaikan)</span>
                        </div>
                        <button type="button" id="btn-submit-bespoke"
                            class="w-full sm:w-auto bg-brand-orange hover:bg-orange-600 text-white font-extrabold px-6 py-3 rounded-xl shadow-lg transition-all flex items-center justify-center gap-2">
                            <i class="fa-brands fa-whatsapp text-lg"></i>
                            <span>Kirim Rancangan ke WA</span>
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </section>

@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Tab Filtering logic
            $('.tour-tab-btn').on('click', function() {
                $('.tour-tab-btn').removeClass('active bg-brand-orange text-white').addClass(
                    'bg-white text-brand-navy border border-gray-200');
                $(this).addClass('active bg-brand-orange text-white').removeClass(
                    'bg-white text-brand-navy border border-gray-200');

                var filter = $(this).data('filter');

                if (filter === 'all') {
                    $('.tour-item').fadeIn(300);
                } else {
                    $('.tour-item').each(function() {
                        if ($(this).data('category') === filter) {
                            $(this).fadeIn(300);
                        } else {
                            $(this).fadeOut(300);
                        }
                    });
                }
            });

            // Interactive Bespoke Price Calculation Estimator
            function calculateBespokePrice() {
                var days = parseInt($('#bespoke-days').val()) || 4;
                var people = parseInt($('#bespoke-people').val()) || 2;
                var stay = $('#bespoke-stay').val();

                var baseDailyRate = 600000;
                if (stay === 'hotel3') baseDailyRate = 950000;
                if (stay === 'resort') baseDailyRate = 1800000;

                var totalPerPerson = (days * baseDailyRate);

                // Group discount for > 4 people
                if (people >= 4) {
                    totalPerPerson = totalPerPerson * 0.85;
                }

                var formatted = new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR',
                    maximumFractionDigits: 0
                }).format(totalPerPerson);
                $('#bespoke-estimate-price').text(formatted);
            }

            $('#bespoke-dest, #bespoke-days, #bespoke-people, #bespoke-stay').on('change input',
                calculateBespokePrice);

            $('#btn-submit-bespoke').on('click', function() {
                var dest = $('#bespoke-dest option:selected').text();
                var days = $('#bespoke-days option:selected').text();
                var people = $('#bespoke-people').val();
                var stay = $('#bespoke-stay option:selected').text();
                var est = $('#bespoke-estimate-price').text();

                var msg = "Halo PIDIDI, saya ingin konsultasi Bespoke Trip Custom:%0A" +
                    "- Destinasi: " + encodeURIComponent(dest) + "%0A" +
                    "- Durasi: " + encodeURIComponent(days) + "%0A" +
                    "- Peserta: " + encodeURIComponent(people) + " orang%0A" +
                    "- Akomodasi: " + encodeURIComponent(stay) + "%0A" +
                    "- Estimasi Web: " + encodeURIComponent(est) + "/orang";

                window.open("https://wa.me/6282231872974?text=" + msg, "_blank");
            });

        });
    </script>
@endpush
