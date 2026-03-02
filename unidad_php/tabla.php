<!DOCTYPE html>
<html>
<head>
    <title>Tabla de multiplicar</title>
</head>
<body>

<form method="post">
    Introduce un número:
    <input type="number" name="numero">
    <input type="submit" value="Mostrar tabla">
</form>

<br>

<?php

if (isset($_POST["numero"])) {

    $numero = $_POST["numero"];

    echo "<h3>Tabla del " . $numero . "</h3>";

    for ($i = 1; $i <= 10; $i++) {
        echo $numero . " x " . $i . " = " . ($numero * $i) . "<br>";
    }

}

?>

</body>
</html>