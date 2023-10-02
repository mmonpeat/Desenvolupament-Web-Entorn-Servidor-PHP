<!DOCTYPE html>
<html lang="en">
<head>
    <title> EXERCICI 12 </title>
</head>
<body>
<h1> EX 12 </h1>
<?php
    function is_prime($num)
    {
        if ($num % 2 == 0)
            return (-1);
        return (0);
    }
    $res = is_prime(23);
    if ($res == 0)
        echo "És un numero prim";
    else
        echo "No es in numero prim";
?>
</body>
</html>