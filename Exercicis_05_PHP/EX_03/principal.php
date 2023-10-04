<?php
session_start(); // Iniciar la sesión

// Comprobar si el usuario ha iniciado sesión
if (!isset($_SESSION['nombre'])) {
    // Redirigir al usuario a la página de login si no está autenticado
    header("Location: index.php");
    exit();
}

// Incrementar la variable 'puntos_acumulados' en 10 cada vez que el usuario visita esta página
$_SESSION['puntos_acumulados'] += 10;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página Principal</title>
</head>
<body>
<h1>Bienvenido, <?php echo $_SESSION['nombre']; ?></h1>
<p>Tienes <?php echo $_SESSION['puntos_acumulados']; ?> puntos acumulados.</p>
<a href="close.php">Cerrar Sesión</a>
</body>
</html>
