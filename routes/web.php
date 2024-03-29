<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gaji;
use App\Http\Controllers\home;
use App\Http\Controllers\jabatan;
use App\Http\Controllers\presensi;

Route::get('gaji', [Gaji::class, "index"]);
Route::get('home', [Home::class, "index"]);
Route::get('jabatan', [Jabatan::class, "index"]);
Route::get('presensi', [presensi::class, "index"]);
Route::get('/', function () {
    return view('main');
});
