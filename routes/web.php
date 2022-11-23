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
    // return view('welcome');
    return redirect('/login');
});

Auth::routes();


Route::group(['middleware' => ['role:admin']], function () {
    //
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
    Route::get('/solusi', [App\Http\Controllers\SolusiController::class, 'index'])->name('solusi.index');
    Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
});

Route::group(['middleware' => ['role:user|admin']], function () {
    //
    Route::get('/inisiasi-projek', [App\Http\Controllers\InisiasiProjekController::class, 'index'])->name('inisiasi_projek.index');
    Route::post('/inisiasi-projek/store', [App\Http\Controllers\InisiasiProjekController::class, 'store'])->name('inisiasi_projek.store');
});
