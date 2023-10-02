<!DOCTYPE HTML>
<html>
<head>
    <title>Resultat</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $operation = $_POST["operation"];
    try {
        $result = eval("return $operation;");
        echo "Operación: $operation<br>";
        echo "Resultado: $result";
    } catch (Exception $e) {
        echo "Ha ocurrido un error al calcular la operación.";
    }
}
?>
</body>
</html>