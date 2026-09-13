<!DOCTYPE html>
<html lang="id" class="h-full bg-slate-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') | Vayana Wisata</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- jQuery & Alpine.js -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full text-brand-navy antialiased font-sans" x-data="{ sidebarOpen: false }">

    <div class="min-h-screen flex flex-col md:flex-row">
        
        <!-- Mobile Sidebar Overlay -->
        <div x-show="sidebarOpen" 
             @click="sidebarOpen = false" 
             class="fixed inset-0 z-40 bg-gray-900/50 backdrop-blur-sm md:hidden"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0">
        </div>

        <!-- Sidebar Navigation -->
        <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
               class="fixed inset-y-0 left-0 z-50 w-64 bg-brand-navy text-white flex flex-col transition-transform duration-300 md:translate-x-0 md:static shrink-0 border-r border-white/10">
            
            <!-- Sidebar Header / Brand -->
            <div class="p-6 border-b border-white/10 flex items-center justify-between">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2">
                    <x-logo variant="light" size="sm" />
                </a>
                <button @click="sidebarOpen = false" class="md:hidden text-gray-400 hover:text-white">
                    <i class="fa-solid fa-xmark text-xl"></i>
                </button>
            </div>

            <!-- Admin Badge -->
            <div class="px-6 py-3 bg-brand-light-navy border-b border-white/10 flex items-center justify-between">
                <span class="text-[11px] font-bold text-amber-300 uppercase tracking-wider">Dashboard Admin</span>
                <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
            </div>

            <!-- Sidebar Links -->
            <nav class="flex-grow p-4 space-y-1 overflow-y-auto text-xs font-bold">
                <a href="{{ route('admin.dashboard') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-xl transition-colors {{ request()->routeIs('admin.dashboard') ? 'bg-brand-orange text-white' : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">
                    <i class="fa-solid fa-chart-pie w-5 text-base"></i> Dashboard Utama
                </a>

                <a href="{{ route('admin.tours.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-xs font-bold transition-all {{ request()->routeIs('admin.tours.*') ? 'bg-brand-orange text-white shadow-lg' : 'hover:bg-white/10 text-gray-300' }}">
                    <i class="fa-solid fa-map-location-dot text-base"></i>
                    <span>Paket Wisata</span>
                </a>

                <a href="{{ route('admin.destinations.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-xs font-bold transition-all {{ request()->routeIs('admin.destinations.*') ? 'bg-brand-orange text-white shadow-lg' : 'hover:bg-white/10 text-gray-300' }}">
                    <i class="fa-solid fa-location-dot text-base"></i>
                    <span>Destinasi Wisata</span>
                </a>

                <a href="{{ route('admin.categories.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-xs font-bold transition-all {{ request()->routeIs('admin.categories.*') ? 'bg-brand-orange text-white shadow-lg' : 'hover:bg-white/10 text-gray-300' }}">
                    <i class="fa-solid fa-tags text-base"></i>
                    <span>Kategori Wisata</span>
                </a>

            <a href="{{ route('admin.journey.edit') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-xs font-bold transition-all {{ request()->routeIs('admin.journey.*') ? 'bg-brand-orange text-white shadow-lg' : 'hover:bg-white/10 text-gray-300' }}">

                    <i class="fa-solid fa-compass w-5 text-base"></i> Vayana Journey (Signature)
                </a>

                <a href="{{ route('admin.articles.index') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-xl transition-colors {{ request()->routeIs('admin.articles.*') ? 'bg-brand-orange text-white' : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">
                    <i class="fa-solid fa-book-open w-5 text-base"></i> Jurnal & Artikel
                </a>

                <a href="{{ route('admin.testimonials.index') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-xl transition-colors {{ request()->routeIs('admin.testimonials.*') ? 'bg-brand-orange text-white' : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">
                    <i class="fa-solid fa-star w-5 text-base"></i> Ulasan & Testimoni
                </a>

                <a href="{{ route('admin.inquiries.index') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-xl transition-colors {{ request()->routeIs('admin.inquiries.*') ? 'bg-brand-orange text-white' : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">
                    <i class="fa-solid fa-envelope w-5 text-base"></i> Pesan Masuk
                </a>

                <a href="{{ route('admin.settings.edit') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-xl transition-colors {{ request()->routeIs('admin.settings.*') ? 'bg-brand-orange text-white' : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">
                    <i class="fa-solid fa-building-columns w-5 text-base"></i> Legalitas & Profil PT
                </a>
            </nav>

            <!-- Sidebar Footer -->
            <div class="p-4 border-t border-white/10">
                <a href="{{ route('home') }}" target="_blank" class="w-full bg-white/10 hover:bg-white/20 text-white font-bold py-2.5 px-4 rounded-xl text-xs flex items-center justify-center gap-2 transition-all">
                    <i class="fa-solid fa-globe"></i> Lihat Website Publik
                </a>
            </div>

        </aside>

        <!-- Main Workspace Area -->
        <div class="flex-grow flex flex-col min-w-0 overflow-x-hidden">
            
            <!-- Top App Bar -->
            <header class="bg-white border-b border-gray-200 px-4 py-3.5 flex items-center justify-between sticky top-0 z-30 shadow-sm">
                <div class="flex items-center gap-3">
                    <button @click="sidebarOpen = true" class="md:hidden text-brand-navy p-2 rounded-lg hover:bg-gray-100">
                        <i class="fa-solid fa-bars text-xl"></i>
                    </button>
                    <h1 class="text-lg font-bold text-brand-navy">@yield('page-title', 'Dashboard')</h1>
                </div>

                <div class="flex items-center gap-3">
                    <div class="text-right hidden sm:block">
                        <p class="text-xs font-bold text-brand-navy">{{ Auth::user()->name ?? 'Admin Vayana' }}</p>
                        <p class="text-[10px] text-gray-500">{{ Auth::user()->email ?? 'admin@vayana.com' }}</p>
                    </div>
                    <div class="w-9 h-9 rounded-full bg-brand-orange text-white flex items-center justify-center font-bold text-sm shadow">
                        {{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 1)) }}
                    </div>

                    <!-- Logout Button -->
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" 
                                class="bg-rose-50 hover:bg-rose-100 text-rose-600 border border-rose-200 text-xs font-bold px-3 py-2 rounded-xl transition-colors flex items-center gap-1.5 ml-2"
                                title="Keluar dari Akun">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <span class="hidden sm:inline">Logout</span>
                        </button>
                    </form>
                </div>
            </header>

            <!-- Page Content -->
            <main class="p-4 sm:p-6 lg:p-8 flex-grow">
                
                <!-- Flash Notification Messages -->
                @if(session('success'))
                    <div class="mb-6 bg-emerald-50 border border-emerald-300 text-emerald-800 p-4 rounded-2xl flex items-center justify-between text-sm shadow-sm">
                        <div class="flex items-center gap-3 font-semibold">
                            <i class="fa-solid fa-circle-check text-emerald-500 text-lg"></i>
                            <span>{{ session('success') }}</span>
                        </div>
                        <button onclick="this.parentElement.remove()" class="text-emerald-500 hover:text-emerald-800"><i class="fa-solid fa-xmark"></i></button>
                    </div>
                @endif

                @if(session('error'))
                    <div class="mb-6 bg-rose-50 border border-rose-300 text-rose-800 p-4 rounded-2xl flex items-center justify-between text-sm shadow-sm">
                        <div class="flex items-center gap-3 font-semibold">
                            <i class="fa-solid fa-circle-exclamation text-rose-500 text-lg"></i>
                            <span>{{ session('error') }}</span>
                        </div>
                        <button onclick="this.parentElement.remove()" class="text-rose-500 hover:text-rose-800"><i class="fa-solid fa-xmark"></i></button>
                    </div>
                @endif

                @yield('content')
            </main>

        </div>

    </div>

    @stack('scripts')
</body>
</html>
