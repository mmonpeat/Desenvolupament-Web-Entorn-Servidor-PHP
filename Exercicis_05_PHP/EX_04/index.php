<?php
$usuarios = [
    [
        'nombre' => 'aaaaa',
        'correo' => 'aaaa@aaaa',
        'contrasena' => '123',
        'fechaNacimiento' => '2000-01-01',
        'esAdministrador' => true,
    ],
    [
        'nombre' => 'bbbbb',
        'correo' => 'bbbb@bbb',
        'contrasena' => '123',
        'fechaNacimiento' => '2000-01-01',
        'esAdministrador' => true,
    ],
    [
        'nombre' => 'ccccc',
        'correo' => 'ccccc@ccccc',
        'contrasena' => '123',
        'fechaNacimiento' => '2000-01-01',
        'esAdministrador' => true,
    ]
];
try{
    //$conexion emagatzema la conexio a la bbdd utilitzant PDO
    $conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');
    echo "Conexion OK</br>";
    //crea la taula d'usuaris nomeés si no existeix
    $crearTablaSQL = "CREATE TABLE IF NOT EXISTS usuaris (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(255) NOT NULL,
        correo VARCHAR(255) NOT NULL UNIQUE,
        contrasena VARCHAR(255) NOT NULL,
        fecha_nacimiento DATE NOT NULL,
        es_administrador BOOLEAN NOT NULL,
        imagen BLOB
    )";

    $conexion->exec("DROP TABLE IF EXISTS usuaris");
    //exec: es un metode que ens proporciona l'extencio PDO, s'usa per executar consultes de SQL, i retorna el nuero de files afectades.
    $conexion->exec($crearTablaSQL);

// Recorre el array de usuarios e inserta cada usuario en la base de datos
    foreach ($usuarios as $usuario) {
        $correo = $usuario['correo'];

        //compta el nombre de registres en una taula anomenada "*usuaris"
        $stmt = $conexion->prepare("SELECT COUNT(*) FROM usuaris WHERE correo = ?");//prepara la preg de quants correus ==
        $stmt->bindParam(1, $correo);//trobar correus ==  i quants hi ha?
        $stmt->execute();//executes la pregunta de quants hi ha
        $rowCount = $stmt->fetchColumn();//diu quants correus hi ha ==

        //echo $rowCount . '</br>';
        if ($rowCount == 0) {//si el correu no existeix, s'inserta l'usuari a la bbdd
            $stmt = $conexion->prepare("INSERT INTO usuaris (nombre, correo, contrasena, fecha_nacimiento, es_administrador) VALUES (?, ?, ?, ?, ?)");
            $stmt->bindParam(1, $usuario['nombre']);
            $stmt->bindParam(2, $usuario['correo']);
            $stmt->bindParam(3, $usuario['contrasena']);
            $stmt->bindParam(4, $usuario['fechaNacimiento']);
            $stmt->bindParam(5, $usuario['esAdministrador']);
            //es vinculen els valors de les variables $nom, $correu, $contrasena, $fechaNacimiento
            // i $esAdministrador als marcadors de posició en la consulta SQL usant bindParam()

            $stmt->execute();//executa l'afegir l'usuari
            echo "Usuario insertado correctamente: " . $usuario['correo'] . "</br>";
        } else {
            echo "El correo ya está registrado. Por favor, utilice otro correo: " . $usuario['correo'] . "</br>";
        }
        /*
            // guarda tota la taula usuaris
            $stmt = $conexion->query("SELECT * FROM usuaris");

            echo "Registros de la tabla:</br>";

            while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo $fila['id'] . " - " . $fila['correo'] . '</br>';
            }
        */
        /*
            // és una variable que s'utilitza per a filtrar els resultats de la consulta SQL.
            // En aquest cas, la consulta busca usuaris que el seu "aneu" coincideixi amb el valor de $aneu.
            // Atès que $aneu s'estableix en 2 en aquest exemple, la consulta recuperarà únicament els registres
            // d'usuaris que tinguin un "aneu" igual a 2. Això no generaria un problema sempre que
            // desitgis buscar usuaris amb un "aneu" específic, que en aquest cas és 2.
            $id = 2;
            $stmt = $conexion->prepare("SELECT * FROM usuaris WHERE id = ?");
            $stmt->bindParam(1, $id);
            $stmt->execute();

            foreach($stmt as $fila){
                //print_r($fila);
                echo $fila['id'] . " - " .$fila['nombre'] . '</br>';
                //echo $stmt . '</br>';
            }
        */
    }
    // Cerrar la conexión
    $conexion = null;

}catch(PDOException $e){
    // Mostrar el error
    echo "Error: " . $e->getMessage();
}
?>