
<?php
// Conecta a la base de datos (asegúrate de configurar la conexión)

try {
    $conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

// Parámetros de paginación
$porPagina = 3; // Cantidad de usuarios por página
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
$inicio = ($pagina - 1) * $porPagina;

// Consulta para obtener los usuarios paginados
$sql = "SELECT * FROM usuaris LIMIT $inicio, $porPagina";
$stmt = $conexion->query($sql);
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Consulta para obtener el total de usuarios
$sqlTotal = "SELECT COUNT(*) FROM usuaris";
$totalUsuarios = $conexion->query($sqlTotal)->fetchColumn();

// Cerrar la conexión a la base de datos
$conexion = null;

// Mostrar la lista de usuarios
echo "<h2>Lista de Usuarios</h2>";
foreach ($usuarios as $usuario) {
    echo "Nombre: " . $usuario['nombre'] . "<br>";
    echo "Correo: " . $usuario['correo'] . "<br><br>";
}

// Mostrar la paginación con enlaces a páginas anteriores y siguientes
$totalPaginas = ceil($totalUsuarios / $porPagina);
if ($totalPaginas > 1) {
    echo "<div class='pagination'>";
    /*if ($pagina > 1) {
        echo "<a href='lista_usuarios.php?pagina=" . ($pagina - 1) . "'>&lt; Anterior</a>";
    }*/
    for ($i = 1; $i <= $totalPaginas; $i++) {
        if ($i == $pagina) {
            echo "<span class='current'>$i</span>";
        } else {
            echo "<a href='lista_usuarios.php?pagina=$i'>$i</a>";
        }
    }
    if ($pagina < $totalPaginas)
    {
        echo "</br>";
        echo "</br>";
        echo "<a href='inicio_sesion.php?pagina=" . ($pagina + 1) . "'>Sortir &gt;</a>";
    }
    echo "</div>";
}

?>

