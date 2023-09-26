<?php
$numDirectorios = 4; // Cambia esto al número deseado de directorios

for ($i = 1; $i <= $numDirectorios; $i++) {
    $nombreDirectorio = sprintf("EX_%02d", $i); // Formato "EX_01", "EX_02", etc.
    $rutaDirectorio = "./" . $nombreDirectorio;

    if (!file_exists($rutaDirectorio)) {
        mkdir($rutaDirectorio, 0777, true); // Crea el directorio con permisos

        // Crea el archivo index.php
        $archivoIndex = $rutaDirectorio . "/index.php";
        file_put_contents($archivoIndex, "<?php echo 'Hola desde $nombreDirectorio'; ?>");

        // Crea el archivo nombre_carpeta.php
        /*$archivoCarpetaPHP = $rutaDirectorio . "/" . $nombreDirectorio . ".php";
        file_put_contents($archivoCarpetaPHP, "<?php echo 'Contenido del archivo $nombreDirectorio.php';?>");*/

        // Crea el archivo README.md
        $archivoReadme = $rutaDirectorio . "/README.md";
        file_put_contents($archivoReadme, "# $nombreDirectorio\n\nEste es el archivo README.md para $nombreDirectorio.");

        echo "Directorio creado: $nombreDirectorio<br>";
    } else {
        echo "El directorio $nombreDirectorio ya existe<br>";
    }
}
?>


