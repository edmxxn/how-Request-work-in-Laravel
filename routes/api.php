<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TextController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\PostController;

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

Route::get('/ShowText/{show}/{a}/{b}/{c}/{d}', [TextController::class, 'ShowText']);
Route::get('/Calculator', [CalculatorController::class, 'Calculate']);
Route::get('/get-post-data', [PostController::class, 'GetPostData']);
Route::post('/store-post-data', [PostController::class, 'StorePostData']);
Route::post('/update-post-data/{id}', [PostController::class, 'UpdatePostData']);
Route::post('/delete-post-data/{id}', [PostController::class, 'DeletePostData']);
Route::post('/generate-data/{number}', [PostController::class, 'AutoGenerate']);