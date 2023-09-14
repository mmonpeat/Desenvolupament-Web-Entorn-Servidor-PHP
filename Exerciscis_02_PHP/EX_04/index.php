
<?php
    $array = [
        "Hola",
        "Mundo",
        "Este es un ejemplo",
        "de un array de cadenas",
        "con diferentes longitudes"
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> EXERCICI 4 </title>
</head>
<body>
<h1> Max && min</h1>
<ul>
    <?php
        $max[0] = strlen($array[0]);
        $min[0] = strlen($array[0]);

        foreach ($array as $str)
        {
            $len = strlen($str);
            if ($len > $max[0])
                $max[0] = $len;
            if ($len < $min[0])
                $min[0] = $len;
        }
        echo "Minim: $min[0]</br> Maxim: $max[0]";
    ?>
</ul>
</body>
</html>