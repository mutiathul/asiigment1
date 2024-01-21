<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\LaptopCpntroller;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\Autho;
use App\Models\Kelas;
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
//Route::get('/kelas', [KelasController::class, 'index']);
//Route::get('siswa', [SiswaController::class, 'index']);
Route::resource('/laptop', LaptopCpntroller::class);
Route::resource('posts','App\Http\Controllers\PostController');
Route::resource('/books', \App\Http\Controllers\BookController::class);
Route::resource('/author', \App\Http\Controllers\AuthorController::class);
Route::resource('/kelas', \App\Http\Controllers\KelasController::class);
Route::resource('/siswa', \App\Http\Controllers\SiswaController::class);
Route::post('kelas', function(Request $request) {
    return Kelas::create($request->all);
});
