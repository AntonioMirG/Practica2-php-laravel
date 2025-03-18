<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
</head>
<body>
    <h1>Registro de Usuario</h1>
    <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <label for="password_confirmation">Confirmar Contraseña:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>
        <div>
            <label for="rol">Rol:</label>
            <select id="rol" name="rol" required>
                <option value="Usuario">Usuario</option>
                <option value="Profesor">Profesor</option>
                <option value="Administrador">Administrador</option>
            </select>
        </div>
        <div>
            <label for="membresia">Membresía:</label>
            <select id="membresia" name="membresia" required>
                <option value="Básica">Básica</option>
                <option value="Premium">Premium</option>
                <option value="VIP">VIP</option>
            </select>
        </div>
        <div>
            <label for="foto_perfil">Foto de Perfil:</label>
            <input type="file" id="foto_perfil" name="foto_perfil">
        </div>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>