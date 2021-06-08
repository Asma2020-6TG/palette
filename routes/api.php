<?php

use App\Http\Controllers\PaletteApiController;
use App\Http\Controllers\CategoryController;
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
Route::get('/categories',[CategoryController::class, 'index'] );

Route::get('/palettes/id',[PaletteApiController::class, 'show'] );
Route::post('/palettes',[PaletteApiController::class, 'store']);
