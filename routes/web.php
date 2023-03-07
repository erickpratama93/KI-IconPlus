<?php

use App\Http\Controllers\HomeController;
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
    return view('user.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//user route
Route::middleware('auth')->group(function () {
    Route::get('/news', [HomeController::class, 'news'])->name('news');
    Route::get('/GuruTamu', [HomeController::class, 'guruTamu'])->name('guruTamu');
    Route::get('/Lowongan', [HomeController::class, 'lowongan'])->name('lowongan');
    Route::get('/DataPkl', [HomeController::class, 'dataPkl'])->name('pkl.data');
    Route::get('/DaftarPkl', [HomeController::class, 'daftarPkl'])->name('pkl.daftar');
    Route::post('/Daftarpkl/daftar', [HomeController::class, 'storeInternship'])->name('intern');
    // Route::get('/Daftarpkls/{id}/print', [HomeController::class, 'printDocument'])->name('print');
    // Route::get('/download/', 'FileController@download');
    // Route::get('/documents/{id}/print', 'DocumentController@printDocument');


});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('homepage')->middleware('auth');
// Route::get('user/lowongan', [App\Http\Controllers\HomeController::class, 'loker'])->name('lowongan')->middleware('auth');
Route::get('/', [App\Http\Controllers\LandingController::class, 'index']);


require __DIR__ . '/auth.php';
