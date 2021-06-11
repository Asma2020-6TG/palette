<?php

use App\Http\Controllers\PaletteApiController;
use App\Http\Controllers\CategoryApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::get('/welcome', function (){
    return 'get start';
});
Route::get('/categories',[CategoryApiController::class, 'index'] );
Route::get('/palettes/categoryPalettes/{category_id}',[PaletteApiController::class,'categoryPalettes']);
Route::get('/palettes/paletteColors/{palette_id}',[PaletteApiController::class,'paletteColors']);
Route::get('/palettes/id',[PaletteApiController::class, 'show'] );
Route::post('/palettes',[PaletteApiController::class, 'store']);
Route::get('/palettes/favourite/{favourite}',[PaletteApiController::class,'favourite']);
Route::resource('palettes',PaletteApiController::class);
