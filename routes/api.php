<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductoController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(ProductoController::class)->group(function () {
    Route::get('/Productos' ,'index')->name('user');
    Route::post('/Save', 'store')->name('user--');
    Route::put('/Update/{id}', 'update')->name('user--1');
    Route::get('/Producto/{id}', 'show')->name('user--2');
    Route::delete('/Delete/{id}', 'destroy')->name('user--3');
});;
