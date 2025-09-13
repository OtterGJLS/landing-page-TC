<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;


// Route::group(['as' => 'client.'], function () {
//     Route::get('/index', HomeController::class)->name('home');
//     Route::get('/klien', [ClientHomeController::class, 'klien'])->name('klien.about');
// });

// Route::get('/', [HomeController::class, 'index'])->name('home.klien');

Route::controller(HomeController::class)->as('client.')->group(function () {

    // Route untuk halaman utama (homepage)
    // Nama Route: client.home
    Route::get('/', 'index')->name('home');

    // Route untuk halaman klien
    // Nama Route: client.klien
    Route::get('/klien', 'klien')->name('klien');
    Route::get('/tentang-kami', 'tentangKami')->name('tentang-kami');
    Route::get('/pelatihan', 'pelatihan')->name('pelatihan');
    Route::get('/sertifikat', 'sertifikat')->name('sertifikat');
    Route::get('/layanan', 'layanan')->name('layanan');
    
});

