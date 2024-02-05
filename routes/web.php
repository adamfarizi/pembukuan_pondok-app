<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DaftarUlangController;
use App\Http\Controllers\IuranBulananController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\SantriController;
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
Route::middleware(['guest'])->group(function () {
    Route::get('/', [AuthController::class,'index'])->name('login');
    Route::post('/login', [AuthController::class,'login_action']);

});
Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout']);

    Route::get('/beranda', [BerandaController::class,'index'])->name('beranda');

    Route::get('/pembayaran/daftar_ulang', [DaftarUlangController::class, 'index'])->name('daftar_ulang');
    Route::post('/pembayaran/daftar_ulang/create', [DaftarUlangController::class, 'create_data']);
    Route::get('/pembayaran/daftar_ulang/{id}', [DaftarUlangController::class, 'get_edit_data']);
    Route::put('/pembayaran/daftar_ulang/edit/{id}', [DaftarUlangController::class, 'edit_data']);
    Route::delete('/pembayaran/daftar_ulang/delete/{id}', [DaftarUlangController::class, 'delete_data']);
    
    Route::get('/pembayaran/iuran_bulanan', [IuranBulananController::class, 'index'])->name('iuran_bulanan');
    Route::post('/pembayaran/iuran_bulanan/create', [IuranBulananController::class, 'create_data']);
    
    Route::get('/pembayaran/tamrin', function () { return view('auth/pembayaran/tamrin', ['title' => 'Daftar Ulang']); })->name('tamrin');
    
    Route::get('/pengeluaran', [PengeluaranController::class, 'index'])->name('pengeluaran');
    Route::post('/pengeluaran/create', [PengeluaranController::class, 'create_data']);
    Route::get('/pengeluaran/{id}', [PengeluaranController::class, 'get_edit_data']);
    Route::put('/pengeluaran/edit/{id}', [PengeluaranController::class, 'edit_data']);
    Route::delete('/pengeluaran/delete/{id}', [PengeluaranController::class, 'delete_data']);

    Route::get('/laporan_keuangan', function () { return view('auth/laporan_keuangan/laporan_keuangan', ['title' => 'Daftar Ulang']); })->name('laporan_keuangan');

    Route::get('/santri', [SantriController::class, 'index'])->name('santri');
});
