<?php

use App\Models\Kegiatan;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;


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
    $kegiatan = Kegiatan::orderBy('tanggal')->offset(1)->limit(4)->get();
    // dd($kegiatan);
    return view('welcome', [
        'kegiatans' => $kegiatan
    ]);
})->name('welcome');

Route::get('/profil', function () {
    return view('profil');
})->name('profil');

Route::get('/warta', function () {
    return view('warta');
})->name('warta');

Route::get('/detail-warta', function () {
    return view('detail_warta');
})->name('detail-warta');

Route::get('/jadwal-kegiatan', function () {
    $kegiatan = Kegiatan::orderBy('tanggal')->get();
    return view('jadwal', [
        'kegiatans' => $kegiatan
    ]);
})->name('jadwal-kegiatan');

Route::get('/tentang-kami', function () {
    return view('tentang_kami');
})->name('tentang-kami');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['permission:show users']], function () {
    Route::get('/user', function () {
        return view('user');
    })->middleware(['auth'])->name('user');
});

Route::get('/kegiatan', function () {
    return view('kegiatan');
})->middleware(['auth'])->name('kegiatan');

Route::get('/warta-kegiatan', function () {
    return view('warta_kegiatan');
})->middleware(['auth'])->name('warta-kegiatan');



require __DIR__ . '/auth.php';
