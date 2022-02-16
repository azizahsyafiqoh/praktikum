<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BioController;
use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Auth;

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
    return view('home2');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/', [HomeController::class,'index'])->name('home2php');
Route::get('/biodata', [BioController::class, 'index'])->name('biodata');
Route::get('/list_siswa', [BiodataController::class, 'index'])->name('list_siswa');
Route::get('/form', [BiodataController::class, 'create'])->name('add-siswa');
Route::post('/store_siswa', [BiodataController::class, 'store']);
Route::get('/edit_siswa', [BiodataController::class, 'edit']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

