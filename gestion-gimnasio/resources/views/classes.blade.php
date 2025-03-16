<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases Disponibles</title>
</head>
<body>
    <h1>Clases Disponibles</h1>
    <ul>
        @foreach($clases as $clase)
            <li>
                <strong>{{ $clase->nombre }}</strong> - {{ $clase->descripcion }}<br>
                Profesor: {{ $clase->profesor->nombre }}<br>
                <form action="/reserve" method="POST">
                    @csrf
                    <input type="hidden" name="clase_id" value="{{ $clase->id }}">
                    <label>Fecha: <input type="date" name="fecha_reserva" required></label>
                    <button type="submit">Reservar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
