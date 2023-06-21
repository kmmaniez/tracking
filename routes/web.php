<?php

use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PengirimanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SopirController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
// Route::name('admin.')->prefix('admin')->group(function () {
//     Route::get('/users', function () {
//         // Route assigned name "admin.users"...
//     })->name('users');
// });

// Route::name('admin.')->prefix('admin')->group(function () {



    Route::prefix('laporan')->group(function () {
        Route::get('/sopir', function () {
            return view('admin.laporan.laporan-sopir', ['title_page' => 'Laporan Sopir']);
        })->name('laporan.sopir');

        Route::get('/paket', function () {
            return view('admin.laporan.laporan-paket', ['title_page' => 'Laporan Paket']);
        })->name('laporan.paket');;

        Route::get('/tracking', function () {
            return view('admin.laporan.laporan-tracking', ['title_page' => 'Laporan Tracking']);
        })->name('laporan.tracking');;
    });
// });

Route::get('/supir/tracking', function () {
    return view('supir.tracking');
});
Route::resource('kendaraan', KendaraanController::class);

Route::get('/checkpoint', function () {
    return view('admin.checkpoint.index');
});

Route::controller(PengirimanController::class)->group(function () {
    Route::get('/pengiriman', 'index');
})->name('pengiriman');

Route::controller(PaketController::class)->prefix('paket')->group(function(){
    Route::get('/', 'index')->name('paket.index');
    Route::get('/create', 'create')->name('paket.create');
    Route::post('/create', 'store')->name('paket.store');

    Route::get('/{paket}/edit', 'edit')->name('paket.edit');
    Route::put('/{paket}', 'update')->name('paket.update');
    Route::delete('/{paket}', 'destroy')->name('paket.destroy');

    Route::get('/{paket}/kirimsopir', 'viewPaketSopir')->name('paket.sopir');
    Route::post('/{paket}/kirimsopir', 'storePaketSopir')->name('paket.simpansopir');

    Route::get('/paket/laporan', 'viewLaporan');
});

Route::prefix('users')->group(function () {
    Route::resource('sopir', SopirController::class)->except('show');
});


Route::get('/admin', function () {
    return view('admin.dashboard');
});
require __DIR__.'/auth.php';
