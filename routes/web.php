<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// frontend

Route::get('/artikel', [FrontController::class, 'artikel']);

Route::get('/artikel/{id}', [FrontController::class, 'view'])->name('detail.single');

Route::prefix('admin')->group(function () {
    Route::resource('kategori', KategoriController::class);
    Route::resource('artikel', ArtikelController::class);

});
