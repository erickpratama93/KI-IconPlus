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
// Route::get('/user/login', function () {
//     return view('auth');
// });

//homepage route
Route::get('/user/homepage', function () {
    return view('homepage');
})->name('homepage');
Route::get('/user/info', function () {
    return view('info');
})->name('info');
Route::get('/user/lowongan', function () {
    return view('lowongan');
})->name('lowongan');
Route::get('/user/daftar', function () {
    return view('daftar');
})->name('daftar');
Route::get('/user/guruTamu', function () {
    return view('guruTamu');
})->name('guruTamu');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('is_admin');
