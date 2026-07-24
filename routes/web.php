<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

Route::get('/beranda', function () {
    return view('pages.Beranda');
});


Route::get('/about', function () {
    return view('About');
});
Route::get('/contact', function () {
    return view('pages.Contact');
});

 /* Pratikum 2 */
Route::get('/halaman', function () {
  echo "HIIII! Selamat Datang di Website Laravel ";
});
Route::get('/about2', function () {
  echo "NIM: 26018, Nama: rendra kurniawan, Kelas: XI RPLA";
});
Route::get('/articles/{id}', function ($id) {
  echo "Ini adalah artikel dengan ID: " . $id;
});

// =================
   // ROUTE BIASA \\
// =================
Route::get('/home', [CompanyController::class, 'home']);


// =================
  // ROUTE PREFIX \\
// =================
Route::prefix('category')->group(function () {

    Route::get('/{category}', 
        [CompanyController::class, 'product']);

});


// ====================
  // ROUTE PARAMETER \\
// ====================
Route::get('/news/{judul}', 
    [CompanyController::class, 'news']);


// =================
  // ROUTE PREFIX \\
// =================
Route::prefix('program')->group(function () {

    Route::get('/{nama}', 
        [CompanyController::class, 'program']);

});


// =================
  // ROUTE BIASA \\
// =================
Route::get('/about-us', 
    [CompanyController::class, 'about']);