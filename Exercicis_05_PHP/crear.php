<?php
$numDirectorios = 6; // Cambia esto al número deseado de directorios

for ($i = 1; $i <= $numDirectorios; $i++) {
    $nombreDirectorio = sprintf("EX_%02d", $i); // Formato "EX_01", "EX_02", etc.
    $rutaDirectorio = "./" . $nombreDirectorio;

    if (!file_exists($rutaDirectorio)) {
        mkdir($rutaDirectorio, 0777, true); // Crea el directorio con permisos
        $archivoIndex = $rutaDirectorio . "/index.php";
        file_put_contents($archivoIndex, "<?php echo 'Hola desde $nombreDirectorio'; ?>");
        echo "Directorio creado: $nombreDirectorio<br>";
    } else {
        echo "El directorio $nombreDirectorio ya existe<br>";
    }
}
?>

