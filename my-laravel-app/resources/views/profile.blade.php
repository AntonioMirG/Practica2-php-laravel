<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Perfil de Usuario</h1>
        <div class="profile">
            <img src="{{ asset('storage/' . $usuario->foto) }}" alt="Foto de perfil" class="profile-pic">
            <h2>{{ $usuario->nombre }}</h2>
            <p>Email: {{ $usuario->email }}</p>
            <p>Rol: {{ $usuario->rol }}</p>
            <p>Membresía: {{ $usuario->membresia->tipo }}</p>
        </div>
        <a href="{{ route('home') }}" class="btn btn-primary">Volver a Inicio</a>
    </div>
</body>
</html>