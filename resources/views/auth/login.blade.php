<!DOCTYPE html>
<html lang="id" class="h-full bg-brand-navy">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | Vayana Wisata</title>

    <!-- Google Fonts: Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full font-sans antialiased text-brand-navy selection:bg-brand-orange selection:text-white flex items-center justify-center relative overflow-hidden bg-gradient-to-br from-brand-navy via-slate-900 to-brand-navy">

    <!-- Background Decorative Lighting Accents -->
    <div class="absolute -top-32 -left-32 w-96 h-96 bg-brand-orange/20 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-brand-blue/20 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-amber-500/5 rounded-full blur-3xl pointer-events-none"></div>

    <div class="w-full max-w-md px-4 sm:px-6 relative z-10 my-8" x-data="{ showPassword: false }">

        <!-- Header Brand Logo -->
        <div class="text-center mb-8">
            <a href="{{ route('home') }}" class="inline-block hover:scale-105 transition-transform duration-300">
                <x-logo variant="light" size="lg" :showTagline="true" />
            </a>
            <p class="text-gray-300 text-xs font-semibold mt-3 tracking-wider uppercase">Portal Admin Vayana Wisata</p>
        </div>

        <!-- Glassmorphism Login Card -->
        <div class="bg-white/95 backdrop-blur-xl rounded-3xl p-6 sm:p-8 shadow-2xl border border-white/20">

            <div class="mb-6 text-center">
                <h1 class="text-2xl font-black text-brand-navy">Masuk Akun</h1>
                <p class="text-xs text-gray-500 mt-1">Masukkan kredensial admin Anda untuk mengakses dasbor.</p>
            </div>

            <!-- Flash Error Message -->
            @if(session('error'))
                <div class="mb-5 bg-rose-50 border border-rose-200 text-rose-700 px-4 py-3 rounded-2xl text-xs flex items-center gap-2 font-medium">
                    <i class="fa-solid fa-circle-exclamation text-rose-500 text-sm shrink-0"></i>
                    <span>{{ session('error') }}</span>
                </div>
            @endif

            @if(session('success'))
                <div class="mb-5 bg-emerald-50 border border-emerald-200 text-emerald-700 px-4 py-3 rounded-2xl text-xs flex items-center gap-2 font-medium">
                    <i class="fa-solid fa-circle-check text-emerald-500 text-sm shrink-0"></i>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST" class="space-y-5">
                @csrf

                <!-- Email Input Field -->
                <div>
                    <label for="email" class="block text-xs font-bold text-gray-700 mb-1.5">
                        <i class="fa-solid fa-envelope text-brand-orange mr-1"></i> Alamat Email
                    </label>
                    <div class="relative">
                        <input type="email" 
                               id="email" 
                               name="email" 
                               value="{{ old('email') }}" 
                               required 
                               autofocus
                               placeholder="Masukkan alamat email"
                               class="w-full bg-slate-50 border @error('email') border-rose-500 focus:ring-rose-500 @else border-gray-200 focus:ring-brand-orange focus:border-brand-orange @enderror rounded-2xl px-4 py-3 text-sm font-semibold text-brand-navy placeholder:text-gray-400 focus:outline-none focus:ring-2 transition-all">
                    </div>
                    @error('email')
                        <p class="text-rose-500 text-[11px] font-semibold mt-1 flex items-center gap-1">
                            <i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Password Input Field -->
                <div>
                    <label for="password" class="block text-xs font-bold text-gray-700 mb-1.5">
                        <i class="fa-solid fa-lock text-brand-orange mr-1"></i> Password
                    </label>
                    <div class="relative">
                        <input :type="showPassword ? 'text' : 'password'" 
                               id="password" 
                               name="password" 
                               required 
                               placeholder="••••••••"
                               class="w-full bg-slate-50 border @error('password') border-rose-500 focus:ring-rose-500 @else border-gray-200 focus:ring-brand-orange focus:border-brand-orange @enderror rounded-2xl pl-4 pr-11 py-3 text-sm font-semibold text-brand-navy placeholder:text-gray-400 focus:outline-none focus:ring-2 transition-all">
                        
                        <button type="button" 
                                @click="showPassword = !showPassword" 
                                class="absolute right-3.5 top-1/2 -translate-y-1/2 text-gray-400 hover:text-brand-orange text-sm focus:outline-none">
                            <i class="fa-solid" :class="showPassword ? 'fa-eye-slash' : 'fa-eye'"></i>
                        </button>
                    </div>
                    @error('password')
                        <p class="text-rose-500 text-[11px] font-semibold mt-1 flex items-center gap-1">
                            <i class="fa-solid fa-triangle-exclamation"></i> {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between text-xs">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" 
                               name="remember" 
                               class="w-4 h-4 text-brand-orange border-gray-300 rounded focus:ring-brand-orange cursor-pointer">
                        <span class="font-medium text-gray-600">Ingat Saya</span>
                    </label>
                </div>

                <!-- Submit Button -->
                <button type="submit" 
                        class="w-full bg-gradient-to-r from-brand-orange to-amber-500 hover:from-orange-600 hover:to-amber-600 text-white font-extrabold text-sm py-3.5 px-4 rounded-2xl shadow-xl shadow-orange-500/25 transition-all duration-300 flex items-center justify-center gap-2 transform active:scale-95">
                    <i class="fa-solid fa-right-to-bracket"></i>
                    <span>Masuk ke Dashboard</span>
                </button>
            </form>

        </div>

        <!-- Footer Back Link -->
        <div class="text-center mt-6">
            <a href="{{ route('home') }}" class="text-xs font-bold text-gray-300 hover:text-white transition-colors flex items-center justify-center gap-1.5">
                <i class="fa-solid fa-arrow-left"></i>
                <span>Kembali ke Website Utama</span>
            </a>
        </div>

    </div>

</body>
</html>
