<!DOCTYPE html>
<html lang="en">
<head>
    <title> EXERCICI 5 </title>
</head>
<body>
<h1> ** </h1>
<ul>
    <?php
    $row = 1;
    $maxRow = 10;

    while ($row <= $maxRow)
    {
        $col = 1;
        while ($col <= $row)
        {
            echo "* ";
            $col++;
        }
        echo "</br>";
        $row++;
    }
    $row = $maxRow - 1; // Empieza desde 9 y disminuye hasta 1
    while ($row >= 1)
    {
        $col = 1;
        while ($col <= $row)
        {
            echo "* ";
            $col++;
        }
        echo "</br>";
        $row--;
    }
    ?>
</ul>
</body>
</html>