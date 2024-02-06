<?php

use App\Http\Controllers\Admin\BarangController;
use App\Http\Controllers\Admin\PeminjamanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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

// Route::get('/', function () {
//     return view('auth.login');
// });

// Route Auth

Route::get('/login',[AuthController::class, 'index'])->name('auth.index');
Route::post('/login',[AuthController::class, 'authanticate'])->name('auth.authen');
Route::get('/register',[AuthController::class, 'register'])->name('auth.register');
Route::post('/register',[AuthController::class, 'store'])->name('auth.store');
Route::get('/reset',[AuthController::class, 'reset'])->name('auth.reset');



// Route Admiin
Route::get('/admin-dashboard',[DashboardController::class,'index'])->name('admin.dashboard');


// Route Stoc In
Route::get('/admin-dashboard/StockIn',[DashboardController::class,'index'])->name('stockIn.index');

// Route Barang
Route::get('/admin-dashboard/Barang',[BarangController::class,'index'])->name('barang.index');

// Route Peminjaman
Route::get('/admin-dashboard/Peminjaman',[PeminjamanController::class,'index'])->name('peminjaman.index');