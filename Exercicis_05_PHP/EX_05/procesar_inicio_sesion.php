<?php
// Conecta a la base de datos (asegúrate de configurar la conexión)

try {
    $conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

// Obtiene los datos del formulario
$correo = isset($_POST['correo']) ? $_POST['correo'] : null;
$contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : null;

// Busca el usuario en la base de datos
$sql = "SELECT * FROM usuaris WHERE correo = :correo";
$stmt = $conexion->prepare($sql);
$stmt->bindParam(':correo', $correo);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($contrasena, $user['contrasena'])) {
    // Inicio de sesión exitoso
    echo "Has iniciado sesión en tu cuenta.";
} else {
    // Credenciales incorrectas
    echo "Error: Correo o contraseña incorrectos.";
}

// Cierra la conexión a la base de datos
$conn = null;
?>
