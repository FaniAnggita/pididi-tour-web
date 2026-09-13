@extends('layouts.app')

@section('title', 'VAYANA JOURNEY: The Jogja You Haven\'t Met (3D2N) | Vayana Wisata')
@section('meta_description', 'Paket Wisata Spesial Vayana Journey 3 Hari 2 Malam di Yogyakarta: Menemukan Jogja melalui manusia, karya, rasa, desa, dan cerita lokal.')
@section('meta_keywords', 'Vayana Journey Jogja, Small Group Trip Jogja, Experiential Travel Yogyakarta, Open Batch Wisata Jogja, Vayana Wisata')
@section('og_title', 'VAYANA JOURNEY: The Jogja You Haven\'t Met (3D2N)')
@section('og_description', 'Datang sebagai wisatawan. Pulang membawa cerita. Menemukan Jogja melalui manusia, karya, rasa, dan cerita.')
@section('og_image', asset('vayana_with_tagline.png'))

@push('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "VAYANA JOURNEY: The Jogja You Haven't Met",
  "description": "Menemukan Jogja melalui manusia, karya, rasa, dan cerita (3D2N Curated Small Group Journey).",
  "touristType": "Small Group Travelers",
  "offers": {
    "@type": "Offer",
    "price": "{{ $journey->price ?? 3650000 }}",
    "priceCurrency": "IDR",
    "availability": "https://schema.org/InStock",
    "url": "{{ url()->current() }}"
  },
  "provider": {
    "@type": "TravelAgency",
    "name": "Vayana Wisata",
    "url": "{{ url('/') }}"
  }
}
</script>
@endpush

@section('content')

<!-- Hero Banner Special Package -->
<section class="bg-gradient-to-b from-brand-navy via-brand-navy to-brand-light-navy text-white pt-12 pb-20 relative overflow-hidden">
    <!-- Decorative Floating Shapes -->
    <div class="absolute top-10 right-10 opacity-10 pointer-events-none">
        <svg class="w-72 h-72 text-brand-orange" fill="currentColor" viewBox="0 0 100 100">
            <path d="M0,50 Q25,20 50,50 T100,50 L100,100 L0,100 Z"></path>
        </svg>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                
                <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full border border-amber-300/30 text-xs font-extrabold text-amber-300">
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-sparkles text-amber-300"></i> SIGNATURE EXPERIENCE</span>
                    <span>•</span>
                    <span>3 DAYS 2 NIGHTS</span>
                </div>

                <div class="space-y-2">
                    <span class="text-brand-orange text-sm font-extrabold tracking-widest uppercase block">VAYANA JOURNEY</span>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black leading-tight text-white tracking-tight">
                        THE JOGJA YOU <span class="text-amber-300 relative inline-block">
                            HAVEN'T MET
                            <svg class="absolute left-0 right-0 -bottom-2 w-full h-3 text-brand-orange" viewBox="0 0 200 18" fill="none">
                                <path d="M2 10C25 10 35 2 60 2C85 2 95 16 120 16C145 16 155 4 180 4C192 4 198 8 198 8" stroke="currentColor" stroke-width="4" stroke-linecap="round"/>
                            </svg>
                        </span>
                    </h1>
                </div>

                <p class="text-lg sm:text-xl font-bold text-amber-200 italic">
                    "Datang sebagai wisatawan. Pulang membawa cerita."
                </p>

                <p class="text-sm sm:text-base text-gray-300 max-w-xl mx-auto lg:mx-0 leading-relaxed font-medium">
                    Menemukan Jogja melalui manusia, karya, rasa, dan cerita. Bukan sekadar foto di objek wisata biasa, tetapi perjalanan bermakna dalam kelompok kecil (Small Group Curated Journey: 8–12 orang).
                </p>

                <div class="flex flex-wrap items-center justify-center lg:justify-start gap-4 pt-2">
                    <div class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-2xl border border-white/10 text-xs font-semibold">
                        <i class="fa-solid fa-users text-brand-orange mr-1.5"></i> Target: 8–12 Orang (Small Group)
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm px-4 py-2 rounded-2xl border border-white/10 text-xs font-semibold">
                        <i class="fa-solid fa-calendar-days text-brand-blue mr-1.5"></i> Format: 3D2N Curated Journey
                    </div>
                </div>

                <div class="pt-4 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                    <a href="https://wa.me/6282231872974?text=Halo%20Vayana%20Wisata,%20saya%20tertarik%20dengan%20VAYANA%20JOURNEY:%20The%20Jogja%20You%20Haven't%20Met" 
                       target="_blank"
                       class="w-full sm:w-auto bg-brand-orange hover:bg-orange-600 text-white font-extrabold text-base px-8 py-4 rounded-full shadow-2xl transition-all flex items-center justify-center gap-3 transform hover:-translate-y-1">
                        <i class="fa-brands fa-whatsapp text-xl"></i>
                        <span>Pesan Trip Ini</span>
                    </a>
                    <a href="#principles" class="w-full sm:w-auto bg-white/10 hover:bg-white/20 text-white font-bold text-base px-6 py-3.5 rounded-full border border-white/30 transition-all flex items-center justify-center gap-2">
                        <span>Lihat 5 Prinsip Vayana</span>
                        <i class="fa-solid fa-arrow-down"></i>
                    </a>
                </div>

            </div>

            <div class="lg:col-span-5 relative mt-6 lg:mt-0">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl border-4 border-white/20 transform rotate-1 hover:rotate-0 transition-transform">
                    <img src="https://images.unsplash.com/photo-1596402184320-417e7178b2cd?auto=format&fit=crop&w=800&q=80" 
                         alt="The Jogja You Haven't Met" 
                         class="w-full h-80 sm:h-96 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-navy via-transparent to-transparent flex items-end p-6">
                        <div class="text-white space-y-1">
                            <span class="bg-amber-400 text-brand-navy text-[10px] font-black uppercase px-2.5 py-1 rounded-full">Included</span>
                            <p class="text-xs font-bold text-amber-200 flex items-center gap-1.5"><i class="fa-solid fa-star text-amber-300"></i> Standard Vayana Journey Book + Local Voucher</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Wave Transition -->
    <div class="absolute bottom-0 left-0 right-0 overflow-hidden leading-none z-10">
        <svg class="relative block w-full h-10 sm:h-14" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0 C300,90 600,-40 900,40 C1050,80 1150,20 1200,10 L1200,120 L0,120 Z" fill="#FFF4E6"></path>
        </svg>
    </div>
</section>

<!-- 5 Prinsip Pengalaman Vayana -->
<section id="principles" class="py-16 bg-brand-cream relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-12">
            <span class="bg-brand-orange/10 text-brand-orange font-extrabold text-xs uppercase tracking-wider px-3.5 py-1.5 rounded-full inline-flex items-center gap-1.5">
                <i class="fa-solid fa-lightbulb text-amber-500"></i> Why This Journey is Unique
            </span>
            <h2 class="text-3xl sm:text-4xl font-black text-brand-navy">
                5 Prinsip Pengalaman Vayana
            </h2>
            <p class="text-gray-600 text-sm sm:text-base font-medium">
                Bukan itinerari biasa. Perjalanan ini dibangun atas 5 pilar filosofi mendalam:
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
            
            <!-- Prinsip 1 -->
            <div class="bg-white p-6 rounded-3xl shadow-md border border-brand-orange/20 space-y-3 bouncy-hover text-center">
                <div class="w-12 h-12 mx-auto rounded-2xl bg-orange-100 text-brand-orange flex items-center justify-center font-black text-xl">
                    1
                </div>
                <h3 class="font-extrabold text-lg text-brand-navy">MEET</h3>
                <p class="text-xs text-gray-600 leading-relaxed">
                    Bertemu manusia. Mendengar kisah dari warga, artisan, dan storyteller lokal.
                </p>
            </div>

            <!-- Prinsip 2 -->
            <div class="bg-white p-6 rounded-3xl shadow-md border border-brand-blue/20 space-y-3 bouncy-hover text-center">
                <div class="w-12 h-12 mx-auto rounded-2xl bg-blue-100 text-brand-blue flex items-center justify-center font-black text-xl">
                    2
                </div>
                <h3 class="font-extrabold text-lg text-brand-navy">EXPERIENCE</h3>
                <p class="text-xs text-gray-600 leading-relaxed">
                    Melihat = Wisata.<br>Mencoba = Pengalaman. Ikut memasak & berkarya tangan.
                </p>
            </div>

            <!-- Prinsip 3 -->
            <div class="bg-white p-6 rounded-3xl shadow-md border border-emerald-500/20 space-y-3 bouncy-hover text-center">
                <div class="w-12 h-12 mx-auto rounded-2xl bg-emerald-100 text-emerald-600 flex items-center justify-center font-black text-xl">
                    3
                </div>
                <h3 class="font-extrabold text-lg text-brand-navy">UNDERSTAND</h3>
                <p class="text-xs text-gray-600 leading-relaxed">
                    Memahami cerita & tantangan ekonomi di balik keindahan suatu tempat.
                </p>
            </div>

            <!-- Prinsip 4 -->
            <div class="bg-white p-6 rounded-3xl shadow-md border border-purple-500/20 space-y-3 bouncy-hover text-center">
                <div class="w-12 h-12 mx-auto rounded-2xl bg-purple-100 text-purple-600 flex items-center justify-center font-black text-xl">
                    4
                </div>
                <h3 class="font-extrabold text-lg text-brand-navy">CONNECT</h3>
                <p class="text-xs text-gray-600 leading-relaxed">
                    Terhubung dengan sesama traveler dan warga lokal melalui percakapan hangat.
                </p>
            </div>

            <!-- Prinsip 5 -->
            <div class="bg-white p-6 rounded-3xl shadow-md border border-amber-500/20 space-y-3 bouncy-hover text-center">
                <div class="w-12 h-12 mx-auto rounded-2xl bg-amber-100 text-amber-600 flex items-center justify-center font-black text-xl">
                    5
                </div>
                <h3 class="font-extrabold text-lg text-brand-navy">INSPIRE</h3>
                <p class="text-xs text-gray-600 leading-relaxed">
                    Pulang membawa karya tangan, voucher lokal, dan perspektif baru.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- Detailed 3-Day Itinerary Section -->
<section class="py-16 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-16">
            <span class="bg-brand-navy text-white font-extrabold text-xs uppercase tracking-wider px-3.5 py-1.5 rounded-full inline-flex items-center gap-1.5">
                <i class="fa-solid fa-map-location-dot text-brand-orange"></i> Detailed Itinerary
            </span>
            <h2 class="text-3xl sm:text-4xl font-black text-brand-navy">
                Alur Perjalanan 3 Hari 2 Malam
            </h2>
        </div>

        <div class="space-y-16">
            
            <!-- HARI 1 -->
            <div class="bg-brand-cream/40 rounded-3xl p-6 sm:p-10 border border-brand-orange/20 space-y-6">
                
                <div class="flex flex-col sm:flex-row sm:items-center justify-between border-b border-brand-orange/20 pb-4 gap-2">
                    <div>
                        <span class="bg-brand-orange text-white text-xs font-black px-3 py-1 rounded-full uppercase">HARI 1</span>
                        <h3 class="text-2xl font-black text-brand-navy mt-1">MEET JOGJA</h3>
                    </div>
                    <p class="text-xs font-bold text-brand-orange bg-orange-100 px-3 py-1.5 rounded-full">
                        "Jogja bukan tempat. Jogja adalah manusia."
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <div class="space-y-4 text-xs text-gray-700">
                        <div class="flex items-start gap-3">
                            <span class="font-black text-brand-orange w-14 shrink-0">09.00</span>
                            <div>
                                <strong class="text-brand-navy text-sm block font-extrabold">Arrival & Welcome</strong>
                                Peserta dijemput dan diajak welcome breakfast di tempat lokal yang punya cerita. Peserta menerima <strong>VAYANA JOURNEY BOOK</strong> (peta, cerita singkat, & pertanyaan reflektif).
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="font-black text-brand-orange w-14 shrink-0">11.00</span>
                            <div>
                                <strong class="text-brand-navy text-sm block font-extrabold">Kampung yang Bercerita</strong>
                                Walking experience di kampung Jogja bersama Storyteller lokal. Mendengar kisah perubahan kampung dari warga dan pengrajin.
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="font-black text-brand-orange w-14 shrink-0">13.00</span>
                            <div>
                                <strong class="text-brand-navy text-sm block font-extrabold">Lunch with Local Story</strong>
                                Makan siang sambil ngobrol santai bersama pelaku lokal: <em>"Apa yang membuat orang memilih tetap hidup dan bekerja di Jogja?"</em>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-4 text-xs text-gray-700">
                        <div class="flex items-start gap-3">
                            <span class="font-black text-brand-orange w-14 shrink-0">15.00</span>
                            <div>
                                <strong class="text-brand-navy text-sm block font-extrabold">Meet the Maker</strong>
                                Bertemu artisan (gerabah / batik / kulit / bambu / kopi / makanan tradisional). Peserta ikut membuat karya tangan langsung.
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="font-black text-brand-orange w-14 shrink-0">17.00</span>
                            <div>
                                <strong class="text-brand-navy text-sm block font-extrabold">Check-in Boutique Homestay</strong>
                                Menginap di boutique homestay berkarakter Jogja yang otentik.
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="font-black text-brand-orange w-14 shrink-0">19.00</span>
                            <div>
                                <strong class="text-brand-navy text-sm block font-extrabold">Jogja After Dark & Vayana Conversation</strong>
                                Dinner kuliner bercerita dilanjutkan ngobrol santai berfasilitasi: <em>"Apa yang sebenarnya kita cari ketika bepergian?"</em>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- HARI 2 -->
            <div class="bg-brand-cream/40 rounded-3xl p-6 sm:p-10 border border-brand-blue/20 space-y-6">
                
                <div class="flex flex-col sm:flex-row sm:items-center justify-between border-b border-brand-blue/20 pb-4 gap-2">
                    <div>
                        <span class="bg-brand-blue text-white text-xs font-black px-3 py-1 rounded-full uppercase">HARI 2</span>
                        <h3 class="text-2xl font-black text-brand-navy mt-1">LIVE JOGJA</h3>
                    </div>
                    <p class="text-xs font-bold text-brand-blue bg-blue-100 px-3 py-1.5 rounded-full">
                        "Hari ini jangan menjadi turis."
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <div class="space-y-4 text-xs text-gray-700">
                        <div class="flex items-start gap-3">
                            <span class="font-black text-brand-blue w-14 shrink-0">06.30</span>
                            <div>
                                <strong class="text-brand-navy text-sm block font-extrabold">Jogja Morning Pasar Tradisional</strong>
                                Belanja bahan makanan segar di pasar tradisional bersama warga lokal.
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="font-black text-brand-blue w-14 shrink-0">08.00</span>
                            <div>
                                <strong class="text-brand-navy text-sm block font-extrabold">Cook & Eat Bersama Host</strong>
                                Memasak kuliner Jogja bersama local host. Refleksi: <em>Pangan lokal → Keluarga → Budaya → Ekonomi</em>.
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="font-black text-brand-blue w-14 shrink-0">10.30</span>
                            <div>
                                <strong class="text-brand-navy text-sm block font-extrabold">Village Experience</strong>
                                Dibagi kelompok kecil mencoba aktivitas desa: <i class="fa-solid fa-wheat-awn text-amber-600 ml-1"></i> Bertani, <i class="fa-solid fa-basket-shopping text-rose-500 ml-1"></i> Kerajinan, <i class="fa-solid fa-mug-hot text-amber-800 ml-1"></i> Kopi, atau <i class="fa-solid fa-cow text-amber-700 ml-1"></i> Peternakan.
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="font-black text-brand-blue w-14 shrink-0">13.00</span>
                            <div>
                                <strong class="text-brand-navy text-sm block font-extrabold">Lunch in the Village</strong>
                                Makan siang otentik hasil masakan hangat warga desa.
                            </div>
                        </div>
                    </div>

                    <div class="space-y-4 text-xs text-gray-700">
                        <div class="flex items-start gap-3">
                            <span class="font-black text-brand-blue w-14 shrink-0">14.30</span>
                            <div>
                                <strong class="text-brand-navy text-sm block font-extrabold">The Local Economy Walk</strong>
                                Bertemu UMKM & pemuda desa. Tantangan konsultan: <em>"Kalau kamu jadi konsultan desa ini, apa yang akan kamu ubah?"</em>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="font-black text-brand-blue w-14 shrink-0">16.30</span>
                            <div>
                                <strong class="text-brand-navy text-sm block font-extrabold">Choose Your Story</strong>
                                Pilihan bebas: <strong>A. Nature</strong> (River walk), <strong>B. Creative</strong> (Membuat karya), atau <strong>C. People</strong> (Deep talk warga).
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="font-black text-brand-blue w-14 shrink-0">20.00</span>
                            <div>
                                <strong class="text-brand-navy text-sm block font-extrabold">Vayana Night (Circle Talk)</strong>
                                Duduk melingkar tanpa MC formal. Pertanyaan malam: <em>"Apa yang kamu temukan hari ini?"</em>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- HARI 3 -->
            <div class="bg-brand-cream/40 rounded-3xl p-6 sm:p-10 border border-amber-500/20 space-y-6">
                
                <div class="flex flex-col sm:flex-row sm:items-center justify-between border-b border-amber-500/20 pb-4 gap-2">
                    <div>
                        <span class="bg-amber-500 text-white text-xs font-black px-3 py-1 rounded-full uppercase">HARI 3</span>
                        <h3 class="text-2xl font-black text-brand-navy mt-1">INSPIRE JOGJA</h3>
                    </div>
                    <p class="text-xs font-bold text-amber-700 bg-amber-100 px-3 py-1.5 rounded-full">
                        "Perjalanan pulang dengan membawa sesuatu."
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <div class="space-y-4 text-xs text-gray-700">
                        <div class="flex items-start gap-3">
                            <span class="font-black text-amber-600 w-14 shrink-0">07.00</span>
                            <div>
                                <strong class="text-brand-navy text-sm block font-extrabold">Slow Morning & Breakfast</strong>
                                Nikmati sarapan santai tanpa wake-up call terburu-buru.
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="font-black text-amber-600 w-14 shrink-0">09.00</span>
                            <div>
                                <strong class="text-brand-navy text-sm block font-extrabold">One Last Story</strong>
                                Mengunjungi situs nilai budaya/sejarah dengan perspektif reflektif: <em>"Apa yang bisa kita pelajari untuk masa depan?"</em>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="font-black text-amber-600 w-14 shrink-0">11.00</span>
                            <div>
                                <strong class="text-brand-navy text-sm block font-extrabold">Vayana Local Market</strong>
                                Menukarkan <strong>Vayana Voucher</strong> untuk produk curated craft, makanan, & art langsung mendukung UMKM lokal.
                            </div>
                        </div>
                    </div>

                    <div class="space-y-4 text-xs text-gray-700">
                        <div class="flex items-start gap-3">
                            <span class="font-black text-amber-600 w-14 shrink-0">13.00</span>
                            <div>
                                <strong class="text-brand-navy text-sm block font-extrabold">Farewell Lunch</strong>
                                Makan siang penutup bersama rekan perjalanan baru.
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="font-black text-amber-600 w-14 shrink-0">14.00</span>
                            <div>
                                <strong class="text-brand-navy text-sm block font-extrabold">Vayana Reflection</strong>
                                Pengisian kartu kenangan: <em>"Before Vayana, I thought..."</em> & <em>"After Vayana, I discovered..."</em>.
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="font-black text-amber-600 w-14 shrink-0">15.00</span>
                            <div>
                                <strong class="text-brand-navy text-sm block font-extrabold">Drop-off & Farewell</strong>
                                Perjalanan berakhir dengan membawa: <em>Vayana Journey Book, karya tangan buatan sendiri, produk lokal, foto, & relasi baru</em>.
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- Booking Box -->
        <div class="mt-16 bg-gradient-to-r from-brand-orange via-amber-500 to-orange-600 text-white rounded-3xl p-8 sm:p-12 shadow-2xl text-center space-y-6">
            <h2 class="text-3xl font-black">Tertarik Bergabung dalam Batch Terdekat?</h2>
            <p class="text-sm max-w-xl mx-auto text-amber-100 font-medium">
                Kuota sangat terbatas (8–12 orang per kelompok) demi menjaga kualitas percakapan dan kehangatan pengalaman.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-2">
                <a href="https://wa.me/6282231872974?text=Halo%20Vayana%20Wisata,%20saya%20ingin%20daftar%20VAYANA%20JOURNEY:%20The%20Jogja%20You%20Haven't%20Met" 
                   target="_blank"
                   class="w-full sm:w-auto bg-white text-brand-orange font-black text-base px-8 py-4 rounded-full shadow-lg hover:bg-brand-cream transition-all flex items-center justify-center gap-2">
                    <i class="fa-brands fa-whatsapp text-xl"></i>
                    <span>Tanyakan Tanggal Batch Available</span>
                </a>
            </div>
        </div>

    </div>
</section>

@endsection
