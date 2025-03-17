<form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required>
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
        <label for="role">Rol:</label>
        <select id="role" name="role">
            <option value="usuario">Usuario</option>
            <option value="admin">Administrador</option>
        </select>
    </div>
    <div>
        <label for="profile_picture">Foto de perfil:</label>
        <input type="file" id="profile_picture" name="profile_picture" accept="image/*">
    </div>
    <div>
        <label for="membership">Tipo de membresía:</label>
        <select id="membership" name="membership">
            <option value="basica">Básica</option>
            <option value="premium">Premium</option>
            <option value="vip">VIP</option>
        </select>
    </div>
    <button type="submit">Registrar</button>
</form>