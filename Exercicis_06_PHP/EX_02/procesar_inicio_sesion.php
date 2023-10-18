
<?php
// Conecta a la base de datos (asegúrate de configurar la conexión)

try {
    $conexion = new PDO('mysql:host=db.fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

// Parámetros de paginación
$porPagina = 3; // Cantidad de usuarios por página
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
$inicio = ($pagina - 1) * $porPagina;

// Consulta para obtener los usuarios paginados
$sql = "SELECT * FROM  usuarisImg LIMIT $inicio, $porPagina";
$stmt = $conexion->query($sql);
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Consulta para obtener el total de usuarios
$sqlTotal = "SELECT COUNT(*) FROM  usuarisImg";
$totalUsuarios = $conexion->query($sqlTotal)->fetchColumn();

// Cerrar la conexión a la base de datos
$conexion = null;

// Mostrar la lista de usuarios
echo "<h2>Lista de Usuarios</h2>";
foreach ($usuarios as $usuario) {
    echo "Nombre: " . $usuario['nombre'] . "<br>";
    echo "Correo: " . $usuario['correo'] . "<br><br>";
    // Verificar si la columna 'imagen' está definida en el resultado
    if (isset($usuario['imagen'])) {
        echo "<img src='/Exercicis_06_PHP/" . $usuario['imagen'] . "' alt='Imagen de perfil'><br>";
    } else {
        echo "Imagen de perfil no disponible<br>";
    }

    echo "<br>";
}

$totalPaginas = ceil($totalUsuarios / $porPagina);
if ($totalPaginas > 1) {
    echo "<div class='pagination'>";
    if ($pagina > 1) {
        echo "<a href='procesar_inicio_sesion.php?pagina=" . ($pagina - 1) . "'>&lt; Anterior&nbsp;&nbsp;&nbsp;</a>";
    }
    for ($i = 1; $i <= $totalPaginas; $i++) {
        if ($i == $pagina) {
            echo "<span class='current'>$i</span>";
        } else {
            echo "<a href='procesar_inicio_sesion.php?pagina=$i'>$i</a>";
        }
    }
    if ($pagina < $totalPaginas) {
        echo "<a href='procesar_inicio_sesion.php?pagina=" . ($pagina + 1) . "'>&nbsp;&nbsp;&nbsp;Siguiente &gt;</a>";
    }
        echo "</div>";
}


?>

