<?php

use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EstimasiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\AdminTransaksiController;

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

// Auth

Route::get('/register',[RegisterController::class,'index'])->middleware('guest');

Route::post('/register',[RegisterController::class,'store']);

Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');

Route::post('/login',[LoginController::class,'authenticate']);

Route::post('/logout',[LoginController::class,'logout']);

// Pengunjung

Route::get('/', function () {
    return view('index',[
        "title" => "Beranda"
    ]);
});

Route::get('/estimasi',[EstimasiController::class,'index']);

// Pelanggan

Route::get('/home',[PengunjungController::class,'index']);

Route::get('/transaksi',[PengunjungController::class,'transaksi'])->middleware('auth');

Route::get('/detail/{transaksi:id}',[TransaksiController::class,'show'])->middleware(['auth','checkRole:pelanggan']);

Route::get('/riwayat',[PengunjungController::class,'riwayat'])->middleware(['auth','checkRole:pelanggan']);

Route::get('/profil',[PengunjungController::class,'profil'])->middleware(['auth','checkRole:pelanggan']);

// Admin

Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth','checkRole:admin']);

Route::resource('/dashboard/transaksi',AdminTransaksiController::class)->middleware(['auth','checkRole:admin']);

Route::get('/dashboard/diproses',[AdminTransaksiController::class,'diproses'])->middleware(['auth','checkRole:admin']);

Route::get('/dashboard/selesai',[AdminTransaksiController::class,'selesai'])->middleware(['auth','checkRole:admin']);

Route::get('/dashboard/process/{transaksi:id}',[AdminTransaksiController::class,'process'])->middleware(['auth','checkRole:admin']);

Route::get('/dashboard/finish/{transaksi:id}',[AdminTransaksiController::class,'finish'])->middleware(['auth','checkRole:admin']);

