<!DOCTYPE html>
<html>
<head>
    <title>Perfil del Usuario</title>
</head>
<body>
    <h1>Perfil del Usuario</h1>
    <p><strong>Nombre:</strong> {{ $usuario->nombre }}</p>
    <p><strong>Email:</strong> {{ $usuario->email }}</p>
    <p><strong>Rol:</strong> {{ $usuario->rol }}</p>
    <p><strong>Foto de Perfil:</strong></p>
    @if($usuario->foto_perfil)
        <img src="{{ Storage::url($usuario->foto_perfil) }}" alt="Foto de Perfil" width="100">
    @else
        <p>No tiene foto de perfil.</p>
    @endif
</body>
</html>