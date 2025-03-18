<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Bienvenido a la Aplicación</h1>
        
        @if(Auth::check())
            <p>Hola, {{ Auth::user()->nombre }}!</p>
            <p>Rol: {{ Auth::user()->rol }}</p>
            <a href="{{ route('profile') }}">Ver perfil</a>
            <a href="{{ route('classes') }}">Clases disponibles</a>
            @if(Auth::user()->rol == 'admin')
                <a href="{{ route('admin') }}">Administrar usuarios y clases</a>
            @endif
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <br>
                <button type="submit">Cerrar sesión</button>
            </form>
        @else
            <a href="{{ route('login') }}">Iniciar sesión</a>
            <a href="{{ route('register') }}">Registrarse</a>
        @endif
    </div>
</body>
</html>