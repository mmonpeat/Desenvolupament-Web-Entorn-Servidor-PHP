<?php
try {
    $conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

$porPagina = 3;
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
$inicio = ($pagina - 1) * $porPagina;

$sql = "SELECT * FROM usuaris LIMIT $inicio, $porPagina";
$stmt = $conexion->query($sql);
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sqlTotal = "SELECT COUNT(*) FROM usuaris";
$totalUsuarios = $conexion->query($sqlTotal)->fetchColumn();

$conexion = null;

echo "<h2>Lista de Usuarios</h2>";
foreach ($usuarios as $usuario) {
    echo "Nombre: " . $usuario['nombre'] . "<br>";
    echo "Correo: " . $usuario['correo'] . "<br><br>";
}

$totalPaginas = ceil($totalUsuarios / $porPagina);
if ($totalPaginas > 1) {
    echo "<div class='pagination'>";
    if ($pagina > 1) {
        echo "<a href='lista_usuarios.php?pagina=" . ($pagina - 1) . "'>&lt; Anterior&nbsp;&nbsp;&nbsp;</a>";
    }
    for ($i = 1; $i <= $totalPaginas; $i++) {
        if ($i == $pagina) {
            echo "<span class='current'>$i</span>";
        } else {
            echo "<a href='lista_usuarios.php?pagina=$i'>$i</a>";
        }
    }
    if ($pagina < $totalPaginas) {
        echo "<a href='lista_usuarios.php?pagina=" . ($pagina + 1) . "'>&nbsp;&nbsp;&nbsp;Siguiente &gt;</a>";
    }
    echo "</div>";
}
?>

