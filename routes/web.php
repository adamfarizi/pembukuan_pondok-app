<?php

use App\Http\Controllers\Guest\GuestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\TamrinController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DaftarUlangController;
use App\Http\Controllers\MasterAdminController;
use App\Http\Controllers\MasterGuestController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\IuranBulananController;
use App\Http\Controllers\LaporanKeuanganController;

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
Route::middleware(['guest'])->group(function () {
    Route::get('/', [GuestController::class,'index'])->name('login');
    Route::post('/login', [AuthController::class,'login_action']);

});
Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout']);

    Route::get('/beranda', [BerandaController::class,'index'])->name('beranda');
    Route::get('/beranda/chartKeuangan', [BerandaController::class, 'chartKeuangan'])->name('beranda.chartKeuangan');
    Route::get('/beranda/chartSantri', [BerandaController::class, 'chartSantri'])->name('beranda.chartSantri');

    Route::get('/pembayaran/daftar_ulang', [DaftarUlangController::class, 'index'])->name('daftar_ulang');
    Route::post('/pembayaran/daftar_ulang/create', [DaftarUlangController::class, 'create_data']);
    Route::get('/pembayaran/daftar_ulang/{id}', [DaftarUlangController::class, 'get_edit_data']);
    Route::put('/pembayaran/daftar_ulang/edit/{id}', [DaftarUlangController::class, 'edit_data']);
    Route::delete('/pembayaran/daftar_ulang/delete/{id}', [DaftarUlangController::class, 'delete_data']);
    
    Route::get('/pembayaran/iuran_bulanan', [IuranBulananController::class, 'index'])->name('iuran_bulanan');
    Route::get('/pembayaran/iuran_bulanan/belum_lunas', [IuranBulananController::class, 'index_belum_lunas'])->name('iuran_bulanan_belum_lunas');
    Route::post('/pembayaran/iuran_bulanan/create', [IuranBulananController::class, 'create_data']);
    Route::get('/pembayaran/iuran_bulanan/{id}', [IuranBulananController::class, 'get_edit_data']);
    Route::put('/pembayaran/iuran_bulanan/edit/{id}', [IuranBulananController::class, 'edit_data']);
    Route::delete('/pembayaran/iuran_bulanan/delete/{id}', [IuranBulananController::class, 'delete_data']);
    
    Route::get('/pembayaran/tamrin', [TamrinController::class, 'index'])->name('tamrin');
    Route::get('/pembayaran/tamrin/belum_lunas', [TamrinController::class, 'index_belum_lunas'])->name('tamrin_belum_lunas');
    Route::post('/pembayaran/tamrin/create', [TamrinController::class, 'create_data']);
    Route::get('/pembayaran/tamrin/{id}', [TamrinController::class, 'get_edit_data']);
    Route::put('/pembayaran/tamrin/edit/{id}', [TamrinController::class, 'edit_data']);
    Route::delete('/pembayaran/tamrin/delete/{id}', [TamrinController::class, 'delete_data']);
    
    Route::get('/pengeluaran', [PengeluaranController::class, 'index'])->name('pengeluaran');
    Route::post('/pengeluaran/create', [PengeluaranController::class, 'create_data']);
    Route::get('/pengeluaran/{id}', [PengeluaranController::class, 'get_edit_data']);
    Route::put('/pengeluaran/edit/{id}', [PengeluaranController::class, 'edit_data']);
    Route::delete('/pengeluaran/delete/{id}', [PengeluaranController::class, 'delete_data']);

    Route::get('/laporan_keuangan', [LaporanKeuanganController::class, 'index'])->name('laporan_keuangan');
    Route::get('/laporan_keuangan/chart', [LaporanKeuanganController::class, 'chart'])->name('laporan_keuangan.chart');
    Route::get('/laporan_keuangan/get_pemasukan', [LaporanKeuanganController::class, 'get_pemasukan'])->name('get_pemasukan');
    Route::get('/laporan_keuangan/get_pengeluaran', [LaporanKeuanganController::class, 'get_pengeluaran'])->name('get_pengeluaran');

    Route::get('/santri', [SantriController::class, 'index'])->name('santri');
    Route::get('/santri', [SantriController::class, 'index'])->name('santri');
    Route::get('/santri/create/form', [SantriController::class, 'get_create_data']);
    Route::post('/santri/create', [SantriController::class, 'create_data']);
    Route::get('/santri/{id}', [SantriController::class, 'get_edit_data']);
    Route::put('/santri/edit/{id}', [SantriController::class, 'edit_data']);
    Route::delete('/santri/delete/{id}', [SantriController::class, 'delete_data']);

    Route::get('/master/master_admin', [MasterAdminController::class, 'index'])->name('master_admin');
    Route::put('/master/master_admin', [MasterAdminController::class, 'edit_data']);
    Route::post('/master/master_admin', [MasterAdminController::class, 'create_data']);

    Route::get('/master/master_guest', [MasterGuestController::class, 'index'])->name('master_guest');

});
