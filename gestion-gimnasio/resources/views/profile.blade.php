<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>
    <h1>Perfil de {{ Auth::user()->nombre }}</h1>
    <p>Email: {{ Auth::user()->email }}</p>
    <p>Rol: {{ Auth::user()->rol }}</p>
    <p>Membresía: {{ Auth::user()->membresia->tipo }}</p>
    <img src="{{ asset('storage/' . Auth::user()->foto_perfil) }}" alt="Foto de perfil" width="100"><br>
    
    <h2>Mis Reservas</h2>
    <ul>
        @foreach(Auth::user()->reservas as $reserva)
            <li>{{ $reserva->clase->nombre }} - {{ $reserva->fecha_reserva }}</li>
        @endforeach
    </ul>

    <form action="/logout" method="POST">
        @csrf
        <button type="submit">Cerrar sesión</button>
    </form>
</body>
</html>
