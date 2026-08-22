<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/tentang-kami', function () {
    return view('pages.about');
})->name('about');

Route::get('/paket-wisata', function () {
    return view('pages.tours');
})->name('tours');

Route::get('/jurnal', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/testimoni', function () {
    return view('pages.testimonials');
})->name('testimonials');

Route::get('/kontak', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/paket-wisata/the-jogja-you-havent-met', function () {
    return view('pages.jogja-journey');
})->name('tours.jogja-journey');

Route::get('/jogja-journey', function () {
    return view('pages.jogja-journey');
})->name('jogja-journey');


