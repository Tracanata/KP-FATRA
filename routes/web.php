<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LulusanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DashboardMahasiswaController;
use App\Http\Controllers\DashboardOrtusController;
use App\Http\Controllers\DashboardPrestasiController;
use App\Http\Controllers\DashboardProfilController;
use App\Http\Controllers\DashboardWorkController;

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

Route::get('/',[HomeController::class, 'index']);

Route::get('/promahasiswas',[MahasiswaController::class, 'index']);
Route::get('/promahasiswas/{mahasiswa:id}',[MahasiswaController::class, 'show']);

Route::get('/prolulusans',[LulusanController::class, 'index']);
Route::get('/prolulusans/{mahasiswa:id}',[LulusanController::class, 'show']);

// Login
Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
// End Login

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('/dashboard/mahasiswas', DashboardMahasiswaController::class)->middleware('staff');
Route::resource('/dashboard/profils', DashboardProfilController::class)->middleware('mahasiswa');
Route::resource('/dashboard/ortus', DashboardOrtusController::class)->middleware('mahasiswa');
Route::resource('/dashboard/works', DashboardWorkController::class)->middleware('mahasiswa');
Route::resource('/dashboard/prestasis', DashboardPrestasiController::class)->middleware('mahasiswa');