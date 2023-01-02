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
    return view('landing');
});
Route::get('/user/login', function () {
    return view('auth');
})->name('login');
Route::get('/user/signup', function () {
    return view('signup');
})->name('signup');

//homepage route
Route::get('/user/homepage', function () {
    return view('homepage');
})->name('homepage');
Route::get('/user/event', function () {
    return view('event');
})->name('event');
Route::get('/user/profil', function () {
    return view('profil');
})->name('profil');
Route::get('/user/status', function () {
    return view('status');
})->name('status');
