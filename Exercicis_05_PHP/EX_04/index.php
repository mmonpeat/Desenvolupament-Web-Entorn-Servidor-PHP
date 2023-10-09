<?php

try{
    $conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');
    echo "Conexion OK</br>";
    // Crear la tabla de usuarios si no existe (puedes ejecutarlo una vez)
    $crearTablaSQL = "CREATE TABLE IF NOT EXISTS usuaris (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(255) NOT NULL,
        correo VARCHAR(255) NOT NULL UNIQUE,
        contrasena VARCHAR(255) NOT NULL,
        fecha_nacimiento DATE NOT NULL,
        es_administrador BOOLEAN NOT NULL,
        imagen BLOB
    )";
    $conexion->exec($crearTablaSQL);
    // Insertar un usuario de ejemplo
    $nombre = 'bbbbbb';
    $correo = 'bbbbb@quetal.com';
    $contrasena = '123456789'; // ¡Asegúrate de usar contraseñas seguras!
    $fechaNacimiento = '2000-01-01'; // Cambia la fecha de nacimiento según tus necesidades
    $esAdministrador = true; // o false según corresponda

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

        $stmt->execute();

        echo "Usuario insertado correctamente.</br>";
    } else {
        echo "El correo ya está registrado. Por favor, utilice otro correo.</br>";
        echo "Número de usuarios con el mismo correo: " . $rowCount . "</br>";
    }
    // Seleccionar todos los usuarios
    $stmt = $conexion->query("SELECT * FROM usuaris");

    echo "Registros de la tabla:</br>";

    while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $fila['id'] . " - " . $fila['nombre'] . '</br>';
    }

    // Cerrar la conexión
    $conexion = null;

    // Seleccionar usuarios
    $id = 2;
    $stmt = $conexion->prepare("SELECT * FROM usuaris WHERE id = ?");
    $stmt->bindParam(1, $id);
    $stmt->execute();

    foreach($stmt as $fila){
        //print_r($fila);
        echo $fila['id'] . " - " .$fila['nombre'] . '</br>';
        //echo $stmt . '</br>';
    }

}catch(PDOException $e){
    // Mostrar el error
    echo "Error: " . $e->getMessage();
}
?>