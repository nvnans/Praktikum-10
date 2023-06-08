<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Dashboard2Controller;
use App\Http\Controllers\kategori_produk;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\ProdukController;
use App\Models\KategoriProduk;
use App\Models\Produk;
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
    return view('welcome');
});

//Route untuk Dashboard
//Route::get('/dashboard', function () {
 //   return view('admin.dashboard');
//});

//Route untuk Dashboard pake Controller
Route::get('/dashboard', [DashboardController::class, 'index']);

//Route untuk Produk
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');

Route::get('/kategori', [KategoriProdukController::class, 'index'])->name('kategoriproduk');

Route::get('/dashboard2', [Dashboard2Controller::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

//Route untuk Create and Store
Route::get('/produk/create', [ProdukController::class, 'create']);
//Route kirim data ke Store
Route::post('/produk/store', [ProdukController::class, 'store']); 

//Route form edit
Route::get('produk/edit/{id}', [ProdukController::class, 'edit']);
//Route edit data
Route::put('/produk/update/{id}', [ProdukController::class, 'update']);
//Route delete data
Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);