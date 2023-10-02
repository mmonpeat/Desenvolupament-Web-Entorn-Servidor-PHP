<?php
$names = [
    'Marc', 'Adrià', 'Ariel', 'Joan',
    'Maria', 'Pep', 'Lidia', 'Jon',
    'Raúl'
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> EXERCICI 2 </title>
</head>
<body>
<h1> Llista Noms </h1>
<ul>
    <?php
    foreach($names as $nom)
    {//1r mira si hi ha algo, $mes es l'iterador del array amb el contingut de cada casella
        echo '<li>' . $nom . '</li>';//mood llista
    }
    ?>
</ul>
</body>
</html>