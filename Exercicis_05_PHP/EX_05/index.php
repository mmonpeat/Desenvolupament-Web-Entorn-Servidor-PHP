<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
</head>
<body>
<h2>Registro de Usuario</h2>
<form action="procesar_registro.php" method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required><br><br>

    <label for="correo">Correo Electrónico:</label>
    <input type="email" name="correo" required><br><br>

    <label for="contrasena">Contraseña:</label>
    <input type="password" name="contrasena" required><br><br>

    <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
    <input type="date" name="fecha_nacimiento" required><br><br>

    <input type="submit" value="Registrarse">
</form>

<p>¿Ya tienes una cuenta? <a href="inicio_sesion.php">Iniciar Sesión</a></p>
</body>
</html>
