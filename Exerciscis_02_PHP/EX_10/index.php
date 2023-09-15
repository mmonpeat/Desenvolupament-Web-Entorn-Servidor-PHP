<?php
    $array = [
            //clave => valor
        'a' => 1,
        'd' => 4,
        'b' => 2,
        'c' => 3,
        'e' => 5
    ];
    // $ordre = 0 ordenar de forma ascendent
    // $ordre = 1 ordenar de forma descendent
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> EXERCICI 10 </title>
</head>
<body>
<h1> EX 10 </h1>
<?php
    function order_array($array, $ordre, $element)
    {
        if ($element == 'clave')
        {
            if ($ordre == 0)
                ksort($array);
            else if ($ordre == 1)
                krsort($array);
        }
        else if ($element == 'valor')
        {
            if ($ordre == 0)
                asort($array);
            else if ($ordre == 1)
                arsort($array);
        }
        else
            echo "Pssa bé el valor $element";
        return ($array);
    }
    $res = order_array($array, 0, 'clave');
    print_r($res);
?>
</body>
</html>