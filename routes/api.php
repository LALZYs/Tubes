<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\ApiAdminController;
use App\Http\Controllers\API\ApitourguideController;
use App\Http\Controllers\API\ApiTempatPariwisataController;

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

Route::resource('admins', ApiAdminController::class);
Route::resource('tempat_pariwisatas', ApiTempatPariwisataController::class);
Route::get('/rtourguide/{id}', [ApitourguideController::class,'show']);
Route::post('/rtourguide/delete/{id}', [ApitourguideController::class,'destroy']);
Route::post('/rtourguide/update/{id}', [ApitourguideController::class,'update']);
Route::post('/rtourguide',[ApitourguideController::class,'store']);
