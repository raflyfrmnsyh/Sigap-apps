<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PetugasController;
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
    return view('landing-page', [
        'title' => 'Landing Page Sigap'
    ]);
});


Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/admin/logout', [AuthController::class, 'logoutAdmin'])->name('admin.logout');


Route::middleware('guest')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        /**
         * Route View
         */
        Route::get('/login', 'viewLogin')->name('login.masyarakat');
        Route::get('/register', 'viewRegister')->name('register.masyarakat');
        Route::get('/Admin/login', 'loginAdmin')->name('login.admin');
        Route::post('/Admin/login', 'logingAdmin')->name('loging.admin');
        /**
         * Route Prosess
         */
        Route::post('/log', 'login')->name('login');
        Route::post('/reg', 'register')->name('register');
        Route::post('/log-admin', 'register')->name('log.admin');
    })->name('auth');
});

Route::middleware(['auth', 'masyarakat', 'disableBack'])->group(function () {

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


Route::controller(PetugasController::class)->group(function () {

    Route::middleware(['auth', 'petugas', 'disableBack'])->group(function () {
        Route::get('/admin/dashboard', 'viewDashboard')->name('admin.dashboard');
        Route::get('/admin/pengaduan-masuk', 'viewPengaduanMasuk')->name('pengaduan.masuk');
        Route::get('/admin/pengaduan-ditanggapi', 'viewPengaduanDitanggapi')->name('pengaduan.ditanggapi');
        Route::get('/admin/pengaduan-ditolak', 'viewPengaduanDitolak')->name('pengaduan.ditolak');

        Route::get('/Admin/Pengaduan/{id}', 'viewDetail')->name('view.pengaduan');
        Route::get('/Admin/Pengaduan/edit/{id}', 'editTanggapan')->name('edit.tanggapan');

        Route::post('/Admin/tanggapan/hapus/{id}', 'hapusTanggapan')->name('hapus.tanggapan');
        Route::post('/Admin/Pengaduan/tanggapan/edit{id}', 'updateTanggapan')->name('edit.tanggapan.prosess');

        Route::post('/Admin/Pengaduan/tanggapan/{id}', 'tanggapi')->name('tanggapi.pengaduan');
    });


    Route::middleware(['auth', 'admin', 'disableBack'])->group(function () {
        // Route Admin
        Route::get('/Admin/tambah-petugas', 'viewRegPetugas')->name('register.petugas');
        Route::post('/reg-admin', 'register')->name('tambah.petugas');

        Route::post('/admin/hapus-petugas/{user_id}', 'deletePetugas')->name('delete.petugas');

        Route::get('/admin/edit-petugas/{user_id}', 'viewUbahDataPetugas');
        Route::put('/admin/edit-petugas/{user_id}', 'viewUbahDataPetugas');
        Route::post('/admin/edit-petugas/{user_id}', 'UbahDataPetugas')->name('ubah.petugas');

        Route::get('/admin/kelola-masyarakat', 'viewKelolaMasyarakat')->name('kelola.masyarakat');

        Route::get('/admin/data-petugas', 'viewDataPetugas')->name('data.petugas');
    });
});


Route::controller(LaporanController::class)->group(function () {

    Route::middleware(['auth', 'admin', 'disableBack'])->group(function () {
        Route::get('/admin/laporan', 'index')->name('generate.laporan');
        Route::get('/admin/laporan/filter', 'filter')->name('filter.pengaduan');
    });
});
