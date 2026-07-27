<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserpetugasController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Input_siswaController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\input_transaksiController;
use App\Http\Controllers\RekeningController;
use App\Http\Controllers\Input_rekeningController;

Route::get('/', function () {
    return view('auth/login');
});
Route::get('/rekening', function () {
    return view('data/data_rekening');
});
Route::get('/transaksi', function () {
    return view('data/data_trasaksi');
});
Route::get('/siswa', function () {
    return view('data/data_siswa');
});
Route::get('/Contoh', function () {
    return view('/layouts/app');
});
Route::get('/iprekening', function () {
    return view('/input/input_rekening');
});
// Route::get('/ipsiswa', function () {
//     return view('/input/input_siswa');
// });
Route::get('/iptrasaksi', function () {
    return view('/input/input_trasaksi');
});

// Route::get('/admin/petugas', [SiswaController::class, 'index'])
//     ->name('petugas.index');
Route::get('/adminlogin', [UserpetugasController::class, 'showLoginForm'])->name('adminlogin');
Route::post('/adminlogin', [UserpetugasController::class, 'login'])->name('petugas.login.submit');

Route::middleware('auth:petugas')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/siswa', [SiswaController::class, 'siswa'])->name('data.data_siswa');
    Route::get('/siswa/input', [SiswaController::class, 'input'])->name('siswa.input_siswa');
    Route::post('/siswa/input', [SiswaController::class, 'push'])->name('siswa.push');
    Route::get('/rekening', [RekeningController::class, 'rekening'])->name('data.data_rekening');
    Route::get('/rekening/input', [RekeningController::class, 'input'])->name('input.input_rekening');
    Route::post('/rekening/input', [RekeningController::class, 'push'])->name('input.push');
    Route::get('/transaksi', [TransaksiController::class, 'transaksi'])->name('data.data_transaksi');
    Route::get('/transaksi/input', [TransaksiController::class, 'input'])->name('input.input_transaksi');
    Route::post('/transaksi/input', [TransaksiController::class, 'push'])->name('input.push');
    Route::post('/logout-petugas', [UserpetugasController::class, 'logout'])->name('petugas.logout');
});