<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\LaporanDaftarController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PasienController;
/* use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProfilController; */
use Illuminate\Support\Facades\Route;


/* Route::get('profil', [ProfilController::class,'index'])->name('user');
Route::get('profil/create', [ProfilController::class,'create'])->name('user');
Route::get('pelanggan', [PelangganController::class,'index'])->name('user');
 */

/* jika memiliki lebih dari 1 hak pengguna maka dipakai prefix pada route */
//cara auth 1
Route::middleware(['auth'])->group(function () {
    Route::resource('daftar', DaftarController::class);
    Route::resource('pasien', PasienController::class);
    Route::resource('laporanpasien', LaporanPasienController::class);
    Route::resource('laporandaftar', LaporanDaftarController::class);   
});

//cara auth 2
Route::resource('obat', ObatController::class)->middleware('auth');



//
Route::get('dokter', [DokterController::class, 'index'])->name('dokter.index');
Route::get('dokter/create', [DokterController::class, 'create'])->name('dokter.create');
//kurung kurawal menunjukkan id yang dinamis
Route::get('dokter/{id}/edit', [DokterController::class, 'edit'])->name('dokter.edit');
Route::get('dokter/{id}', [DokterController::class, 'show'])->name('dokter.show');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify'=> true]);

//cara auth 3 middlewarenya di homecontroller
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
