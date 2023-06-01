<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Dashboard2Controller;
use App\Http\Controllers\ProdukController;
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

Route::get('/dashboard2', [Dashboard2Controller::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);