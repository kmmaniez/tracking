<?php

use App\Http\Controllers\CheckpointController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PengirimanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SopirController;
use App\Models\Checkpoint;
use App\Models\Kendaraan;
use App\Models\Paket;
use App\Models\Pengiriman;
use App\Models\Sopir;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Contracts\Role;

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
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/', function () {
        if (auth()->user()->roles[0]->id === 1) {
            return view('dashboard', [
                'totalsupir' => Sopir::all()->count(),
                'totalpaket' => Paket::all()->count(),
                'totalkendaraan' => Kendaraan::all()->count(),
            ]);
        }
        return view('dashboard', [
            'title_page' => 'Checkpoint',
            'sopir' => Sopir::all(),
            'checkpoints' => Checkpoint::all(),
            'listpengiriman' => Pengiriman::all()
        ]);
    });

    Route::prefix('laporan')->controller(LaporanController::class)->group(function () {
        Route::get('/sopir', 'laporanSopir')->name('laporan.sopir');
        Route::get('/sopir/{id}/cetak', 'printSopir');

        Route::get('/paket', 'laporanPaket')->name('laporan.paket');
        Route::get('/paket/{id}/cetak', 'printPaket');
        
        Route::get('/tracking', 'laporanTracking')->name('laporan.tracking');
        Route::get('/tracking/{id}/cetak', 'printTracking');
    });

    Route::get('/supir/tracking', function () {
        return view('supir.tracking');
    })->middleware(['IsSopir']);

    Route::resource('kendaraan', KendaraanController::class);

    Route::get('/checkpoint',[CheckpointController::class, 'index']);
    Route::post('/simpancp1', [CheckpointController::class, 'store_cp_1'])->name('checkpoint.store1');
    Route::post('/simpancp2', [CheckpointController::class, 'store_cp_2'])->name('checkpoint.store2');
    Route::post('/simpancp3', [CheckpointController::class, 'store_cp_3'])->name('checkpoint.store3');

    Route::controller(PengirimanController::class)->group(function () {
        Route::get('/pengiriman', 'index')->name('pengiriman.index');
        Route::get('/pengiriman/create', 'create')->name('pengiriman.create');
        Route::post('/pengiriman/create', 'store')->name('pengiriman.store');

        Route::delete('/pengiriman/{pengiriman}/','destroy')->name('pengiriman.destroy');
    });

    Route::controller(PaketController::class)->prefix('paket')->group(function () {
        Route::get('/', 'index')->name('paket.index');
        Route::get('/create', 'create')->name('paket.create');
        Route::post('/create', 'store')->name('paket.store');

        Route::delete('/{paket}', 'destroy')->name('paket.destroy');
    });

    Route::resource('sopir', SopirController::class)->except('show');
});
require __DIR__ . '/auth.php';
