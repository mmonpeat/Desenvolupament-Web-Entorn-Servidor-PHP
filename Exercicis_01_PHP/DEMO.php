<?php
$months = [
    'Gener', 'Febrer', 'Març', 'Abril',
    'Maig', 'Juny', 'Juliol', 'Agost',
    'Setembre', 'Octuble', 'Novembre',
    'Desembre'
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> messos del any </title>
</head>
<body>
<h1> messos del any </h1>
    <ul>
    <?php
        foreach($months as $mes){//1r mira si hi ha algo, $mes es l'iterador del array amb el contingut de cada casella
            echo '<li>' . $mes . '</li>';//mood llista
        }
    ?>
    </ul>
</body>
</html>