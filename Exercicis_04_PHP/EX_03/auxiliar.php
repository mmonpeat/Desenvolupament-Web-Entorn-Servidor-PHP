<!DOCTYPE HTML>
<html>
<head>
    <title>Resultat</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["num"];
    $i = 1;
    while ($i <= $num)
    {
        echo "Escrivint $i lineas.<br>";
        $i++;
    }
}
?>
</body>
</html>
