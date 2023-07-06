<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\developmentController;
use App\Http\Controllers\ecommerceController;
use App\Http\Controllers\portfolioController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\mailController;

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
Route::get('about', aboutController::class, 'index')->name('about');
Route::get('development', developmentController::class, 'index')->name('development');
Route::get('ecommerce', ecommerceController::class, 'index')->name('ecommerce');
Route::get('portfolio', portfolioController::class, 'index')->name('portfolio');
Route::get('contact', contactController::class, 'index')->name('contact');
Route::post('mail', [mailController::class, 'store'])->name('mail');
