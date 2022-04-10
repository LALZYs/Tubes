<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RadminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LadminController;
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
    return view('layout.index');
})->name('index');

Route::get('/login', function () {
    return view('login.LoginAS');
})->name('login');

Route::get('/register', function () {
    return view('register.RegisterAS');
})->name('register');

Route::get('/ladmin', function () {
    return view('login.ladmin');
})->name('ladmin');

Route::get('/radmin', function () {
    return view('register.radmin');
})->name('radmin');

Route::get('/about', function () {
    return view('about.about');
})->name('about');






Route::post('/home',[LoginController::class,'gin']);
Route::post('/radmin',[RadminController::class,'store']);
Route::post('/ladmin',[LadminController::class,'store']);



