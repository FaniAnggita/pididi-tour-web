<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicPageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CompanySettingController;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\Admin\PididiJourneyController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ContactInquiryController;
use App\Http\Controllers\Admin\TourCategoryController;
use App\Http\Controllers\Admin\DestinationController;


/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [PublicPageController::class, 'home'])->name('home');
Route::get('/tentang-kami', [PublicPageController::class, 'about'])->name('about');
Route::get('/paket-wisata', [PublicPageController::class, 'tours'])->name('tours');
Route::get('/paket-wisata/the-jogja-you-havent-met', [PublicPageController::class, 'jogjaJourney'])->name('tours.jogja-journey');
Route::get('/paket-wisata/{slug}', [PublicPageController::class, 'tourDetail'])->name('tours.detail');
Route::get('/jurnal', [PublicPageController::class, 'blog'])->name('blog');
Route::get('/testimoni', [PublicPageController::class, 'testimonials'])->name('testimonials');
Route::get('/kontak', [PublicPageController::class, 'contact'])->name('contact');
Route::post('/kontak', [PublicPageController::class, 'storeContact'])->name('contact.store');
Route::get('/sitemap.xml', [PublicPageController::class, 'sitemap'])->name('sitemap');

/*
|--------------------------------------------------------------------------
| Admin Panel Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Destinations CRUD (Destinasi Wisata)
    Route::resource('destinations', DestinationController::class);

    // Company Setting (Legalities & Profile)
    Route::get('/settings', [CompanySettingController::class, 'edit'])->name('settings.edit');
    Route::put('/settings', [CompanySettingController::class, 'update'])->name('settings.update');

    // Signature PIDIDI Journey
    Route::get('/journey', [PididiJourneyController::class, 'edit'])->name('journey.edit');
    Route::put('/journey', [PididiJourneyController::class, 'update'])->name('journey.update');

    // Tour Categories CRUD & Quick Add
    Route::post('categories/quick-store', [TourCategoryController::class, 'store'])->name('categories.quick-store');
    Route::resource('categories', TourCategoryController::class);

    // Tour Packages CRUD + Itineraries & Gallery
    Route::resource('tours', TourController::class);
    Route::post('/tours/{tour}/itineraries', [TourController::class, 'storeItinerary'])->name('tours.itineraries.store');
    Route::delete('/itineraries/{itinerary}', [TourController::class, 'destroyItinerary'])->name('tours.itineraries.destroy');
    Route::post('/tours/{tour}/galleries', [TourController::class, 'storeGallery'])->name('tours.galleries.store');
    Route::delete('/galleries/{gallery}', [TourController::class, 'destroyGallery'])->name('tours.galleries.destroy');

    // Articles CRUD
    Route::resource('articles', ArticleController::class);

    // Testimonials CRUD
    Route::resource('testimonials', TestimonialController::class);

    // Contact Inquiries
    Route::get('/inquiries', [ContactInquiryController::class, 'index'])->name('inquiries.index');
    Route::get('/inquiries/{inquiry}', [ContactInquiryController::class, 'show'])->name('inquiries.show');
    Route::delete('/inquiries/{inquiry}', [ContactInquiryController::class, 'destroy'])->name('inquiries.destroy');
});
