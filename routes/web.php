<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\SuperadminController;
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

// untuk superadmin dan pegawai

Route::group(['middleware' => 'guest'], function() {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/admin', [AuthController::class, 'login'])->name('login');
    Route::post('/admin', [AuthController::class, 'dologin']);
    Route::get('/product/{id}', [ProductController::class, 'show']);
});
// untuk superadmin
Route::group(['middleware' => ['auth', 'checkrole:1']], function() {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/redirect', [RedirectController::class, 'cek']);

    Route::get('/superadmin', [SuperadminController::class, 'index']);
    Route::resource('/produk', SuperadminController::class);
});