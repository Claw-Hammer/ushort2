<?php

use App\Http\Controllers\Api\UrlController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1/url'], function () {
    Route::post('/shortener', [UrlController::class, 'index'])->name('api.v1.url.shortener');
    Route::get('/top', [UrlController::class, 'showTop'])->name('api.v1.url.top');
    Route::get('/real', [UrlController::class, 'showReal'])->name('api.v1.url.real');
});
