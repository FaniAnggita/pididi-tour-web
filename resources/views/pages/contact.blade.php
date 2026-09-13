@extends('layouts.app')

@section('title', 'Hubungi Tim Travel Specialist | Vayana Wisata')
@section('meta_description', 'Hubungi tim Vayana Wisata via WhatsApp atau email untuk diskusi rencana paket liburan, konsultasi bespoke trip, atau kerjasama desa mitra.')
@section('meta_keywords', 'Kontak Vayana Wisata, WA Tour Agent Jogja, Alamat Vayana Wisata, Travel Specialist Indonesia')

@section('content')

    <!-- Header Banner -->
    <section class="bg-brand-cream pt-12 pb-16 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <span
                class="bg-brand-orange/10 text-brand-orange font-extrabold text-xs uppercase tracking-wider px-3.5 py-1.5 rounded-full inline-flex items-center gap-1.5 mb-3">
                <i class="fa-solid fa-comments text-brand-orange"></i> Mari Mengobrol
            </span>
            <h1 class="text-3xl sm:text-5xl font-black text-brand-navy">
                Hubungi Tim <span class="text-brand-orange">Vayana Wisata</span>
            </h1>
            <p class="text-gray-600 text-sm sm:text-base max-w-2xl mx-auto mt-3 font-medium">
                Ada pertanyaan tentang paket wisata, rancangan trip khusus, atau kerjasama desa mitra? Kami siap melayani
                Anda.
            </p>
        </div>

        <!-- Animated Wave Divider (bg-brand-cream to bg-white) -->
        <div class="absolute bottom-0 left-0 right-0 overflow-hidden leading-none z-20 pointer-events-none">
            <div class="w-[200%] flex animate-wave-slow opacity-40">
                <svg class="w-1/2 h-8 sm:h-14 text-white" viewBox="0 0 1200 120" preserveAspectRatio="none"
                    fill="currentColor">
                    <path d="M0,0 C150,90 350,-40 500,40 C650,120 900,10 1200,60 L1200,120 L0,120 Z"></path>
                </svg>
                <svg class="w-1/2 h-8 sm:h-14 text-white" viewBox="0 0 1200 120" preserveAspectRatio="none"
                    fill="currentColor">
                    <path d="M0,0 C150,90 350,-40 500,40 C650,120 900,10 1200,60 L1200,120 L0,120 Z"></path>
                </svg>
            </div>
            <div class="w-[200%] flex animate-wave-fast absolute top-0 left-0">
                <svg class="w-1/2 h-8 sm:h-14 text-white" viewBox="0 0 1200 120" preserveAspectRatio="none"
                    fill="currentColor">
                    <path d="M0,20 C200,80 400,-20 600,50 C800,120 1000,10 1200,40 L1200,120 L0,120 Z"></path>
                </svg>
                <svg class="w-1/2 h-8 sm:h-14 text-white" viewBox="0 0 1200 120" preserveAspectRatio="none"
                    fill="currentColor">
                    <path d="M0,20 C200,80 400,-20 600,50 C800,120 1000,10 1200,40 L1200,120 L0,120 Z"></path>
                </svg>
            </div>
        </div>
    </section>

    <!-- Contact Form & Info Grid -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

                <!-- Left Info Column -->
                <div class="lg:col-span-5 space-y-6">

                    <!-- WhatsApp Large Card -->
                    <div
                        class="bg-gradient-to-br from-emerald-500 to-teal-700 text-white p-8 rounded-3xl shadow-xl space-y-4 relative overflow-hidden">
                        <div class="flex items-center justify-between">
                            <span class="bg-white/20 text-white text-xs font-bold px-3 py-1 rounded-full">Respon
                                Cepat</span>
                            <i class="fa-brands fa-whatsapp text-4xl"></i>
                        </div>
                        <h2 class="text-2xl font-black">Konsultasi Instan via WhatsApp</h2>
                        <p class="text-xs text-emerald-100 leading-relaxed">
                            Tim Travel Specialist Vayana Wisata aktif melayani diskusi rencana liburan secara personal.
                        </p>
                        <a href="https://wa.me/6282231872974?text=Halo%20Vayana%20Wisata,%20saya%20ingin%20tanya%20paket%20wisata"
                            target="_blank"
                            class="bg-emerald-600 hover:bg-emerald-700 text-white font-extrabold text-xs py-3 px-5 rounded-2xl shadow-lg flex items-center justify-center gap-2 transition-all group">
                            <i class="fa-brands fa-whatsapp text-lg group-hover:rotate-12 transition-transform"></i>
                            <span>Chat Tim Vayana (+62 822-3187-2974)</span>
                        </a>
                    </div>

                    <!-- Office Contact Details Card -->
                    <div class="bg-brand-cream/60 p-6 rounded-3xl border border-brand-orange/20 space-y-4">
                        <h3 class="font-extrabold text-lg text-brand-navy border-b border-brand-orange/20 pb-3">Informasi
                            Operasional</h3>

                        <div class="space-y-4 text-xs text-gray-700">
                            <div class="flex items-start gap-3">
                                <div
                                    class="w-8 h-8 rounded-xl bg-brand-orange/10 text-brand-orange flex items-center justify-center shrink-0">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div>
                                    <strong class="text-brand-navy block font-bold text-sm">Alamat Kantor Utama</strong>
                                    Bulus Wetan, Sumber Agung,
                                    Jetis, Bantul, D.I. Yogyakarta
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div
                                    class="w-8 h-8 rounded-xl bg-brand-blue/10 text-brand-blue flex items-center justify-center shrink-0">
                                    <i class="fa-solid fa-clock"></i>
                                </div>
                                <div>
                                    <strong class="text-brand-navy block font-bold text-sm">Jam Operasional Kantor</strong>
                                    Senin - Sabtu: 08.00 - 18.00 WITA (Minggu Libur)
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div
                                    class="w-8 h-8 rounded-xl bg-amber-500/10 text-amber-600 flex items-center justify-center shrink-0">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div>
                                    <strong class="text-brand-navy block font-bold text-sm">Email Resmi</strong>
                                    hello@vayanawisata.com / info@vayanawisata.com
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Right Interactive Contact Form -->
                <div class="lg:col-span-7">
                    <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100 space-y-6">
                        <div>
                            <h2 class="text-2xl font-black text-brand-navy">Kirim Pesan atau Pertanyaan</h2>
                            <p class="text-xs text-gray-500">Isi formulir di bawah ini, kami akan merespon melalui email/WA
                                dalam 1x24 jam.</p>
                        </div>

                        @if(session('success'))
                            <div class="bg-emerald-50 border border-emerald-300 text-emerald-800 p-4 rounded-2xl flex items-center gap-3 text-xs sm:text-sm font-bold shadow-sm">
                                <i class="fa-solid fa-circle-check text-emerald-500 text-lg"></i>
                                <span>{{ session('success') }}</span>
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="bg-rose-50 border border-rose-300 text-rose-800 p-4 rounded-2xl space-y-1 text-xs font-semibold shadow-sm">
                                <p class="font-bold flex items-center gap-1.5 text-rose-600">
                                    <i class="fa-solid fa-triangle-exclamation"></i> Terjadi kesalahan pengisian form:
                                </p>
                                <ul class="list-disc list-inside pl-1 space-y-0.5">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST" id="contact-form" class="space-y-4">
                            @csrf
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-bold text-gray-700 mb-1">Nama Lengkap *</label>
                                    <input type="text" name="full_name" value="{{ old('full_name') }}" required placeholder="Contoh: Budi Santoso"
                                        class="w-full bg-brand-cream/40 border border-gray-200 rounded-xl px-4 py-2.5 text-sm font-semibold text-brand-navy focus:ring-2 focus:ring-brand-orange">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-gray-700 mb-1">Nomor WhatsApp *</label>
                                    <input type="tel" name="wa_number" value="{{ old('wa_number') }}" required placeholder="08123456789"
                                        class="w-full bg-brand-cream/40 border border-gray-200 rounded-xl px-4 py-2.5 text-sm font-semibold text-brand-navy focus:ring-2 focus:ring-brand-orange">
                                </div>
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-gray-700 mb-1">Alamat Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="budi@example.com"
                                    class="w-full bg-brand-cream/40 border border-gray-200 rounded-xl px-4 py-2.5 text-sm font-semibold text-brand-navy focus:ring-2 focus:ring-brand-orange">
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-gray-700 mb-1">Topik Pertanyaan</label>
                                <select name="topic"
                                    class="w-full bg-brand-cream/40 border border-gray-200 rounded-xl px-4 py-2.5 text-sm font-semibold text-brand-navy focus:ring-2 focus:ring-brand-orange">
                                    <option value="Tanya Paket Wisata Existing" {{ old('topic') == 'Tanya Paket Wisata Existing' ? 'selected' : '' }}>Tanya Paket Wisata Existing</option>
                                    <option value="Rancang Custom / Bespoke Trip" {{ old('topic') == 'Rancang Custom / Bespoke Trip' ? 'selected' : '' }}>Rancang Custom / Bespoke Trip</option>
                                    <option value="Kerjasama Desa Wisata / Mitra" {{ old('topic') == 'Kerjasama Desa Wisata / Mitra' ? 'selected' : '' }}>Kerjasama Desa Wisata / Mitra</option>
                                    <option value="Lainnya" {{ old('topic') == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-gray-700 mb-1">Pesan Anda *</label>
                                <textarea name="message" rows="4" required placeholder="Tuliskan detail rencana trip atau pertanyaan Anda di sini..."
                                    class="w-full bg-brand-cream/40 border border-gray-200 rounded-xl px-4 py-2.5 text-sm font-semibold text-brand-navy focus:ring-2 focus:ring-brand-orange">{{ old('message') }}</textarea>
                            </div>

                            <button type="submit"
                                class="w-full bg-brand-orange hover:bg-orange-600 text-white font-extrabold py-3.5 rounded-xl shadow-lg transition-all flex items-center justify-center gap-2 transform active:scale-95">
                                <i class="fa-solid fa-paper-plane"></i>
                                <span>Kirim Pesan Sekarang</span>
                            </button>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Embedded Google Maps Frame -->
    <section class="bg-brand-cream py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4">
            <h2 class="text-xl font-black text-brand-navy text-center">Peta Lokasi Kantor Vayana Wisata</h2>
            <div class="rounded-3xl overflow-hidden shadow-xl border-4 border-white h-96">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.026720516407!2d115.2570020147844!3d-8.68943269375704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2419a4e3df5ad%3A0x6a05e836b7b25203!2sSanur%2C%20Denpasar%20City%2C%20Bali!5e0!3m2!1sen!2sid!4v1680000000000!5m2!1sen!2sid"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

@endsection
