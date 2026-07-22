<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('auth/login');
});
Route::get('/oewiuruerueriower', function () {
    return view('auth/loginmina');
});
Route::get('/Home', function () {
    return view('dashboard');
});
Route::get('/ls', function () {
    return view('login');
});
Route::get('/admin/siswa', [SiswaController::class, 'index'])
    ->name('siswa.index');
Route::get('/admin/siswa/create', [SiswaController::class, 'create'])
    ->name('siswa.create');
Route::post('/admin/siswa', [SiswaController::class, 'store'])
    ->name('siswa.store');
