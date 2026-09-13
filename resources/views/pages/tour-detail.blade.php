@extends('layouts.app')

@section('title', $tour->title . ' | Paket Wisata ' . $tour->location . ' - Vayana Wisata')
@section('meta_description', Str::limit(strip_tags($tour->short_description ?? $tour->full_description), 155))
@section('meta_keywords', $tour->title . ', Paket Wisata ' . $tour->location . ', Vayana Wisata, Private Trip ' . $tour->location)
@section('og_title', $tour->title . ' - Vayana Wisata')
@section('og_description', Str::limit(strip_tags($tour->short_description ?? $tour->full_description), 155))
@section('og_image', $tour->cover_image ? asset($tour->cover_image) : asset('vayana_with_tagline.png'))

@push('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "{{ e($tour->title) }}",
  "description": "{{ e(strip_tags($tour->short_description ?? $tour->full_description)) }}",
  "touristType": "Traveler",
  "offers": {
    "@type": "Offer",
    "price": "{{ $tour->starting_price }}",
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

<!-- Header Banner & Cover Image -->
<section class="relative bg-brand-navy text-white pt-8 pb-16 overflow-hidden">
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="mb-4">
            <a href="{{ route('tours') }}" class="text-xs font-bold text-gray-300 hover:text-brand-orange flex items-center gap-2 transition-colors">
                <i class="fa-solid fa-arrow-left"></i>
                <span>Kembali ke Semua Paket Wisata</span>
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            
            <div class="lg:col-span-7 space-y-4">
                
                <div class="flex flex-wrap items-center gap-2">
                    <span class="bg-brand-orange text-white text-xs font-extrabold px-3.5 py-1 rounded-full uppercase">
                        {{ $tour->category === 'curated' ? '🌾 Curated Experience' : ($tour->category === 'essential' ? '🚀 Essential Trip' : '🎨 Bespoke Custom') }}
                    </span>
                    <span class="bg-white/10 text-white text-xs font-bold px-3 py-1 rounded-full">
                        <i class="fa-solid fa-clock text-amber-300 mr-1"></i> {{ $tour->duration }}
                    </span>
                    <span class="bg-white/10 text-white text-xs font-bold px-3 py-1 rounded-full">
                        <i class="fa-solid fa-location-dot text-brand-orange mr-1"></i> {{ $tour->location }}
                    </span>
                </div>

                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black leading-tight text-white">
                    {{ $tour->title }}
                </h1>

                <div class="flex items-center gap-4 text-xs font-bold text-gray-300 pt-1">
                    <span class="text-amber-400 flex items-center gap-1">
                        <i class="fa-solid fa-star"></i> {{ $tour->rating }} ({{ $tour->reviews_count }} Ulasan Tamu)
                    </span>
                    <span>•</span>
                    <span>Min. {{ $tour->min_pax }} Pax Peserta</span>
                </div>

                <!-- Highlight Badges -->
                @if(!empty($tour->highlight_badges))
                    <div class="flex flex-wrap gap-2 pt-2">
                        @foreach($tour->highlight_badges as $badge)
                            <span class="bg-white/10 border border-white/20 text-white text-xs font-bold px-3 py-1 rounded-full">
                                {{ $badge }}
                            </span>
                        @endforeach
                    </div>
                @endif

            </div>

            <div class="lg:col-span-5 relative">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl border-4 border-white/20 h-72 sm:h-80">
                    <img src="{{ Str::startsWith($tour->cover_image, ['http://', 'https://']) ? $tour->cover_image : asset($tour->cover_image) }}" alt="{{ $tour->title }}" class="w-full h-full object-cover">
                </div>
            </div>


        </div>

    </div>

    <!-- Wave Divider -->
    <div class="absolute bottom-0 left-0 right-0 overflow-hidden leading-none z-10">
        <svg class="relative block w-full h-8 sm:h-12" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0 C300,90 600,-40 900,40 C1050,80 1150,20 1200,10 L1200,120 L0,120 Z" fill="#ffffff"></path>
        </svg>
    </div>
</section>

<!-- Content Detail Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <!-- Main Story & Itinerary Column -->
            <div class="lg:col-span-8 space-y-12">
                
                <!-- Description -->
                <div class="space-y-4">
                    <h2 class="text-2xl font-black text-brand-navy border-b border-gray-100 pb-3 flex items-center gap-2">
                        <i class="fa-solid fa-circle-info text-brand-orange"></i>
                        <span>Tentang Perjalanan Ini</span>
                    </h2>
                    <p class="text-base text-gray-700 leading-relaxed font-medium">
                        {{ $tour->short_description }}
                    </p>
                    @if($tour->full_description && $tour->full_description !== $tour->short_description)
                        <div class="bg-brand-cream/40 p-6 rounded-3xl border border-brand-orange/15 text-sm text-gray-700 leading-relaxed space-y-3">
                            {!! nl2br(e($tour->full_description)) !!}
                        </div>
                    @endif
                </div>

                <!-- Photo Gallery Section -->
                @if($tour->galleries && $tour->galleries->count() > 0)
                    <div class="space-y-4" x-data="{ activeImage: null }">
                        <h2 class="text-2xl font-black text-brand-navy border-b border-gray-100 pb-3 flex items-center gap-2">
                            <i class="fa-solid fa-images text-brand-blue"></i>
                            <span>Galeri Foto Tempat Wisata & Aktivitas</span>
                        </h2>
                        
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                            @foreach($tour->galleries as $gal)
                                <div @click="activeImage = '{{ $gal->image_url }}'" 
                                     class="relative group rounded-2xl overflow-hidden shadow-md cursor-pointer border border-gray-100 h-40 transform hover:scale-105 transition-transform duration-300">
                                    <img src="{{ $gal->image_url }}" alt="{{ $gal->caption ?? $tour->title }}" class="w-full h-full object-cover">
                                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center p-2 text-center text-white text-xs font-bold">
                                        <i class="fa-solid fa-magnifying-glass-plus text-2xl"></i>
                                    </div>
                                    @if($gal->caption)
                                        <span class="absolute bottom-0 inset-x-0 bg-brand-navy/80 text-white text-[10px] p-1.5 truncate text-center font-semibold">
                                            {{ $gal->caption }}
                                        </span>
                                    @endif
                                </div>
                            @endforeach
                        </div>

                        <!-- Image Lightbox Modal -->
                        <div x-show="activeImage" 
                             @click="activeImage = null"
                             class="fixed inset-0 z-50 bg-black/90 flex items-center justify-center p-4"
                             style="display: none;">
                            <div class="relative max-w-4xl max-h-[90vh]">
                                <img :src="activeImage" class="rounded-2xl max-h-[85vh] w-auto object-contain shadow-2xl">
                                <button @click="activeImage = null" class="absolute -top-10 right-0 text-white text-2xl font-bold hover:text-brand-orange">
                                    <i class="fa-solid fa-xmark"></i> Tutup
                                </button>
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Daily Itineraries -->
                @if($tour->itineraries && $tour->itineraries->count() > 0)
                    <div class="space-y-6">
                        <h2 class="text-2xl font-black text-brand-navy border-b border-gray-100 pb-3 flex items-center gap-2">
                            <i class="fa-solid fa-map text-brand-orange"></i>
                            <span>Rincian Itinerari Harian</span>
                        </h2>

                        <div class="space-y-4">
                            @foreach($tour->itineraries as $it)
                                <div class="bg-brand-cream/30 p-6 rounded-3xl border border-brand-orange/20 space-y-2">
                                    <div class="flex items-center gap-3">
                                        <span class="bg-brand-orange text-white text-xs font-black px-3 py-1 rounded-full">HARI {{ $it->day_number }}</span>
                                        <h3 class="font-extrabold text-base text-brand-navy">{{ $it->title }}</h3>
                                    </div>
                                    @if($it->description)
                                        <p class="text-xs text-gray-700 leading-relaxed pt-1 pl-1 font-medium">
                                            {{ $it->description }}
                                        </p>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Inclusions & Exclusions -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- Inclusions -->
                    <div class="bg-emerald-50/60 p-6 rounded-3xl border border-emerald-200 space-y-3">
                        <h3 class="font-extrabold text-sm text-emerald-900 flex items-center gap-2">
                            <i class="fa-solid fa-circle-check text-emerald-600"></i>
                            <span>Fasilitas Termasuk (Included)</span>
                        </h3>
                        @if(is_array($tour->inclusions) && count($tour->inclusions) > 0)
                            <ul class="space-y-2 text-xs text-emerald-950 font-medium">
                                @foreach($tour->inclusions as $inc)
                                    <li class="flex items-start gap-2">
                                        <i class="fa-solid fa-check text-emerald-600 mt-0.5"></i>
                                        <span>{{ $inc }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-xs text-gray-500">Hubungi tim kami untuk detail fasilitas.</p>
                        @endif
                    </div>

                    <!-- Exclusions -->
                    <div class="bg-rose-50/60 p-6 rounded-3xl border border-rose-200 space-y-3">
                        <h3 class="font-extrabold text-sm text-rose-900 flex items-center gap-2">
                            <i class="fa-solid fa-circle-xmark text-rose-600"></i>
                            <span>Tidak Termasuk (Excluded)</span>
                        </h3>
                        @if(is_array($tour->exclusions) && count($tour->exclusions) > 0)
                            <ul class="space-y-2 text-xs text-rose-950 font-medium">
                                @foreach($tour->exclusions as $exc)
                                    <li class="flex items-start gap-2">
                                        <i class="fa-solid fa-xmark text-rose-600 mt-0.5"></i>
                                        <span>{{ $exc }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-xs text-gray-500">Pengeluaran pribadi & tiket pesawat PP.</p>
                        @endif
                    </div>
                </div>

            </div>

            <!-- Right Booking Card Sticky -->
            <div class="lg:col-span-4">
                <div class="bg-white rounded-3xl p-6 shadow-2xl border border-brand-orange/20 sticky top-24 space-y-6">
                    
                    <div class="space-y-1 border-b border-gray-100 pb-4">
                        <span class="text-xs text-gray-500 font-bold block">Harga Mulai Dari</span>
                        <div class="flex items-baseline gap-1">
                            <span class="text-3xl font-black text-brand-orange">Rp {{ number_format($tour->starting_price, 0, ',', '.') }}</span>
                            <span class="text-xs text-gray-500 font-bold">/orang</span>
                        </div>
                        <span class="text-[10px] text-emerald-600 font-bold block"><i class="fa-solid fa-shield-halved"></i> Transaksi Resmi Rekening PT</span>
                    </div>

                    <!-- Tour Specs -->
                    <div class="space-y-2 text-xs text-gray-700">
                        <div class="flex items-center justify-between py-1 border-b border-gray-50">
                            <span class="text-gray-500">Durasi Perjalanan:</span>
                            <span class="font-bold text-brand-navy">{{ $tour->duration }}</span>
                        </div>
                        <div class="flex items-center justify-between py-1 border-b border-gray-50">
                            <span class="text-gray-500">Min. Jumlah Peserta:</span>
                            <span class="font-bold text-brand-navy">{{ $tour->min_pax }} Pax</span>
                        </div>
                        <div class="flex items-center justify-between py-1 border-b border-gray-50">
                            <span class="text-gray-500">Rating Pengunjung:</span>
                            <span class="font-bold text-amber-500"><i class="fa-solid fa-star"></i> {{ $tour->rating }} / 5.0</span>
                        </div>
                    </div>

                    <!-- Direct Booking Button WhatsApp -->
                    @php
                        $waPhone = $setting->phone_wa ?? '6281234567890';
                        $waText = urlencode("Halo Vayana Wisata, saya tertarik memesan paket wisata *" . $tour->title . "* (Harga: Rp " . number_format($tour->starting_price, 0, ',', '.') . "/orang). Mohon info ketersediaan tanggal & jalurnya.");
                    @endphp

                    <div class="space-y-3">
                        <a href="https://wa.me/{{ $waPhone }}?text={{ $waText }}" 
                           target="_blank" 
                           class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-extrabold py-4 px-6 rounded-2xl shadow-xl transition-all flex items-center justify-center gap-2 group transform hover:-translate-y-0.5">
                            <i class="fa-brands fa-whatsapp text-2xl group-hover:rotate-12 transition-transform"></i>
                            <span class="text-sm">Pesan Sekarang via WA</span>
                        </a>

                        <a href="https://wa.me/{{ $waPhone }}?text={{ urlencode('Halo Vayana Wisata, saya ingin konsultasi kustom trip untuk paket ' . $tour->title) }}" 
                           target="_blank" 
                           class="w-full bg-brand-cream hover:bg-brand-orange hover:text-white text-brand-navy font-bold py-3 px-4 rounded-2xl text-xs flex items-center justify-center gap-2 transition-all">
                            <i class="fa-solid fa-wand-magic-sparkles text-brand-orange"></i>
                            <span>Tanya / Kustomisasi Itinerari</span>
                        </a>
                    </div>

                    <!-- Trust Note -->
                    <div class="bg-brand-cream/50 p-3.5 rounded-2xl border border-brand-orange/15 text-[11px] text-gray-600 space-y-1">
                        <strong class="text-brand-navy font-bold block">💡 Fleksibilitas Tinggi</strong>
                        <p>Jadwal dan destinasi dapat disesuaikan dengan kebutuhan penerbangan Anda.</p>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

@endsection
