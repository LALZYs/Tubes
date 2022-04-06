<?php

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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/login', function () {
    return view('LoginAS');
})->name('login');

Route::get('/register', function () {
    return view('RegisterAS');
})->name('register');

Route::get('/admin', function () {
    return view('RegisterAS');
})->name('register');