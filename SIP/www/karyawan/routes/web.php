<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/absensi', function () {
    return view('absensi');
});

Route::get('/pekerjaan', function () {
    return view('pekerjaan');
});

Route::get('/aspirasi', function () {
    return view('aspirasi');
});

Route::get('/cuti', function () {
    return view('pengajuan.cuti');
});

Route::get('/izin', function () {
    return view('pengajuan.izin');
});
