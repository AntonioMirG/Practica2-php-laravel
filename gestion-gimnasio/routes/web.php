<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ClaseController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\MembresiaController;

// Página principal
Route::get('/', [UsuarioController::class, 'home'])->name('home');

// Formulario de registro
Route::get('/register', [UsuarioController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [UsuarioController::class, 'register']);

// Formulario de login
Route::get('/login', [UsuarioController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UsuarioController::class, 'login']);

// Página de perfil (requiere autenticación)
Route::get('/profile', [UsuarioController::class, 'profile'])->middleware('auth')->name('profile');

// Rutas de clases y reservas
Route::get('/classes', [ClaseController::class, 'index']);
Route::post('/reserve', [ReservaController::class, 'store']);
Route::post('/membresia', [MembresiaController::class, 'update']);

// Ruta de administrador (requiere autenticación y rol de administrador)
Route::get('/admin', [UsuarioController::class, 'admin'])->middleware('admin')->name('admin');
