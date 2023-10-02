<!DOCTYPE html>
<html lang="en">
<head>
    <title> EXERCICI 6 </title>
</head>
<body>
<h1> EX 6 </h1>
<ul>
    <?php
    $rows = 10;

    for ($row = 1; $row <= $rows; $row++) {
        // Imprime asteriscos y espacios en blanco
        for ($i = 1; $i <= $row; $i++) {
            echo "*";
        }

        for ($i = 1; $i <= 4 * ($rows - $row); $i++) {
            echo "&nbsp;";
        }

        for ($i = 1; $i <= $row; $i++) {
            echo "*";
        }

        echo "<br>";
    }

    for ($row = $rows - 1; $row >= 1; $row--) {
        // Imprime asteriscos y espacios en blanco
        for ($i = 1; $i <= $row; $i++) {
            echo "*";
        }

        for ($i = 1; $i <= 4 * ($rows - $row); $i++) {
            echo "&nbsp;";
        }

        for ($i = 1; $i <= $row; $i++) {
            echo "*";
        }

        echo "<br>";
    }
    ?>

</ul>
</body>
</html>