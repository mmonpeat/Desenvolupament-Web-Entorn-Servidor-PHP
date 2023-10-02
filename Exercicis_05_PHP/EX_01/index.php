<?php
    if (isset($_COOKIE['visitas'])){
        $visitas = $_COOKIE['visitas'];
    } else
        $visitas = 0;
    $visitas++;

    //que es reinici en una hora
    setcookie('visitas', $visitas, time() + 3600);

    echo "Num de visitas: $visitas";

?>