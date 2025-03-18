<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Clases</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Clases Disponibles</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Profesor Asignado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clases as $clase)
                <tr>
                    <td>{{ $clase->nombre }}</td>
                    <td>{{ $clase->descripcion }}</td>
                    <td>{{ $clase->profesor_asignado }}</td>
                    <td>
                        <form action="{{ route('clases.reservar', $clase->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary">Reservar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('home') }}">Atrás</a>
    </div>
</body>
</html>