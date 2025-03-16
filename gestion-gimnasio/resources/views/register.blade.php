<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>

<body>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1>Registro de Usuario</h1>
    <form action="/register" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="nombre" placeholder="Nombre" required><br>
        <input type="email" name="email" placeholder="Correo Electrónico" required><br>
        <input type="password" name="password" placeholder="Contraseña" required><br>
        <input type="password" name="password_confirmation" placeholder="Confirmar Contraseña" required><br>
        <label>Foto de Perfil: <input type="file" name="foto_perfil"></label><br>
        <label>Selecciona una Membresía:</label>
        <select name="membresia">
            <option value="Básica">Básica</option>
            <option value="Premium">Premium</option>
            <option value="VIP">VIP</option>
        </select><br>
        <button type="submit">Registrarse</button>
    </form>

</body>

</html>