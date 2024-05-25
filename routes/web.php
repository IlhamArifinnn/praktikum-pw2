<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\ParamedikController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\UnitKerjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/pasien', [PasienController::class, 'show']);
Route::get('/paramedik', [ParamedikController::class, 'show']);
Route::get('/periksa', [PeriksaController::class, 'show']);
Route::get('/kelurahan', [KelurahanController::class, 'show']);
Route::get('/unit_kerja', [UnitKerjaController::class, 'show']);
