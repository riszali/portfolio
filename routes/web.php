<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes (Jalur Rute)
|--------------------------------------------------------------------------
*/

// Mengarahkan domain utama ke tampilan beranda
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// Mengarahkan pencarian Gen Z ke halaman easter egg (Monster HAML/SCSS)
Route::get('/genz', function () {
    return view('pages.genz');
})->name('genz');

// Endpoint POST untuk menangani data form kontak
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');