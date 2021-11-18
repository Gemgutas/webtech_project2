<?php

use App\Http\Controllers\API\WeatheControllerAPI;
use App\Http\Controllers\API\WeatherPostController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post( 'login',[WeatheControllerAPI::class,'login']);
Route::post( 'register',[WeatheControllerAPI::class,'register']);
Route::post( 'reset-password',[WeatheControllerAPI::class,'resetPassword']);

Route::get('get-all-posts',[WeatherPostController::class,'getAllPosts']);
Route::get('get-post',[WeatherPostController::class,'getPost']);
Route::get('search-post',[WeatherPostController::class,'searchPost']);
