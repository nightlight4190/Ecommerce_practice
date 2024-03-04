<?php

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

Route::get('/', [App\Http\Controllers\SiteController::class, 'getHome'])->name('getHome');
Route::get('/about', [App\Http\Controllers\SiteController::class,'getAbout'])->name('getAbout');
Route::get('/contact', [App\Http\Controllers\SiteController::class, 'getContact'])->name('getContact');
Route::get('/gallery', [App\Http\Controllers\SiteController::class, 'getGallery']);
Route::get('/services', [App\Http\Controllers\SiteController::class, 'getServices']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/add/product', [App\Http\Controllers\HomeController::class, 'getAddproduct'])->name('getAddProduct');
Route::post('/add/product', [App\Http\Controllers\HomeController::class, 'postAddCategory'])->name('postAddCategory');
