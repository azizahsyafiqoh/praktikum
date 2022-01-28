<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BioController;
use App\Http\Controllers\BiodataController;

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
Route::get('/list', function () {
    return view('list_siswa');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/home', [HomeController::class,'index'])->name('home');
Route::get('/biodata', [BioController::class, 'index'])->name('biodata');
Route::get('/list_siswa', [BiodataController::class, 'index'])->name('list_siswa');
Route::get('/form', [BiodataController::class, 'create'])->name('add-siswa');
Route::post('/store_siswa', [BiodataController::class, 'store']);

Route::get('/post', [PostController::class, 'index']);
/*
