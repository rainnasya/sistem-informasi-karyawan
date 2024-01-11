<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KaryawanDashboardController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\GolonganDashboardController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\JabatanDashboardController;
use App\Http\Controllers\PenggajianController;
use App\Http\Controllers\PenggajianDashboardController;
use App\Http\Controllers\PensiunController;
use App\Http\Controllers\PensiunDashboardController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PendidikanDashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

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

Route::get('/home', function () {
    return view('home');
});
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/karyawan', KaryawanController::class);
Route::resource('/golongan', GolonganController::class);
Route::resource('/jabatan', JabatanController::class);
Route::resource('/penggajian', PenggajianController::class);
Route::resource('/pendidikan', PendidikanController::class);
Route::resource('/pensiun', PensiunController::class);

Route::get('/login', [LoginController::class,'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::get('/logout', [LoginController::class,'logout']);

Route::resource('/karyawandashboard', KaryawanDashboardController::class)->middleware('auth');
Route::resource('/golongandashboard', GolonganDashboardController::class)->middleware('auth');
Route::resource('/pendidikandashboard', PendidikanDashboardController::class)->middleware('auth');
Route::resource('/jabatandashboard', JabatanDashboardController::class)->middleware('auth');
Route::resource('/pensiundashboard', PensiunDashboardController::class)->middleware('auth');
Route::resource('/penggajiandashboard', PenggajianDashboardController::class)->middleware('auth');

