<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <h1>Bienvenido al Gimnasio</h1>
    @auth
        <p>Hola, {{ Auth::user()->nombre }} (<a href="/profile">Perfil</a>)</p>
        <form action="/logout" method="POST">
            @csrf
            <button type="submit">Cerrar sesión</button>
        </form>
    @else
        <a href="/register">Registrarse</a> | <a href="/login">Iniciar sesión</a>
    @endauth
</body>
</html>
