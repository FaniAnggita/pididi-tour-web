<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\CompanySetting;
use App\Models\Tour;
use App\Models\TourItinerary;
use App\Models\TourGallery;
use App\Models\PididiJourney;
use App\Models\Article;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Admin User
        User::firstOrCreate(
            ['email' => 'admin@vayanawisata.com'],
            [
                'name' => 'Admin Vayana',
                'password' => bcrypt('password123'),
            ]
        );

        // 0. Seed Tour Categories
        $categories = [
            [
                'name' => 'Curated Experience',
                'slug' => 'curated',
                'icon' => '🌾',
                'description' => 'Pengalaman otentik bersama warga lokal & pemandu berpengalaman',
            ],
            [
                'name' => 'Essential Trip',
                'slug' => 'essential',
                'icon' => '🚀',
                'description' => 'Perjalanan populer ke destinasi-destinasi terbaik Indonesia',
            ],
            [
                'name' => 'Bespoke Custom',
                'slug' => 'bespoke',
                'icon' => '🎨',
                'description' => 'Trip khusus sesuai permintaan dan alur kustomisasi',
            ],
            [
                'name' => 'Cultural Heritage',
                'slug' => 'cultural',
                'icon' => '🏛️',
                'description' => 'Jelajah situs cagar budaya, sejarah, dan seni tradisi',
            ],
            [
                'name' => 'Nature & Adventure',
                'slug' => 'nature',
                'icon' => '⛰️',
                'description' => 'Trekking alam, pantai, laut, dan wisata petualangan',
            ],
        ];

        foreach ($categories as $cat) {
            \App\Models\TourCategory::updateOrCreate(['slug' => $cat['slug']], $cat);
        }

        // 2. Company Setting Initial Data
        CompanySetting::create([
            'company_name' => 'PT VAYANA WISATA INDONESIA',
            'nib' => '9120304958102',
            'npwp' => '74.893.102.4-501.000',
            'bank_name' => 'Bank BRI',
            'bank_account_number' => '0341-01-001928-56-7',
            'bank_account_holder' => 'PT VAYANA WISATA INDONESIA',
            'office_address' => 'Jl. Danau Toba No. 45, Sanur, Denpasar Selatan, Bali 80228',
            'operational_hours' => 'Senin - Sabtu: 08.00 - 18.00 WITA',
            'phone_wa' => '6281234567890',
            'email' => 'hello@vayanawisata.com',
            'google_maps_iframe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.026720516407!2d115.2570020147844!3d-8.68943269375704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2419a4e3df5ad%3A0x6a05e836b7b25203!2sSanur%2C%20Denpasar%20City%2C%20Bali!5e0!3m2!1sen!2sid!4v1680000000000!5m2!1sen!2sid',
            'tagline' => 'Lebih dari Sekadar Perjalanan',
            'bio' => 'Vayana Wisata adalah penyedia pengalaman perjalanan otentik berbasis budaya dan pemberdayaan masyarakat lokal di Indonesia.',
        ]);

        // 3. Signature Vayana Journey Package Initial Data
        PididiJourney::create([
            'title' => 'THE JOGJA YOU HAVEN\'T MET',
            'tagline' => 'Datang sebagai wisatawan. Pulang membawa cerita.',
            'theme' => 'Menemukan Jogja melalui manusia, karya, rasa, dan cerita.',
            'min_pax' => 8,
            'max_pax' => 12,
            'price' => 3650000,
            'duration' => '3 Days 2 Nights',
            'batch_schedule_info' => 'Batch 1: 12-14 September 2026 | Batch 2: 10-12 Oktober 2026',
            'principles_content' => [
                'MEET' => 'Bertemu manusia & storyteller lokal.',
                'EXPERIENCE' => 'Mencoba memasak & berkarya tangan bersama artisan.',
                'UNDERSTAND' => 'Memahami cerita di balik desa & ekonomi lokal.',
                'CONNECT' => 'Terhubung hangat dalam Vayana Conversation & Circle Talk.',
                'INSPIRE' => 'Pulang membawa Vayana Journey Book, karya tangan, & voucher UMKM.',
            ],
            'journey_book_info' => 'Setiap peserta mendapatkan buku fisik Vayana Journey Book berisi peta perjalanan, kisah lokal, & lembar refleksi.',
            'voucher_info' => 'Bonus Vayana Voucher untuk berbelanja kerajinan, kopi, dan makanan dari UMKM desa mitra.',
            'is_active' => true,
        ]);

        // 4. Tour Packages Data
        $t1 = Tour::create([
            'title' => 'Ubud Cultural & Authentic Village Life',
            'slug' => 'ubud-cultural-authentic-village-life',
            'category' => 'curated',
            'duration' => '4H 3M',
            'location' => 'Ubud & Sidemen, Bali',
            'starting_price' => 3850000,
            'min_pax' => 2,
            'rating' => 4.9,
            'reviews_count' => 128,
            'highlight_badges' => ['🌾 Village Life', '🧘 Wellness', '📸 Photo Spot'],
            'cover_image' => 'https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=800&q=80',
            'short_description' => 'Tinggal bersama warga lokal Ubud & Sidemen, belajar membuat banten tradisional, dan jelajah persawahan hijau Tegallalang.',
            'full_description' => 'Nikmati liburan di Bali dengan sudut pandang berbeda. Kami mengajak Anda tinggal di homestay pedesaan otentik, memetik sayur organik, belajar menenun kain tenun ikats Sidemen, serta meditasi pagi berlatar pemandangan Gunung Agung.',
            'inclusions' => ['Penginapan Boutique Homestay 3 malam', 'Makan pagi, siang, dan malam kuliner khas lokal', 'Pemandu wisata storyteller lokal', 'Seluruh tiket masuk & workshop kerajinan', 'Transportasi AC privat'],
            'exclusions' => ['Tiket pesawat PP ke Bali', 'Pengeluaran pribadi & belanja souvenir', 'Tipping untuk guide & driver'],
            'is_featured' => true,
        ]);

        TourItinerary::create(['tour_id' => $t1->id, 'day_number' => 1, 'title' => 'Penjemputan & Welcome Dinner di Desa Sidemen', 'description' => 'Penjemputan di Bandara Ngurah Rai, perjalanan menuju Sidemen, dan welcome dinner makanan khas Bali bersama kepala desa.']);
        TourItinerary::create(['tour_id' => $t1->id, 'day_number' => 2, 'title' => 'Trekking Sawah & Workshop Tenun Ikat', 'description' => 'Trekking pagi menyusuri terasering sawah, belajar teknik tenun tradisional dari seniman lokal, dan makan siang di pinggir sungai.']);
        TourItinerary::create(['tour_id' => $t1->id, 'day_number' => 3, 'title' => 'Memasak Kuliner Bali & Suaka Ubud', 'description' => 'Belanja bahan di pasar Ubud, kelas memasak resep leluhur Bali, dan sore hari santai di Campuhan Ridge Walk.']);
        TourItinerary::create(['tour_id' => $t1->id, 'day_number' => 4, 'title' => 'Belanja Oleh-oleh Desa & Transfer Bandara', 'description' => 'Sarapan pagi, penukaran voucher produk kerajinan desa, dan pengantaran kembali ke Bandara Ngurah Rai.']);

        TourGallery::create(['tour_id' => $t1->id, 'image_url' => 'https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=800&q=80', 'caption' => 'Pemandangan Terasering Sawah Ubud']);
        TourGallery::create(['tour_id' => $t1->id, 'image_url' => 'https://images.unsplash.com/photo-1544644181-1484b3fdfc62?auto=format&fit=crop&w=800&q=80', 'caption' => 'Workshop Kerajinan Lokal']);
        TourGallery::create(['tour_id' => $t1->id, 'image_url' => 'https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?auto=format&fit=crop&w=800&q=80', 'caption' => 'Suasana Homestay Pedesaan']);

        $t2 = Tour::create([
            'title' => 'Phinisi Liveaboard Sailing Komodo Odyssey',
            'slug' => 'phinisi-liveaboard-sailing-komodo-odyssey',
            'category' => 'curated',
            'duration' => '3H 2M',
            'location' => 'Labuan Bajo, NTT',
            'starting_price' => 7500000,
            'min_pax' => 2,
            'rating' => 5.0,
            'reviews_count' => 96,
            'highlight_badges' => ['📸 Photo Spot', '🌊 Ocean Adventure'],
            'cover_image' => 'https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?auto=format&fit=crop&w=800&q=80',
            'short_description' => 'Mengarungi lautan Phinisi premium, trekking Pulau Padar saat sunrise, dan bertemu satwa Komodo otentik.',
            'full_description' => 'Pengalaman berlayar tak terlupakan menggunakan kapal Phinisi tradisional berbahan kayu ulin. Nikmati kamar ber-AC yang nyaman, sajian kuliner laut segar, serta penyelaman ke dunia bawah laut Pink Beach dan Manta Point.',
            'inclusions' => ['Kabin ber-AC Kapal Phinisi 3D2N', 'Makan 3x sehari oleh koki kapal', 'Alat snorkeling & jaket pelampung', 'Dokumentasi kamera & drone', 'Ranger Taman Nasional Komodo'],
            'exclusions' => ['Tiket pesawat ke Labuan Bajo', 'Tiket masuk Taman Nasional Komodo', 'Tipping kru kapal'],
            'is_featured' => true,
        ]);

        TourItinerary::create(['tour_id' => $t2->id, 'day_number' => 1, 'title' => 'Boarding Phinisi & Pulau Kelor', 'description' => 'Penjemputan di pelabuhan, boarding kapal Phinisi, trekking Pulau Kelor, dan sunset di Pulau Kalong.']);
        TourItinerary::create(['tour_id' => $t2->id, 'day_number' => 2, 'title' => 'Sunrise Pulau Padar & Pink Beach', 'description' => 'Trekking sunrise Pulau Padar, snorkeling pasir merah muda Pink Beach, dan bertemu Komodo di Pulau Rinca.']);
        TourItinerary::create(['tour_id' => $t2->id, 'day_number' => 3, 'title' => 'Manta Point & Kembali ke Pelabuhan', 'description' => 'Berenang bersama Pari Manta di Manta Point, pulau Taka Makassar, dan pengantaran ke Bandara Komodo.']);

        TourGallery::create(['tour_id' => $t2->id, 'image_url' => 'https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?auto=format&fit=crop&w=800&q=80', 'caption' => 'Kapal Phinisi Komodo']);
        TourGallery::create(['tour_id' => $t2->id, 'image_url' => 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=800&q=80', 'caption' => 'Pasar Tradisional & Pantai']);

        $t3 = Tour::create([
            'title' => 'Jogja Culinary Resep Leluhur & Borobudur',
            'slug' => 'jogja-culinary-resep-leluhur-borobudur',
            'category' => 'essential',
            'duration' => '3H 2M',
            'location' => 'Yogyakarta',
            'starting_price' => 2450000,
            'min_pax' => 2,
            'rating' => 4.8,
            'reviews_count' => 210,
            'highlight_badges' => ['🥘 Taste Local', '🏰 Heritage'],
            'cover_image' => 'https://images.unsplash.com/photo-1596402184320-417e7178b2cd?auto=format&fit=crop&w=800&q=80',
            'short_description' => 'Jelajah gudeg legendaris, workshop pembuatan gerabah di Desa Kasongan, dan matahari terbit Candi Borobudur.',
            'full_description' => 'Pilihan perjalanan esensial bagi Anda yang ingin mengenal kuliner otentik Yogyakarta dan mahakarya sejarah cagar budaya dunia.',
            'inclusions' => ['Hotel Bintang 3 pusat kota Jogja', 'Kuliner khas Gudeg Manggar, Bakmi Jawa, & Jamu', 'Tiket masuk Candi Borobudur & Tamansari', 'Transportasi AC & Guide'],
            'exclusions' => ['Tiket kereta/pesawat ke Jogja', 'Pengeluaran pribadi'],
            'is_featured' => true,
        ]);

        TourItinerary::create(['tour_id' => $t3->id, 'day_number' => 1, 'title' => 'Heritage Walk Keraton & Tamansari', 'description' => 'Penjemputan di Stasiun/Bandara YIA, keliling Istana Keraton dan situs air Tamansari.']);
        TourItinerary::create(['tour_id' => $t3->id, 'day_number' => 2, 'title' => 'Sunrise Candi Borobudur & Gerabah Kasongan', 'description' => 'Sunrise Borobudur, praktek membuat gerabah tanah liat di Kasongan, dan dinner Bakmi Jawa.']);
        TourItinerary::create(['tour_id' => $t3->id, 'day_number' => 3, 'title' => 'Belanja Malioboro & Drop Off', 'description' => 'Belanja bakpia dan batik Malioboro lalu pengantaran kembali ke Stasiun/Bandara.']);

        TourGallery::create(['tour_id' => $t3->id, 'image_url' => 'https://images.unsplash.com/photo-1596402184320-417e7178b2cd?auto=format&fit=crop&w=800&q=80', 'caption' => 'Keindahan Candi Borobudur']);

        // 5. Articles Data
        Article::create([
            'title' => 'Menemukan Kedamaian Sejati di Desa Sidemen Karangasem',
            'slug' => 'menemukan-kedamaian-sejati-di-desa-sidemen-karangasem',
            'category' => 'village',
            'author' => 'Mas Danang (Guide Vayana)',
            'cover_image' => 'https://images.unsplash.com/photo-1544644181-1484b3fdfc62?auto=format&fit=crop&w=600&q=80',
            'read_time' => '5 Menit Baca',
            'excerpt' => 'Jauh dari keramaian Kuta, Desa Sidemen menawarkan pemandangan terasering sawah berlatar Gunung Agung serta kerajinan tenun ikat legendaris.',
            'content' => 'Desa Sidemen adalah permata tersembunyi di Karangasem, Bali. Di sini, waktu seolah berjalan lebih lambat. Warga lokal menyambut setiap pengunjung dengan senyuman tulus. Kegiatan memetik sayur di kebun warga dan mengobrol di teras rumah menjadi kemewahan sejati yang sulit ditemukan di kota besar.',
            'published_at' => now(),
        ]);

        Article::create([
            'title' => 'Rahasia Kelezatan Gudeg Manggar Warisan Kraton Jogja',
            'slug' => 'rahasia-kelezatan-gudeg-manggar-warisan-kraton-jogja',
            'category' => 'food',
            'author' => 'Mbak Nisa',
            'cover_image' => 'https://images.unsplash.com/photo-1596402184320-417e7178b2cd?auto=format&fit=crop&w=600&q=80',
            'read_time' => '4 Menit Baca',
            'excerpt' => 'Mengapa gudeg bunga kelapa muda begitu langka dan disukai para bangsawan kuno? Simak penelusuran kuliner otentik kami.',
            'content' => 'Gudeg Manggar dibuat menggunakan bunga kelapa muda yang memberikan tekstur lebih gurih dan renyah dibandingkan nangka muda biasa. Hidangan tradisional ini dahulunya disajikan khusus untuk bangsawan Kerajaan Mataram.',
            'published_at' => now(),
        ]);

        Article::create([
            'title' => 'Panduan Pertama Kali Liveaboard di Labuan Bajo',
            'slug' => 'panduan-pertama-kali-liveaboard-di-labuan-bajo',
            'category' => 'tips',
            'author' => 'Tim Kapten Vayana',
            'cover_image' => 'https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?auto=format&fit=crop&w=600&q=80',
            'read_time' => '6 Menit Baca',
            'excerpt' => 'Apa saja yang perlu dibawa saat menginap di kapal Phinisi? Ini dia daftar perlengkapan wajib dan etika menjaga kebersihan laut.',
            'content' => 'Menginap di atas kapal Phinisi membutuhkan beberapa persiapan khusus. Pastikan membawa pakaian santai yang menyerap keringat, sunscreen ramah terumbu karang (reef-safe), serta kamera anti air.',
            'published_at' => now(),
        ]);

        // 6. Testimonials Data
        Testimonial::create([
            'guest_name' => 'Siti Rahmawati',
            'city' => 'Jakarta',
            'avatar_url' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80',
            'package_name' => 'Ubud Cultural Experience',
            'rating' => 5,
            'content' => 'Pengalaman privat trip bersama Vayana Wisata ke Sidemen sangat menyentuh hati. Kami diajak berinteraksi dengan warga desa, belajar menenun, dan makan malam di pinggir sawah. Pelayanannya 10/10!',
            'is_verified' => true,
            'trip_date' => 'Agustus 2026',
        ]);

        Testimonial::create([
            'guest_name' => 'Budi Santoso',
            'city' => 'Surabaya',
            'avatar_url' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&q=80',
            'package_name' => 'Liveaboard Komodo',
            'rating' => 5,
            'content' => 'Sailing Phinisi Komodo bersama Vayana Wisata luar biasa lancar. Kapal sangat terawat, koki kapal masakannya enak sekali. Guide ramah dan fotogenik bantu dokumentasi.',
            'is_verified' => true,
            'trip_date' => 'Juli 2026',
        ]);

        Testimonial::create([
            'guest_name' => 'Dewi Lestari',
            'city' => 'Bandung',
            'avatar_url' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=150&q=80',
            'package_name' => 'Bespoke Custom Trip Jogja',
            'rating' => 5,
            'content' => 'Bespoke trip rancangan Vayana Wisata untuk rombongan keluarga besar kami berjalan sempurna. Semua fleksibel, ramah anak dan lansia.',
            'is_verified' => true,
            'trip_date' => 'Juni 2026',
        ]);
    }
}
