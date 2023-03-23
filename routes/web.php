<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RekapController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\PemesanController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KendaraanController;

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

// Route::get('/', function () {
//     return view('login');
// });
Route::get('/', [UserController::class, 'index'])->middleware('guest')->name('index');
Route::post('/', [UserController::class, 'login'])->name('login');


Route::group(['middleware'=>['auth','CekLevel:admin,petugas,akomodasi']],function () {

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('/pesanan', PesananController::class);
Route::post('/logout', [UserController::class, 'logout']);

// Route::put('/pesanan/acc/{id}', [PesananController::class, 'acc_petugas']);
});

Route::group(['middleware'=>['auth','CekLevel:admin']],function () {
Route::post('/kendaraan/create', [KendaraanController::class, 'store']);
Route::resource('/kendaraan', KendaraanController::class);

Route::post('/pesanan/create', [PesananController::class, 'store']);

Route::post('/rekap', [RekapController::class, 'buat_rekap']);
Route::get('/rekap', [RekapController::class, 'index']);
Route::get('/driver', [DriverController::class, 'index']);
Route::get('/pemesan', [PemesanController::class, 'index']);

Route::get('/rekapexport', [RekapController::class, 'kendaraanexport'])->name('export');

});