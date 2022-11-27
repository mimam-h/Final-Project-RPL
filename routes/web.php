<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EstimasiController;
use App\Http\Controllers\PengunjungController;

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

// Pengunjung

Route::get('/', function () {
    return view('index',[
        "title" => "Beranda"
    ]);
});

Route::get('/estimasi',[EstimasiController::class,'index']);

Route::get('login',[LoginController::class,'index']);

// Pelanggan

Route::get('/home',[PengunjungController::class,'index']);

Route::get('/transaksi',[PengunjungController::class,'transaksi']);

Route::get('/riwayat',[PengunjungController::class,'riwayat']);

Route::get('/profil',[PengunjungController::class,'profil']);