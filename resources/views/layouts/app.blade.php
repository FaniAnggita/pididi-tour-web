<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'PIDIDI - Pilih Destinasi, Dapat Inspirasi') | Travel Around Indonesia</title>
    <meta name="description" content="PIDIDI adalah penyedia pengalaman perjalanan otentik di Indonesia. Pilih Destinasi, Dapat Inspirasi dengan curated trip, village life, dan bespoke travel experience.">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('logo_pididi.png') }}">

    <!-- Google Fonts: Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-brand-cream text-brand-navy font-sans min-h-screen flex flex-col antialiased selection:bg-brand-orange selection:text-white">

    <!-- Sticky Navbar Header -->
    <header x-data="{ mobileMenuOpen: false, scrolled: false }"
            @scroll.window="scrolled = (window.pageYOffset > 20)"
            :class="scrolled ? 'bg-white/95 backdrop-blur-md shadow-md py-3' : 'bg-brand-cream/90 backdrop-blur-sm py-4'"
            class="sticky top-0 z-50 transition-all duration-300 border-b border-brand-orange/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-2 group transition-transform duration-300 hover:scale-105">
                    <x-logo size="md" />
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden md:flex items-center space-x-1 lg:space-x-2">
                    <a href="{{ route('home') }}" 
                       class="px-3 py-2 rounded-full text-sm font-bold transition-all duration-200 {{ request()->routeIs('home') ? 'bg-brand-orange text-white shadow-sm' : 'text-brand-navy hover:text-brand-orange hover:bg-white/60' }}">
                       Home
                    </a>
                    <a href="{{ route('about') }}" 
                       class="px-3 py-2 rounded-full text-sm font-bold transition-all duration-200 {{ request()->routeIs('about') ? 'bg-brand-orange text-white shadow-sm' : 'text-brand-navy hover:text-brand-orange hover:bg-white/60' }}">
                       Tentang Kami
                    </a>
                    <a href="{{ route('tours') }}" 
                       class="px-3 py-2 rounded-full text-sm font-bold transition-all duration-200 {{ request()->routeIs('tours') ? 'bg-brand-orange text-white shadow-sm' : 'text-brand-navy hover:text-brand-orange hover:bg-white/60' }}">
                       Paket Wisata
                    </a>
                    <a href="{{ route('blog') }}" 
                       class="px-3 py-2 rounded-full text-sm font-bold transition-all duration-200 {{ request()->routeIs('blog') ? 'bg-brand-orange text-white shadow-sm' : 'text-brand-navy hover:text-brand-orange hover:bg-white/60' }}">
                       Jurnal
                    </a>
                    <a href="{{ route('testimonials') }}" 
                       class="px-3 py-2 rounded-full text-sm font-bold transition-all duration-200 {{ request()->routeIs('testimonials') ? 'bg-brand-orange text-white shadow-sm' : 'text-brand-navy hover:text-brand-orange hover:bg-white/60' }}">
                       Testimoni
                    </a>
                    <a href="{{ route('contact') }}" 
                       class="px-3 py-2 rounded-full text-sm font-bold transition-all duration-200 {{ request()->routeIs('contact') ? 'bg-brand-orange text-white shadow-sm' : 'text-brand-navy hover:text-brand-orange hover:bg-white/60' }}">
                       Kontak
                    </a>
                </nav>

                <!-- Desktop CTA Button -->
                <div class="hidden md:flex items-center">
                    <a href="https://wa.me/6282231872974?text=Halo%20PIDIDI,%20saya%20ingin%20konsultasi%20paket%20wisata" 
                       target="_blank"
                       class="bg-brand-orange hover:bg-orange-600 text-white font-bold px-5 py-2.5 rounded-full shadow-lg hover:shadow-orange-500/30 transition-all duration-300 flex items-center gap-2 transform hover:-translate-y-0.5 active:translate-y-0">
                        <i class="fa-brands fa-whatsapp text-lg"></i>
                        <span>Hubungi Kami</span>
                    </a>
                </div>

                <!-- Mobile Menu Hamburger Button -->
                <div class="flex md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" 
                            type="button" 
                            class="p-2.5 rounded-xl text-brand-navy hover:bg-brand-orange/10 focus:outline-none transition-colors"
                            aria-label="Toggle Menu">
                        <i class="fa-solid" :class="mobileMenuOpen ? 'fa-xmark text-2xl' : 'fa-bars text-2xl'"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Drawer Navigation -->
        <div x-show="mobileMenuOpen" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 -translate-y-4 scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 scale-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0 scale-100"
             x-transition:leave-end="opacity-0 -translate-y-4 scale-95"
             class="md:hidden bg-white border-b border-brand-orange/20 shadow-xl px-4 pt-3 pb-6 mt-2 rounded-b-3xl">
            <div class="flex flex-col space-y-2">
                <a href="{{ route('home') }}" 
                   @click="mobileMenuOpen = false"
                   class="px-4 py-3 rounded-2xl font-bold flex items-center gap-3 {{ request()->routeIs('home') ? 'bg-brand-cream text-brand-orange' : 'text-brand-navy hover:bg-brand-cream/50' }}">
                    <i class="fa-solid fa-house w-5 text-brand-blue"></i> Home
                </a>
                <a href="{{ route('about') }}" 
                   @click="mobileMenuOpen = false"
                   class="px-4 py-3 rounded-2xl font-bold flex items-center gap-3 {{ request()->routeIs('about') ? 'bg-brand-cream text-brand-orange' : 'text-brand-navy hover:bg-brand-cream/50' }}">
                    <i class="fa-solid fa-compass w-5 text-brand-blue"></i> Tentang Kami
                </a>
                <a href="{{ route('tours') }}" 
                   @click="mobileMenuOpen = false"
                   class="px-4 py-3 rounded-2xl font-bold flex items-center gap-3 {{ request()->routeIs('tours') ? 'bg-brand-cream text-brand-orange' : 'text-brand-navy hover:bg-brand-cream/50' }}">
                    <i class="fa-solid fa-map-location-dot w-5 text-brand-blue"></i> Paket Wisata
                </a>
                <a href="{{ route('blog') }}" 
                   @click="mobileMenuOpen = false"
                   class="px-4 py-3 rounded-2xl font-bold flex items-center gap-3 {{ request()->routeIs('blog') ? 'bg-brand-cream text-brand-orange' : 'text-brand-navy hover:bg-brand-cream/50' }}">
                    <i class="fa-solid fa-book-open w-5 text-brand-blue"></i> Jurnal
                </a>
                <a href="{{ route('testimonials') }}" 
                   @click="mobileMenuOpen = false"
                   class="px-4 py-3 rounded-2xl font-bold flex items-center gap-3 {{ request()->routeIs('testimonials') ? 'bg-brand-cream text-brand-orange' : 'text-brand-navy hover:bg-brand-cream/50' }}">
                    <i class="fa-solid fa-star w-5 text-brand-yellow"></i> Testimoni
                </a>
                <a href="{{ route('contact') }}" 
                   @click="mobileMenuOpen = false"
                   class="px-4 py-3 rounded-2xl font-bold flex items-center gap-3 {{ request()->routeIs('contact') ? 'bg-brand-cream text-brand-orange' : 'text-brand-navy hover:bg-brand-cream/50' }}">
                    <i class="fa-solid fa-envelope w-5 text-brand-blue"></i> Kontak
                </a>

                <div class="pt-3">
                    <a href="https://wa.me/6282231872974?text=Halo%20PIDIDI,%20saya%20ingin%20konsultasi%20paket%20wisata" 
                       target="_blank"
                       class="w-full bg-brand-orange hover:bg-orange-600 text-white font-bold py-3 px-4 rounded-2xl shadow-lg flex items-center justify-center gap-2 transition-all">
                        <i class="fa-brands fa-whatsapp text-xl"></i>
                        <span>Hubungi Kami via WhatsApp</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer Section -->
    <footer class="bg-brand-navy text-white relative mt-20 pt-16 pb-12 overflow-hidden">
        <!-- Top Wave Accent SVG Divider -->
        <div class="absolute top-0 left-0 right-0 overflow-hidden leading-none z-10 -translate-y-[99%]">
            <svg class="relative block w-full h-12 md:h-20" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0 C150,90 350,-40 500,40 C650,120 900,10 1200,60 L1200,120 L0,120 Z" fill="#0D1B3D"></path>
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10">
                
                <!-- Col 1: Brand Info & Social -->
                <div class="lg:col-span-5 space-y-5">
                    <x-logo variant="light" size="lg" :showTagline="true" />
                    <p class="text-gray-300 text-sm leading-relaxed max-w-md pt-1">
                        Pilih Destinasi, Dapat Inspirasi. PIDIDI menciptakan pengalaman perjalanan otentik yang menghubungkan Anda dengan keindahan alam, budaya lokal, dan cerita bermakna di seluruh nusantara.
                    </p>
                    <div class="flex items-center space-x-3 pt-2">
                        <a href="https://instagram.com" target="_blank" aria-label="Instagram" class="w-10 h-10 rounded-xl bg-white/10 hover:bg-brand-orange flex items-center justify-center text-white transition-all duration-300 transform hover:scale-110 hover:shadow-lg hover:shadow-orange-500/30">
                            <i class="fa-brands fa-instagram text-lg"></i>
                        </a>
                        <a href="https://facebook.com" target="_blank" aria-label="Facebook" class="w-10 h-10 rounded-xl bg-white/10 hover:bg-brand-orange flex items-center justify-center text-white transition-all duration-300 transform hover:scale-110 hover:shadow-lg hover:shadow-orange-500/30">
                            <i class="fa-brands fa-facebook-f text-lg"></i>
                        </a>
                        <a href="https://tiktok.com" target="_blank" aria-label="TikTok" class="w-10 h-10 rounded-xl bg-white/10 hover:bg-brand-orange flex items-center justify-center text-white transition-all duration-300 transform hover:scale-110 hover:shadow-lg hover:shadow-orange-500/30">
                            <i class="fa-brands fa-tiktok text-lg"></i>
                        </a>
                        <a href="https://youtube.com" target="_blank" aria-label="YouTube" class="w-10 h-10 rounded-xl bg-white/10 hover:bg-brand-orange flex items-center justify-center text-white transition-all duration-300 transform hover:scale-110 hover:shadow-lg hover:shadow-orange-500/30">
                            <i class="fa-brands fa-youtube text-lg"></i>
                        </a>
                    </div>
                </div>

                <!-- Col 2: Quick Links -->
                <div class="lg:col-span-3 space-y-4">
                    <h3 class="text-base font-black text-amber-300 border-b border-white/10 pb-2.5 tracking-wider uppercase">Jelajahi PIDIDI</h3>
                    <ul class="space-y-2.5 text-sm text-gray-300">
                        <li><a href="{{ route('home') }}" class="hover:text-brand-orange transition-colors flex items-center gap-2.5"><i class="fa-solid fa-chevron-right text-xs text-brand-orange"></i> Beranda</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-brand-orange transition-colors flex items-center gap-2.5"><i class="fa-solid fa-chevron-right text-xs text-brand-orange"></i> Tentang Kami</a></li>
                        <li><a href="{{ route('tours') }}" class="hover:text-brand-orange transition-colors flex items-center gap-2.5"><i class="fa-solid fa-chevron-right text-xs text-brand-orange"></i> Curated Experience</a></li>
                        <li><a href="{{ route('tours') }}#bespoke" class="hover:text-brand-orange transition-colors flex items-center gap-2.5"><i class="fa-solid fa-chevron-right text-xs text-brand-orange"></i> Bespoke Trip (Custom)</a></li>
                        <li><a href="{{ route('blog') }}" class="hover:text-brand-orange transition-colors flex items-center gap-2.5"><i class="fa-solid fa-chevron-right text-xs text-brand-orange"></i> Jurnal Perjalanan</a></li>
                        <li><a href="{{ route('testimonials') }}" class="hover:text-brand-orange transition-colors flex items-center gap-2.5"><i class="fa-solid fa-chevron-right text-xs text-brand-orange"></i> Ulasan Tamu</a></li>
                    </ul>
                </div>

                <!-- Col 3: Contact & Direct WhatsApp Card -->
                <div class="lg:col-span-4 space-y-4">
                    <h3 class="text-base font-black text-amber-300 border-b border-white/10 pb-2.5 tracking-wider uppercase">Hubungi Kami</h3>
                    <div class="bg-white/5 backdrop-blur-md p-5 rounded-3xl border border-white/10 space-y-3 text-xs text-gray-300 shadow-xl">
                        <div class="flex items-start gap-3">
                            <div class="w-7 h-7 rounded-lg bg-brand-orange/20 flex items-center justify-center text-brand-orange shrink-0 mt-0.5">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <span>Jl. Danau Toba No. 45, Sanur, Denpasar Selatan, Bali 80228</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-7 h-7 rounded-lg bg-brand-orange/20 flex items-center justify-center text-brand-orange shrink-0">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <span class="font-bold text-white text-sm">+62 822-3187-2974</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-7 h-7 rounded-lg bg-brand-orange/20 flex items-center justify-center text-brand-orange shrink-0">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <span>hello@pididitour.com</span>
                        </div>
                        <div class="flex items-center gap-3 text-emerald-400 font-semibold pt-1 border-t border-white/10">
                            <i class="fa-solid fa-clock text-xs"></i>
                            <span>Senin - Sabtu: 08.00 - 18.00 WITA</span>
                        </div>
                        <a href="https://wa.me/6282231872974?text=Halo%20PIDIDI,%20saya%20ingin%20konsultasi%20paket%20wisata" 
                           target="_blank" 
                           class="w-full bg-gradient-to-r from-emerald-500 to-teal-600 hover:from-emerald-600 hover:to-teal-700 text-white font-bold py-2.5 px-4 rounded-xl shadow-lg flex items-center justify-center gap-2 transition-all transform active:scale-95">
                            <i class="fa-brands fa-whatsapp text-base"></i>
                            <span>Konsultasi via WhatsApp</span>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Bottom Copyright -->
            <div class="mt-12 pt-8 border-t border-white/10 text-center text-xs text-gray-400 flex flex-col md:flex-row items-center justify-between gap-4">
                <p>&copy; {{ date('Y') }} <strong>PIDIDI TOUR</strong>. All rights reserved. Made with <i class="fa-solid fa-heart text-rose-500 mx-1"></i> for Travel Around Indonesia.</p>
                <div class="flex items-center space-x-4">
                    <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                    <span>•</span>
                    <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                    <span>•</span>
                    <a href="#" class="hover:text-white transition-colors">FAQ</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/6282231872974?text=Halo%20PIDIDI,%20saya%20ingin%20tanya%20paket%20wisata!" 
       target="_blank"
       aria-label="Chat WhatsApp PIDIDI"
       class="fixed bottom-6 right-6 z-50 bg-emerald-500 hover:bg-emerald-600 text-white w-14 h-14 md:w-16 md:h-16 rounded-full flex items-center justify-center shadow-2xl transition-all duration-300 animate-wa-pulse hover:scale-110 group">
        <i class="fa-brands fa-whatsapp text-3xl md:text-4xl group-hover:rotate-12 transition-transform"></i>
        <!-- Tooltip Badge -->
        <span class="absolute right-full mr-3 bg-brand-navy text-white text-xs font-bold px-3 py-1.5 rounded-xl shadow-lg whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none border border-emerald-400/30 flex items-center gap-1.5">
            <i class="fa-solid fa-comments text-emerald-400"></i> Tanya Mas PIDIDI!
        </span>
    </a>

    <!-- Custom Script for Global Interactivity -->
    <script>
        $(document).ready(function() {
            // Smooth Scroll for local anchor links
            $('a[href^="#"]').on('click', function(event) {
                var target = $(this.getAttribute('href'));
                if( target.length ) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top - 80
                    }, 600);
                }
            });
        });
    </script>
    @stack('scripts')
</body>
</html>
