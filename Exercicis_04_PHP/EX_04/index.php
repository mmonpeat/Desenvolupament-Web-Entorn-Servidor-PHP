<!DOCTYPE HTML>
<html>
<body>
<form action="auxiliar.php" method="post" enctype="multipart/form-data">
    <label for="nom">Nom:</label> <input type="text" name="nom"><br>
    <label for="cognom">Cognom:</label> <input type="text" name="cognom"><br>
    <label for="passwd">Contrasenya:</label> <input type="password" name="passwd"><br>
    <label>Sóc:</label>
        <input type="radio" name="rol" value="Alumne"> Alumne
        <input type="radio" name="rol" value="Profesor"> Profesor<br>
    <label for="foto">Foto:</label> <input type="file" name="foto"><br>
    <label for="edat">Edat:</label> <input type="number" name="edat"><br>
    <label for="comentaris">Comentaris:</label><br>
        <textarea name="comentaris" rows="4" cols="50"></textarea><br>
    <input type="hidden" name="test" value="myPrueba">
    <input type="submit">
</form>
</body>
</html>