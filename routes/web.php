<?php

use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PaketController;
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
    return view('admin.dashboard');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('kendaraan', KendaraanController::class);
Route::resource('paket', PaketController::class);

Route::prefix('users')->group(function () {
    Route::resource('sopir', SopirController::class)->except('show');
});

Route::controller(LaporanController::class)->prefix('laporan')->group(function(){

    Route::get('/', function () {
        return view('admin.laporan.index');
    });

    Route::get('supir','LaporanSupir');
    Route::get('kendaraan', function(){
       return view('admin.kendaraan.create');
    });
    Route::get('tracking', function(){
       return view('admin.tracking.create');
    });
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});
require __DIR__.'/auth.php';
