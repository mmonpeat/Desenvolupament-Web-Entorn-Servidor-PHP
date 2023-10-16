<?php
try {
    $conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');
    // Verificar si la conexión a la base de datos fue exitosa
    if (!$conexion) {
        die("Error en la conexión a la base de datos.");
    }
    $crearTablaSQL = "CREATE TABLE IF NOT EXISTS usuaris (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(255) NOT NULL,
        correo VARCHAR(255) NOT NULL UNIQUE,
        contrasena VARCHAR(255) NOT NULL,
        fecha_nacimiento DATE NOT NULL,
        es_administrador BOOLEAN NOT NULL,
        imagen BLOB
    )";
    //echo 'Taula creada</br>';
    $conexion->exec($crearTablaSQL);
    //echo 'conexioooo</br>';

// Obtener los datos del formulario de registro
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
    $correo = isset($_POST['correo']) ? $_POST['correo'] : null;
    $contrasena = isset($_POST['contrasena']) ? password_hash($_POST['contrasena'], PASSWORD_DEFAULT) : null; // Encriptar la contraseña
    $fechaNacimiento = isset($_POST['fecha_nacimiento']) ? $_POST['fecha_nacimiento'] : null;
    $esAdministrador = false; // Por defecto, no son administradores

    // Manejo de la imagen
    $imagen_dir = "carpeta_de_imagenes/"; // Directorio donde se guardarán las imágenes
    $imagen_nombre = $_FILES["imagen"]["name"];
    $imagen_ruta = $imagen_dir . $imagen_nombre;

    /*
    // guarda tota la taula usuaris
    $stmt = $conexion->query("SELECT * FROM usuaris");

    echo "Registros de la tabla:</br>";

    while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $fila['id'] . " - " . $fila['correo'] . '</br>';
    }*/

    // Verificar si el correo ya está registrado
    $stmt = $conexion->prepare("SELECT COUNT(*) FROM usuaris WHERE correo = ?");
    $stmt->bindParam(1, $correo);
    $stmt->execute();
    $rowCount = $stmt->fetchColumn();

    if ($rowCount == 0) {
        // El correo no existe, podemos insertar el nuevo usuario
        $stmt = $conexion->prepare("INSERT INTO usuaris (nombre, correo, contrasena, fecha_nacimiento, es_administrador) VALUES (?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $nombre);
        $stmt->bindParam(2, $correo);
        $stmt->bindParam(3, $contrasena);
        $stmt->bindParam(4, $fechaNacimiento);
        $stmt->bindParam(5, $esAdministrador);
        $stmt->bindParam(6, $imagen_ruta);

        $stmt->execute();

        echo "Registro exitoso. Ahora puedes <a href='inicio_sesion.php'>iniciar sesión</a>.</br>";
    } else {
        echo "El correo electrónico ya está registrado. Por favor, utiliza otro correo.</br>";
    }
} catch (PDOException $e) {
    // Mostrar el error
    echo "Error: " . $e->getMessage();
}
?>
