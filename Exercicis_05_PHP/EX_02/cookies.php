<?php

// Verificar si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nom = $_POST["nom"];
    $llengua = $_POST["llengua"];

    // Establecer cookies con los datos del usuario
    setcookie("nom", $nom, time() + 3600 * 24 * 30); // Caduca en 30 días
    setcookie("llengua", $llengua, time() + 3600 * 24 * 30); // Caduca en 30 días
} else {
    // Si no se enviaron datos del formulario, intentar obtener valores de cookies
    $nom = isset($_COOKIE["nom"]) ? $_COOKIE["nom"] : "";
    $llengua = isset($_COOKIE["llengua"]) ? $_COOKIE["llengua"] : "cat"; // Lengua por defecto en caso de no existir cookie
}
?>