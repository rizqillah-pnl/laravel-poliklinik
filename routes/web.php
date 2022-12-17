<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

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

// Sample
// Redirect ke halaman yg ada
// Redirect ke dashboard jika sudah login
Route::get('/', [DashboardController::class, 'index'])->middleware('auth');
// Redirect ke login jika belum login
Route::get('/', [LoginController::class, 'index'])->middleware('guest');



Route::middleware(['auth'])->controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->name('dashboard');

    Route::get('/pasien', function () {
        return view('pasien.pasien', [
            'title' => 'pasien',
        ]);
    });

    Route::get('/rekam', function () {
        return view('pasien.rekammds', [
            'title' => 'rekammds',
        ]);
    });

    Route::get('/lapobat', function () {
        return view('laporan.lapobat', [
            'title' => 'lapobat',
        ]);
    });

    Route::get('/lappasien', function () {
        return view('laporan.lappasien', [
            'title' => 'lappasien',
        ]);
    });

    Route::get('/obat', function () {
        return view('obat.obat', [
            'title' => 'obat',
        ]);
    });

    Route::get('/tambahobat', function () {
        return view('obat.tambahobat', [
            'title' => 'tambahobat',
        ]);
    });
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate');
    Route::post('/logout', 'logout')->middleware('auth');
});
