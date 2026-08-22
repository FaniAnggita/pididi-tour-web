Bertindaklah sebagai Senior Frontend Developer & UI/UX Specialist. Saya ingin kamu membuatkan struktur Frontend untuk website Company Profile & Travel Experience bernama "PIDIDI" (Pilih Destinasi, Dapat Inspirasi).

### 🛠️ TECH STACK:

- Framework: Laravel 13 (Blade Templates)
- CSS Framework: Tailwind CSS (Custom Color Configuration)
- Javascript: jQuery & Alpine.js (opsional untuk modal/interaksi simpel) + FontAwesome / Lucide Icons
- Scope: HANYA FRONTEND (Gunakan Mockup/Dummy Data di dalam Blade file)

### 🎨 BRAND GUIDELINES & DESIGN SYSTEM:

1. Palette Warna Utamanya:
    - Primary Orange: #FF5A00 (Energi, kehangatan, petualangan)
    - Electric Blue: #0057FF (Horizon, gelombang, kedalaman)
    - Background Cream/Off-White: #FFF4E6 (Hangat, otentik, ramah)
    - Dark Navy: #0D1B3D (Teks utama, footer, kesan profesional & eksklusif)
    - Warm Yellow: #FFC107 (Aksen playful, bintang review, badge)
2. Typography:
    - Font Utama: 'Montserrat', sans-serif (Bold untuk Header, Medium/Regular untuk Body)
3. Ciri Khas Visual (Vibe: Ceria, Berwarna, Playful, Premium & Otentik):
    - Elemen SVG Wave / Journey Line: Gunakan wave SVG divider antar-section yang dinamis (misal pemisah antara section cream dan navy).
    - Card Style: Rounded corners besar (`rounded-2xl` atau `rounded-3xl`), soft shadow (`shadow-md` ke `shadow-xl`), hover efek membal/bouncy (`hover:-translate-y-2 transition-all duration-300`).
    - Badge & Sticker: Gunakan pills/badge warna-warni yang imut dengan ikon lucu (contoh: "🌾 Village Life", "🥘 Taste Local", "🧘 Wellness", "📸 Photo Spot").

### 📐 STRUKTUR HALAMAN & ROUTING (BLADE TEMPLATES):

Buatkan susunan Blade view modular untuk halaman-halaman berikut:

1. `layouts/app.blade.php`:
    - Navbar Sticky: Logo PIDIDI (Teks Orange + Journey Line Blue SVG), menu navigasi (Home, Tentang Kami, Pengalaman Perjalanan, Jurnal, Testimoni, Kontak), tombol CTA "Hubungi Kami" berwarna Orange.
    - Footer: Background Dark Navy (`#0D1B3D`), logo PIDIDI versi terbalik (light), quick links, info legalitas, sosmed, dan aksen garis wave di atas footer.
    - Floating WhatsApp Button: Tombol hijau di pojok kiri/kanan bawah dengan animasi pulsa/bounce imut.

2. `pages/home.blade.php`:
    - Hero Section: Headline ceria "Pilih Destinasi, Dapat Inspirasi", latar belakang warna Cream (`#FFF4E6`) dengan elemen dekoratif wave melayang.
    - Search Filter Widget (jQuery-driven): Form filter pencarian melayang dengan dropdown Destinasi, Jenis Pengalaman, dan rentang budget.
    - Hook Section: Penjelasan singkat filosofi PIDIDI (bukan sekadar travel agent, tapi pembuat cerita).
    - Grid Paket Wisata (Signature & Essential): Card paket interaktif dengan harga dummy, durasi, lokasi, foto mockup Unsplash, dan badge ceria.
    - Section Why Us / Nilai Plus: 4 pilar (Pengalaman Bermakna, Komunitas Lokal, Ekonomi Kreatif, Cerita Otentik) dengan ikon warna-warni.
    - Testimoni Section: Slider/Grid bergaya Google Review (Bintang kuning, avatar, ulasan dari tamu).

3. `pages/about.blade.php`:
    - Cerita Brand & Visi Misi.
    - Komponen Card Legalitas Perusahaan (NIB, NPWP, Rekening Resmi Bank BRI) untuk kredibilitas.
    - Lokasi Kantor Utama.

4. `pages/tours.blade.php`:
    - Tab Filter berbasis jQuery/Tailwind (All, Curated Experience, Essential Trip, Bespoke/Custom).
    - Form kustom perjalanan "Rancang Trip Sendiri" (Bespoke Trip) yang interaktif.

5. `pages/blog.blade.php`:
    - Grid artikel cerita lokal/desa wisata dengan desain majalah yang bersih dan ceria.

6. `pages/testimonials.blade.php`:
    - Grid ulasan pelanggan lengkap dengan bintang review Google.

7. `pages/contact.blade.php`:
    - Info operasional, tombol WhatsApp besar, dan embed Google Maps.

### 💡 INTERAKSI JQUERY & FITUR PLAYFUL (TOLONG IMPLEMENTASIKAN):

1. Smooth Scroll untuk navigasi anchor.
2. Interactive Filter/Tab di halaman Tours & Blog (sembunyikan/tampilkan card berdasarkan kriteria tanpa reload).
3. Hover Animation: Card agak terangkat dan muncul subtle glow warna Electric Blue/Orange.
4. Micro-copy / Tooltip imut ketika mouse diarahkan ke badge tertentu.

Tolong kembangkan struktur file Blade dan kode Tailwind CSS-nya agar rapi, modern, dan langsung bisa dites secara visual!
