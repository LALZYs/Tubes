<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RadminController;
use App\Http\Controllers\RtourguideController;
use App\Http\Controllers\RtouristController;
use App\Http\Controllers\LtouristController;
use App\Http\Controllers\LtourguideController;
use App\Http\Controllers\LogminController;
use App\Http\Controllers\LadminController;
use App\Http\Controllers\TempatPariwisataController;
use App\Http\Controllers\DaftarPariwisataController;
use App\Http\Controllers\DashminController;
use App\Http\Controllers\ProminController;
use App\Http\Controllers\DashtgController;
use App\Http\Controllers\ProtgController;
use App\Http\Controllers\DataTourguideController;

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

#LANDING PAGE
Route::get('/', function () {
    return view('layout.index');
})->name('index');

Route::get('/login', function () {
    return view('login.LoginAS');
})->name('login');

Route::get('/register', function () {
    return view('register.RegisterAS');
})->name('register');

Route::get('/about', function () {
    return view('about.about');
})->name('about');

#ADMIN
Route::get('/ladmin', function () {
    return view('login.ladmin');
})->name('ladmin');

Route::get('/radmin', function () {
    return view('register.radmin');
})->name('radmin');

Route::get('/logmin',[DashminController::class,'index'])->name('loggedmin');
Route::get('/promin',[ProminController::class,'index'])->name('promin');
Route::post('/radmin',[RadminController::class,'store']);
Route::post('/loggedmin',[LadminController::class,'store']);
Route::post('/logout',[LadminController::class,'logout']);
Route::get('admin/tempatpariwisata/{id}/delete', [TempatPariwisataController::class, 'destroy']);
Route::resource('admin/tempatpariwisata', TempatPariwisataController::class);
Route::post('/admin/tempatpariwisata',[TempatPariwisataController::class,'store']);
Route::get('/daftartourguide',[DataTourguideController::class,'index']);

#TOURIST
Route::get('/ltourist', function () {
    return view('login.ltourist');
})->name('ltourist');

Route::get('/rtourist', function () {
    return view('register.rtourist');
})->name('rtourist');

Route::get('/loggedtourist', function () {
    return view('loggedtourist.landingtourist');
})->name('loggedtourist');

Route::post('/rtourist',[RtouristController::class,'store']);
Route::resource('tourist/DestinasiPariwisata', DaftarPariwisataController::class);

#TOURGUIDE
Route::get('/ltourguide', function () {
    return view('login.ltourguide');
})->name('ltourguide');

Route::get('/rtourguide', function () {
    return view('register.rtourguide');
})->name('rtourguide');

Route::get('/loggedtour', function () {
    return view('loggedtour.halamantg');
})->name('loggedtour');



Route::post('/rtourguide',[RtourguideController::class,'store']);
Route::post('/loggedtour',[LtourguideController::class,'store']);
Route::post('/landingtourist',[LtouristController::class,'store']);
Route::post('/logout',[LtourguideController::class,'logout']);
Route::get('/logtg',[DashtgController::class,'index'])->name('loggedtour');
Route::get('/protg',[ProtgController::class,'index'])->name('protg');
Route::get('tourguide/DaftarPariwisata/{id}/delete', [DaftarPariwisataController::class, 'destroy']);
Route::resource('tourguide/DaftarPariwisata', DaftarPariwisataController::class);









