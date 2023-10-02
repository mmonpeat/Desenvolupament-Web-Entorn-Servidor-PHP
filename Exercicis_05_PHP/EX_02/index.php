<!DOCTYPE html>
<html>
<head>
    <title>Formulari de Usuari</title>
</head>
<body>
<h1>Formulari</h1>
<form action="cookies.php" method="post">
    <?php
        $nom = "Undifined";
        $llengua = "cat";
    ?>
    <label for="nom">Nom d'Usuari:</label>
    <input type="text" id="nom" name="nom" value="<?php echo $nom; ?>" required><br><br>

    <label for="llengua">Lengua preferida:</label>
    <select id="llengua" name="llengua" required>
        <option value="cat" <?php if ($llengua == "cat") echo "selected"; ?>>Càtala</option>
        <option value="cas" <?php if ($llengua == "cas") echo "selected"; ?>>Castellà</option>
        <option value="en" <?php if ($llengua == "en") echo "selected"; ?>>Anglés</option>
    </select><br><br>

    <input type="submit" value="Enviar">
</form>
</body>
</html>