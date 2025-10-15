<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFakultasController;
use App\Http\Controllers\DataProdiController;
use App\Http\Controllers\DataMahasiswaController;

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
// route untuk halaman utama

Route::get('/',[App\http\Controllers\DashboardController::class,"index"])->name('dashboard.index');
Route::get('/datafakultas', [DataFakultasController::class, 'index'])->name('datafakultas.index');
Route::get('/dataprodi', [DataProdiController::class, 'index'])->name('dataprodi.index');
Route::get('/datadosen',[App\http\Controllers\DataDosenController::class,"index"])->name('datadosen.index');
Route::get('/datamahasiswa',[App\http\Controllers\DataMahasiswaController::class,"index"])->name('datamahasiswa.index');