<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelolaNPPController;
use App\Http\Controllers\DashboardPenggunaController;
use App\Http\Controllers\DashboardKelolaNPPController;

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
    return view('home', [
        "title" => "Pos Indonesia"
    ]);
});

Route::get('/register', function () {
    return view('register.index', [
        "title" => "Pos Indonesia"
    ]);
});


Route::get('/laporan', function () {
    return view('laporan.index', [
        "title" => "Laporan"
    ]);
});

Route::get('/pengguna', function () {
    return view('pengguna.index', [
        "title" => "Pengguna"
    ]);
});

Route::get('/pja', function () {
    return view('pja.index', [
        "title" => "PJA"
    ]);
});

Route::get('/data', function () {
    return view('datas.index', [
        "title" => "Data"
    ]);
});

Route::get('/tentang', function () {
    return view('tentang.index', [
        "title" => "Tentang"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Nurul Satria Winaldha",
        "email" => "nurulsatria59@gmail.com"
    ]);
});

Route::get('/Login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/Login', [LoginController::class, 'authenticate']);
Route::post('/Logout', [LoginController::class, 'logout']);

Route::get('/Register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/Register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/pengguna', [DashboardController::class, 'show'])->middleware('auth');

/*Route::get('/kelola_npp', [KelolaNPPController::class, 'index'])->middleware('auth');*/
Route::resource('/dashboard/kelola_npp', DashboardKelolaNPPController::class)->middleware('auth');
Route::resource('/dashboard/pengguna', DashboardPenggunaController::class)->middleware('auth');
