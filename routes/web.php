<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/pengumuman', function () {
    return view('');
});

Route::group(['middleware', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.landing');

    Route::get('/lowongan', [App\Http\Controllers\HomeController::class, 'lowongan'])->name('lowongan.index');

    Route::get('/komentar', [App\Http\Controllers\HomeController::class, 'komentar'])->name('komentar.index');

    Route::get('/perusahaan', [App\Http\Controllers\HomeController::class, 'perusahaan'])->name('perusahaan.index');


    // Route::get('/lowongan', function () {
    //     return view('admin.lowongan.index');
    // })->name('');

    // Route::get('/komentar', function () {
    //     return view('admin.komentar.index');
    // })->name('');

    // Route::get('/perusahaan', function () {
    //     return view('admin.perusahaan.index');
    // })->name('');
});



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
