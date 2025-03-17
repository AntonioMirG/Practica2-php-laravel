<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ClaseController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\MembresiaController;

Route::get('/', function () {
    return view('home');
});

Route::get('/register', [UsuarioController::class, 'create'])->name('register');
Route::post('/register', [UsuarioController::class, 'store']);

Route::get('/login', [UsuarioController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UsuarioController::class, 'login']);

Route::get('/profile', [UsuarioController::class, 'showProfile'])->middleware('auth')->name('profile');

Route::get('/classes', [ClaseController::class, 'index'])->name('classes');
Route::post('/classes/reserve', [ReservaController::class, 'store'])->middleware('auth')->name('reserve.class');

Route::get('/admin', [UsuarioController::class, 'admin'])->middleware('admin')->name('admin');
Route::post('/membership/update', [MembresiaController::class, 'update'])->middleware('auth')->name('membership.update');