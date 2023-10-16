<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
</head>
<body>
<h2>Iniciar Sesión</h2>
<form action="procesar_inicio_sesion.php" method="POST">
    <label for="correo">Correo Electrónico:</label>
    <input type="email" name="correo" required><br><br>

    <label for="contrasena">Contraseña:</label>
    <input type="password" name="contrasena" required><br><br>

    <input type="submit" value="Iniciar Sesión">
</form>
</body>
</html>

