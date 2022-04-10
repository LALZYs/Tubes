<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
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

Route::get('/lasadmin', function () {
    return view('login.lasadmin');
})->name('lasadmin');






Route::get('/registadmin',[RegisterController::class, 'index']);

Route::get('/loginadmin',[LoginController::class, 'index']);

