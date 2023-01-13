<?php

use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//homepage route
// Route::get('/user/homepage', function () {
//     return view('homepage');
// })->name('homepage');
Route::get('/user/info', function () {
    return view('info');
})->name('info');
// Route::get('/user/lowongan', function () {
//     return view('lowongan');
// })->name('lowongan');
Route::get('/user/daftar', function () {
    return view('daftar');
})->name('daftar');
Route::get('/user/guruTamu', function () {
    return view('guruTamu');
})->name('guruTamu');
Route::get('/user/detail-news', function () {
    return view('newsDetail');
})->name('newsDetail');
Route::get('/user/detail-job', function () {
    return view('detailJobs');
})->name('detailJobs');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('homepage')->middleware('auth');
Route::get('user/lowongan', [App\Http\Controllers\HomeController::class, 'loker'])->name('lowongan')->middleware('auth');
Route::get('/', [App\Http\Controllers\LandingController::class, 'index']);


require __DIR__ . '/auth.php';
