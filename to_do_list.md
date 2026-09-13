# 📝 Implementation Plan & To-Do List: Admin Panel PIDIDI Tour

Rencana implementasi **Admin Panel (Dashboard Manajemen Data)** untuk mengelola seluruh data website PIDIDI (Paket Wisata, Signature PIDIDI JOURNEY, Artikel Jurnal, Testimoni, Legalitas Perusahaan, & Pesan Masuk), Halaman Detail Paket Wisata + Galeri Foto, serta mengintegrasikan tampilan publik secara dinamis dari database.

---

## 🎯 Target Utama

1. Membantu Admin/Pengelola menginput, mengedit, dan menghapus seluruh konten website tanpa perlu menyentuh kode program.
2. Menyediakan **Halaman Detail Paket Wisata (`/paket-wisata/{slug}`)** yang lengkap dengan **Galeri Foto Tempat Wisata**, Rincian Itinerari Harian, Fasilitas Include/Exclude, serta tombol **"Pesan Sekarang" via WhatsApp** yang berisi pesan otomatis sesuai detail paket.
3. Menhubungkan seluruh Halaman Publik (`Home`, `Tentang Kami`, `Paket Wisata`, `Detail Paket Wisata`, `Jurnal`, `Testimoni`, `Kontak`, & `PIDIDI Journey`) ke database secara dinamis.
4. Menyediakan antarmuka Admin yang modern, bersih, dan **mobile-first** berkarakter warna PIDIDI (Navy & Orange).

---

## 📋 To-Do List Tahapan Pengerjaan

### Tahap 1: Database Schema & Models (`database/migrations`)

- [x] **Migration & Model `CompanySetting`**: Menyimpan identitas perusahaan, legalitas (NIB, NPWP, Rekening BRI), nomor WA, email, alamat, & link Google Maps.
- [x] **Migration & Model `Tour`**, `TourItinerary`, & `TourGallery`: Menyimpan katalog paket wisata (Judul, Slug, Kategori, Harga, Durasi, Badges, Foto Cover, Galeri Foto Multi-Images, Inclusions/Exclusions, & Rincian Itinerari Harian).
- [x] **Migration & Model `PididiJourney`**: Menyimpan data khusus Signature Package (Batch Dates, Kuota Small Group, Detail 5 Prinsip PIDIDI, & Konten _PIDIDI Journey Book_).
- [x] **Migration & Model `Article`**: Menyimpan artikel cerita desa & jurnal (Judul, Slug, Kategori, Penulis, Foto Cover, Waktu Baca, & Isi Artikel).
- [x] **Migration & Model `Testimonial`**: Menyimpan ulasan tamu (Nama, Kota, Avatar, Paket Wisata, Rating Bintang, & Isi Ulasan).
- [x] **Migration & Model `ContactInquiry`**: Menyimpan pesan masuk dari formulir kontak publik.
- [x] **Database Seeder**: Mengisi data awal (_initial dummy data_) komprehensif termasuk galeri foto & itinerari harian agar website publik langsung terisi data realistis.

---

### Tahap 2: Routing & Admin Controllers (`routes/web.php` & `app/Http/Controllers/Admin/`)

- [x] Config Admin Routing under `/admin` group prefix.
- [x] **`Admin\DashboardController`**: Menampilkan ringkasan statistik (Jumlah Paket, Artikel, Testimoni, & Pesan Masuk Baru).
- [x] **`Admin\CompanySettingController`**: Form manajemen profil perusahaan, legalitas, & kontak.
- [x] **`Admin\TourController`**: CRUD Paket Wisata, Galeri Foto Multi-Images, & Itinerari Harian.
- [x] **`Admin\PididiJourneyController`**: Form manajemen Signature Package _The Jogja You Haven't Met_.
- [x] **`Admin\ArticleController`**: CRUD Artikel Jurnal & Cerita Desa.
- [x] **`Admin\TestimonialController`**: CRUD Ulasan & Testimoni Tamu.
- [x] **`Admin\ContactInquiryController`**: Daftar & Detail Pesan Masuk dari Formulir Kontak.

---

### Tahap 3: Admin Layout & Views (`resources/views/admin/`)

- [x] **`layouts/admin.blade.php`**: Base Layout Admin Panel (Sidebar Nav, Header Bar, Mobile Drawer Toggle, Success/Error Flash Messages).
- [x] **`admin/dashboard.blade.php`**: Dashboard statistik & quick actions.
- [x] **`admin/settings/edit.blade.php`**: Form edit Legalitas & Profil Perusahaan.
- [x] **`admin/tours/index.blade.php`**, `create.blade.php`, `edit.blade.php`: Tabel & Form Input Paket Wisata (Support Input Galeri Foto & Itinerari).
- [x] **`admin/journey/edit.blade.php`**: Form pengeditan khusus Signature PIDIDI JOURNEY.
- [x] **`admin/articles/index.blade.php`**, `create.blade.php`, `edit.blade.php`: Manajemen Artikel.
- [x] **`admin/testimonials/index.blade.php`**, `create.blade.php`, `edit.blade.php`: Manajemen Testimoni.
- [x] **`admin/inquiries/index.blade.php`**: Tabel Pesan Masuk.

---

### Tahap 4: Halaman Publik & Detail Paket Wisata (`resources/views/pages/`)

- [x] **`pages/tour-detail.blade.php`**: Halaman Detail Paket Wisata Publik (`/paket-wisata/{slug}`) berisi:
  - Hero Cover Image & Header Info (Judul, Lokasi, Durasi, Rating, Badges).
  - **Galeri Foto Tempat Wisata & Aktivitas** (Grid Foto High-Res dengan preview).
  - Ringkasan Deskripsi & Tab Itinerari Harian Interaktif.
  - Box Fasilitas **Inclusions** & **Exclusions**.
  - Floating / Sticky Booking Card dengan tombol **"Pesan Sekarang via WhatsApp"** yang otomatis mengisi template pesan WA: `"Halo PIDIDI, saya tertarik pesan paket wisata [Judul] untuk [Jumlah] orang."`.
- [x] Update **`pages/home.blade.php`**: Mengambil data paket terfavorit, galeri foto, ulasan, & signature journey dari DB + link ke Detail Paket.
- [x] Update **`pages/about.blade.php`**: Mengambil data legalitas & profil PT dari DB.
- [x] Update **`pages/tours.blade.php`**: Mengambil katalog paket dari DB + link tiap card ke `/paket-wisata/{slug}`.
- [x] Update **`pages/blog.blade.php`**: Mengambil artikel dari DB.
- [x] Update **`pages/testimonials.blade.php`**: Mengambil ulasan tamu dari DB.
- [x] Update **`pages/contact.blade.php`**: Mengirim formulir ke DB `ContactInquiry`.

---

### Tahap 5: Verification & Compilation

- [x] Jalankan `php artisan migrate:fresh --seed` untuk menguji skema database & data seeder.
- [x] Jalankan `npm run build` untuk mengompilasi CSS/JS admin.
- [x] Jalankan `php artisan route:list` untuk memverifikasi seluruh route Admin, Publik, & Detail Paket Wisata.
