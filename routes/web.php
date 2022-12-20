<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LapobatController;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/pasien', function () {
    return view('pasien.pasien', [
        'title' => 'pasien',

    ]);
})->middleware('admin');

Route::get('/rekam', function () {
    return view('pasien.rekammds', [
        'title' => 'rekammds',
    ]);
});

Route::get('/lapobat', [LapobatController::class, 'index'])->middleware('admin');

Route::get('/lappasien', function () {
    return view('laporan.lappasien', [
        'title' => 'lappasien',
    ]);
})->middleware('admin');

Route::get('/obat', function () {
    return view('obat.obat', [
        'title' => 'obat',
    ]);
})->middleware('admin');

Route::get('/tambahobat', function () {
    return view('obat.tambahobat', [
        'title' => 'tambahobat',
    ]);
})->middleware('admin');

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate');
    Route::post('/logout', 'logout')->middleware('auth');
});

Route::get('/user', function () {
    return view('users.index', [
        'title' => 'Users',
    ]);
})->middleware('docter');
