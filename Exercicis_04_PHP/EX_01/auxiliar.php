<!DOCTYPE HTML>
<html>
<head>
    <title>Resultat</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $word = $_POST["word"];
    $wordLength = strlen($word);
    echo "La longitud de la paraula és: $wordLength";
}
?>
</body>
</html>
