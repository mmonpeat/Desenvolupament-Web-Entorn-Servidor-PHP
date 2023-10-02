<!DOCTYPE HTML>
<html>
<head>
    <title>Resultat del Formulari</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $cognom = $_POST["cognom"];
    $passwd = $_POST["passwd"];
    $rol = isset($_POST["rol"]) ? $_POST["rol"] : "No especificat";
    $edat = $_POST["edat"];
    $comentaris = $_POST["comentaris"];
    $test = $_POST["test"];

    echo "<h1>Dades del Formulari</h1>";
    echo "<p><strong>Nom:</strong> $nom</p>";
    echo "<p><strong>Cognom:</strong> $cognom</p>";
    echo "<p><strong>Contrasenya:</strong> $passwd</p>";
    echo "<p><strong>Sóc:</strong> $rol</p>";
    echo "<p><strong>Foto:</strong> Nom del fitxer: " . $_FILES["foto"]["name"] . "</p>";
    echo "<p><strong>Edat:</strong> $edat</p>";
    echo "<p><strong>Comentaris:</strong> $comentaris</p>";
    echo "<p><strong>Camp ocult:</strong> $test</p>";
}
?>
</body>
</html>
