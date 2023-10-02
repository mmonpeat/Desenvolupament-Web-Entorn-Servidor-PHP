<!DOCTYPE html>
<html lang="en">
<head>
    <title> EXERCICI 11 </title>
</head>
<body>
<h1> EX 11 </h1>
<?php
//Aquest codi si troba una minuscula en la primera lletra directament retorna -1 i el codi para
function is_upper($str)
    {
        foreach (str_split($str) as $c)
            if ($c >= 'a' && $c <= 'z')
                return (-1);
        return (0);
    }
    $str1 = "TOTES LES LLETRES SON MAJUSQULES";
    $str2 = "HI HA minuscules AQUi";

    //$res = is_upper($str1);
    $res = is_upper($str2);

    if ($res == 0)
        echo "Tot son majusqules.</br>";
    else
        echo "Hi ha alguna minuscula.";

    /*echo "Res 1: $res1. Tot son majusqules.</br>";
    echo "Res 2: $res2. Hi ha alguna minuscula.";*/
?>
</body>
</html>