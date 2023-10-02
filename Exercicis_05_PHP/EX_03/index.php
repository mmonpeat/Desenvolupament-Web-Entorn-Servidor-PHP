<?php
session_start(); // Iniciar la sesión

// Comprobar si el usuario ya ha iniciado sesión
if (isset($_SESSION['nombre'])) {
    // Redirigir al usuario a la página principal si ya está autenticado
    header("Location: principal.php");
    exit();
}

// Comprobar si se ha enviado el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    // Validar el nombre de usuario (puedes agregar más validaciones si es necesario)
    if ($nombre != "") {
        // Almacenar el nombre de usuario en la sesión
        $_SESSION['nombre'] = $nombre;
        $_SESSION['puntos_acumulados'] = 0; // Inicializar puntos_acumulados
        header("Location: principal.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<h1>Login</h1>
<form action="index.php" method="post">
    <label for="nombre">Nombre de Usuario:</label>
    <input type="text" id="nombre" name="nombre" required>
    <input type="submit" value="Iniciar Sesión">
</form>
</body>
</html>
