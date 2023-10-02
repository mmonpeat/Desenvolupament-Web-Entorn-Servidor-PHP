<?php

$id = $_GET['id'];

if(!$id) header('Location: http://daw.fmesasc.com/public/PHP/P7_PDO/index.php?id=1');

try{
    // Código
    $conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');
    // Install sudo apt-get install sqlite php-sqlite3 in Ubuntu System for local databases
    // sudo apt-get install php-mysql
    // sudo systemctl restart apache2
    echo "Conexion OK</br>";
    // Método query (desaconsejado)
    //$resultados = $conexion->query('INSERT INTO usuarios VALUES(null, "Pedro")');

    $resultados = $conexion->query("SELECT * FROM usuarios WHERE id = $id");

    foreach($resultados as $fila){
        // print_r($fila);
        echo $fila['id'] . " - " .$fila['nombre'] . '</br>';
    }


}catch(PDOException $e){
    // Mostrar el error
    echo "Error: " . $e->getMessage();
}

?>