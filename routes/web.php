<?php
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ClaseController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\MembresiaController;
use Illuminate\Support\Facades\Route;

// Página de inicio
Route::get('/', function () {
    return view('home');
})->name('home');

// Formulario de registro
Route::get('/register', [UsuarioController::class, 'create'])->name('register');

// Manejar el envío del formulario de registro
Route::post('/register', [UsuarioController::class, 'store'])->name('register.store');

// Formulario de inicio de sesión
Route::get('/login', function () {
    return view('login');
})->name('login');

// Manejar el envío del formulario de inicio de sesión
Route::post('/login', [UsuarioController::class, 'login'])->name('login.store');

// Cerrar sesión
Route::post('/logout', [UsuarioController::class, 'logout'])->name('logout');

// Perfil del usuario
Route::get('/profile', [UsuarioController::class, 'profile'])->name('profile');

// Listado de usuarios
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');

// Listado de clases
Route::get('/classes', [ClaseController::class, 'index'])->name('classes');
Route::post('/classes/{id}/reservar', [ClaseController::class, 'reservar'])->name('clases.reservar');

// Gestión de usuarios y clases para el administrador
Route::get('/admin', [UsuarioController::class, 'admin'])->name('admin');

// Rutas para la gestión de usuarios
Route::resource('usuarios', UsuarioController::class);

// Rutas para la gestión de clases
Route::resource('clases', ClaseController::class);

// Rutas para la gestión de reservas
Route::resource('reservas', ReservaController::class);

// Rutas para la gestión de membresías
Route::resource('membresias', MembresiaController::class);