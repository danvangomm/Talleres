<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contador</title>
</head>
<body>

<h2>Contador</h2>

<form method="POST">
    <label>Tipo de cuenta:</label><br>
    <select name="tipo">
        <option value="asc">Ascendente (Sumando)</option>
        <option value="desc">Descendente (Restando)</option>
    </select>
    <br><br>

    <label>¿Hasta qué número?</label><br>
    <input type="number" name="numero" required>
    <br><br>

    <input type="submit" value="Contar">
</form>

<hr>

<?php

if ($_POST["numero"]) {

    $tipo = $_POST["tipo"];
    $numero = $_POST["numero"];

    if ($tipo == "asc") {

        for ($i = 1; $i <= $numero; $i++) {
            echo $i . " ";
        }

    } else {

        for ($i = $numero; $i >= 1; $i--) {
            echo $i . " ";
        }

    }
}

?>

</body>
</html>