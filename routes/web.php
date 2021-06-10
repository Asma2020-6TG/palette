<?php

use App\Http\Controllers\PalettesController;
use App\Http\Controllers\CategoryController;
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



Route::get('/welcome',[CategoryController::class,'index']);
Route::get('/categories',[CategoryController::class,'allCategories'])-> name('categories');
Route::get('/palettes/{id}',[CategoryController::class,'showPalettes']);
Route::get('/favourite',[PalettesController::class,'favourite']);
Route::resource('/palette', PalettesController::class);
