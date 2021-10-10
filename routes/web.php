<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/profil', function () {
    return view('profil');
})->name('profil');

Route::get('/warta-kegiatan', function () {
    return view('warta_kegiatan');
})->name('warta-kegiatan');

Route::get('/jadwal-kegiatan', function () {
    return view('jadwal_kegiatan');
})->name('jadwal-kegiatan');

Route::get('/tentang-kami', function () {
    return view('tentang_kami');
})->name('tentang-kami');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
