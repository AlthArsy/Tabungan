<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserpetugasController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\RekeningController;

// Route::get('/', function () {
//     return view('auth/login');
// });

Route::get('/', [UserpetugasController::class, 'showLoginForm'])->name('adminlogin');
Route::post('/', [UserpetugasController::class, 'login'])->name('petugas.login.submit');

Route::middleware('auth:petugas')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/siswa', [SiswaController::class, 'siswa'])->name('data.data_siswa');
    Route::get('/siswa/input', [SiswaController::class, 'input'])->name('siswa.input_siswa');
    Route::post('/siswa/input', [SiswaController::class, 'push'])->name('siswa.push');
    Route::get('/rekening', [RekeningController::class, 'rekening'])->name('data.data_rekening');
    Route::get('/rekening/input', [RekeningController::class, 'input'])->name('input.input_rekening');
    Route::post('/rekening/input', [RekeningController::class, 'push'])->name('rekening.push');
    Route::get('/transaksi', [TransaksiController::class, 'transaksi'])->name('data.data_transaksi');
    Route::get('/transaksi/input', [TransaksiController::class, 'input'])->name('input.input_transaksi');
    Route::post('/transaksi/input', [TransaksiController::class, 'push'])->name('transaksi.push');
    Route::post('/logout-petugas', [UserpetugasController::class, 'logout'])->name('petugas.logout');
});