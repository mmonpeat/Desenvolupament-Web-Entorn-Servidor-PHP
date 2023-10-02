<?php
session_start(); // Iniciar la sesión

// Comprobar si el usuario ha iniciado sesión
if (isset($_SESSION['nombre'])) {
    // Destruir la sesión para cerrarla
    session_destroy();
}

// Redirigir al usuario a la página de login
header("Location: index.php");
exit();
?>

