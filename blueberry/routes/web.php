<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nosotrosController;
use App\Http\Controllers\desarrolloController;
use App\Http\Controllers\ecommerceController;
use App\Http\Controllers\portafolioController;
use App\Http\Controllers\contactoController;
use App\Http\Controllers\terminosController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\developmentController;
use App\Http\Controllers\ecommercEngController;
use App\Http\Controllers\portfolioController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\termsController;
use App\Http\Controllers\mailController;

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
Route::get('nosotros', nosotrosController::class, 'index')->name('nosotros');
Route::get('desarrollo', desarrolloController::class, 'index')->name('desarrollo');
Route::get('ecommerce', ecommerceController::class, 'index')->name('ecommerce');
Route::get('portafolio', portafolioController::class, 'index')->name('portafolio');
Route::get('terminos', terminosController::class, 'index')->name('terminos');
Route::get('contacto', contactoController::class, 'index')->name('contacto');
Route::get('home', homeController::class, 'index')->name('home');
Route::get('about', aboutController::class, 'index')->name('about');
Route::get('development', developmentController::class, 'index')->name('development');
Route::get('ecommerceEng', ecommercEngController::class, 'index')->name('ecommerceEng');
Route::get('portfolio', portfolioController::class, 'index')->name('portfolio');
Route::get('terms', termsController::class, 'index')->name('terms');
Route::get('contact', contactController::class, 'index')->name('contact');
Route::post('mail', [mailController::class, 'store'])->name('mail');

