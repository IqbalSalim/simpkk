<?php

use App\Http\Livewire\Dasawisma\Create;
use App\Http\Livewire\Dasawisma\Detail;
use App\Http\Livewire\Dasawisma\Edit;
use App\Http\Livewire\Dasawisma\Index;
use App\Http\Livewire\DetailWarta;
use App\Http\Livewire\Laporan\IndexLaporan;
use App\Http\Livewire\Profil;
use App\Http\Livewire\ProkerIndex;
use App\Http\Livewire\Prokok;
use App\Http\Livewire\Struktur;
use App\Http\Livewire\Warta as LivewireWarta;
use App\Models\Kegiatan;
use App\Models\Proker;
use App\Models\Warta;
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
    $kegiatan = Kegiatan::orderBy('tanggal')->limit(4)->get();
    $warta = Warta::orderBy('created_at', 'desc')->limit(3)->get();
    // dd($kegiatan);
    return view('welcome', [
        'kegiatans' => $kegiatan,
        'wartas' => $warta,
    ]);
})->name('welcome');

Route::get('/profil', Profil::class)->name('profil');

// Route::get('/warta', LivewireWarta::class)->name('warta');

// Route::get('/detail-warta/{id}', DetailWarta::class)->name('detail-warta');

Route::group(['prefix' => '/warta', 'as' => 'warta'], function () {
    Route::get('', LivewireWarta::class)->name('');
    Route::get('/detail/{id}', DetailWarta::class)->name('.detail');
});

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

Route::group(['middleware' => ['permission:olah user']], function () {
    Route::get('/user', function () {
        return view('user');
    })->middleware(['auth'])->name('user');
});

Route::group(['prefix' => '/profil', 'as' => 'profil', 'middleware' => 'auth'], function () {
    Route::get('/proker', ProkerIndex::class)->middleware(['can:olah profil'])->name('.proker');
    Route::get('/struktur', Struktur::class)->middleware(['can:olah profil'])->name('.struktur');
});



Route::get('/kegiatan', function () {
    return view('kegiatan');
})->middleware(['auth'])->name('kegiatan');



Route::group(['dasawisma' => '/dasawisma', 'as' => 'dasawisma', 'middleware' => 'auth'], function () {
    Route::get('/dasawisma', Index::class)->name('');
    Route::get('/dasawisma/create', Create::class)->name('.create');
    Route::get('/dasawisma/edit/{id}', Edit::class)->name('.edit');
    Route::get('/dasawisma/detail/{id}', Detail::class)->name('.detail');
});

Route::get('/warta-kegiatan', function () {
    return view('warta_kegiatan');
})->middleware(['auth'])->name('warta-kegiatan');

Route::group(['prefix' => '/laporan', 'as' => 'laporan'], function () {
    Route::get('', IndexLaporan::class)->name('');
    // Route::get('/detail/{id}', DetailWarta::class)->name('.detail');
});



require __DIR__ . '/auth.php';
