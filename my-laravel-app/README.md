# Proyecto de Gestión de Clases en Laravel

Este proyecto es una aplicación web desarrollada en Laravel que permite la gestión de usuarios, clases, reservas y membresías. A continuación se describen las características y componentes principales del proyecto.

## Estructura del Proyecto

- **app/Http/Controllers**
  - `UsuarioController.php`: Controlador para gestionar el perfil del usuario y la vista de administración.
  - `ClaseController.php`: Controlador para mostrar el listado de clases disponibles.
  - `ReservaController.php`: Controlador para gestionar las reservas de clases.
  - `MembresiaController.php`: Controlador para modificar la membresía del usuario.

- **app/Models**
  - `Usuario.php`: Modelo que representa la tabla de usuarios en la base de datos.
  - `Clase.php`: Modelo que representa la tabla de clases.
  - `Reserva.php`: Modelo que representa la tabla de reservas.
  - `Membresia.php`: Modelo que representa la tabla de membresías.

- **database/migrations**
  - `create_usuarios_table.php`: Migración para crear la tabla de usuarios.
  - `create_clases_table.php`: Migración para crear la tabla de clases.
  - `create_reservas_table.php`: Migración para crear la tabla de reservas.
  - `create_membresias_table.php`: Migración para crear la tabla de membresías.

- **resources/views**
  - `home.blade.php`: Página de inicio con opciones de login y navegación según el rol del usuario.
  - `register.blade.php`: Formulario de registro que permite la carga de imagen y selección de membresía.
  - `login.blade.php`: Formulario de inicio de sesión.
  - `profile.blade.php`: Vista del perfil del usuario con su foto y tipo de membresía.
  - `classes.blade.php`: Listado de clases disponibles para reservar.
  - `admin.blade.php`: Gestión de usuarios y clases para el administrador.

- **routes**
  - `web.php`: Archivo que define las rutas de la aplicación.

- **composer.json**: Archivo de configuración de las dependencias del proyecto.

## Instalación

1. Clona el repositorio en tu máquina local.
2. Navega al directorio del proyecto.
3. Ejecuta `composer install` para instalar las dependencias.
4. Configura tu archivo `.env` con los detalles de tu base de datos.
5. Ejecuta las migraciones con `php artisan migrate`.
6. Inicia el servidor de desarrollo con `php artisan serve`.

## Uso

- Accede a la aplicación a través de `http://localhost:8000`.
- Regístrate como nuevo usuario o inicia sesión si ya tienes una cuenta.
- Explora las diferentes funcionalidades según tu rol (usuario o administrador).

## Contribuciones

Las contribuciones son bienvenidas. Si deseas mejorar este proyecto, por favor abre un issue o envía un pull request.

## Licencia

Este proyecto está bajo la Licencia MIT.