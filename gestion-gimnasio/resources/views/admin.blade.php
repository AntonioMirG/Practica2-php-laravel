<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración</title>
</head>
<body>
    <h1>Panel de Administración</h1>

    <h2>Usuarios</h2>
    <ul>
        @foreach($usuarios as $usuario)
            <li>{{ $usuario->nombre }} - {{ $usuario->email }} ({{ $usuario->rol }})</li>
        @endforeach
    </ul>

    <h2>Clases</h2>
    <ul>
        @foreach($clases as $clase)
            <li>
                {{ $clase->nombre }} - {{ $clase->descripcion }} 
                <form action="/admin/clases/{{ $clase->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>

    <form action="/logout" method="POST">
        @csrf
        <button type="submit">Cerrar sesión</button>
    </form>
</body>
</html>
