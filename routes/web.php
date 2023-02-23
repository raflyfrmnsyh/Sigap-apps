<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware('guest')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        /**
         * Route View
         */
        Route::get('/login', 'viewLogin')->name('login.masyarakat');
        Route::get('/register', 'viewRegister')->name('register.masyarakat');
        Route::get('/Admin/login', 'loginAdmin')->name('login.admin');
        Route::get('/Admin/tambah-petugas', 'register')->name('login.admin');

        /**
         * Route Prosess
         */
        Route::post('/log', 'login')->name('login');
        Route::post('/reg', 'register')->name('register');
        Route::post('/log-admin', 'register')->name('log.admin');
        Route::post('/reg-admin', 'register')->name('reg.admin');
    })->name('auth');
});

Route::middleware(['auth', 'masyarakat'])->group(function () {

    Route::controller(MasyarakatController::class)->group(function () {
        Route::get('/beranda', 'index')->name('beranda.masyarakat');
        Route::get('/history', 'history')->name('history.masyarakat');
        Route::get('/history/lihat-detail/{detail}', 'detail')->name('detail.history');
        Route::get('/feed', 'feedSigap')->name('feed.masyarakat');
        Route::get('/bantuan', 'bantuan')->name('bantuan.masyarakat');
        Route::get('/pusat-bantuan', 'show')->name('pusat.bantuan');
    });

    Route::controller(ProfilController::class)->group(function () {
        Route::get('/profil', 'viewProfil')->name('profil.masyarakat');

        Route::get('/akun-saya', 'akunSaya')->name('akun.saya.masyarakat');
        Route::post('/update-akun-masyarakat', 'updateAkun')->name('update.akun.masyarakat');

        Route::get('/ubah-data-diri', 'viewUbah')->name('ubah.akun.masyarakat');


        Route::get('/ubah-password', 'ubahPassword')->name('ubah.password_');
        Route::post('/ubah-password', 'updatePassword')->name('ubah.password.prosess');
    });

    Route::controller(PengaduanController::class)->group(function () {
        Route::post('/buat-pengaduan', 'store')->name('pengaduan.masyarakat');
    });
});
