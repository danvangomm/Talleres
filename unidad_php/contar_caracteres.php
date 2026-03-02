<!DOCTYPE html>
<html>
<head>
    <title>Contar caracteres</title>
</head>
<body>

<form method="post">
    Escribe algo:
    <input type="text" name="texto">
    <input type="submit" value="Contar">
</form>

<br>

<?php

if (isset($_POST["texto"])) {

    $texto = $_POST["texto"];
    $cantidad = strlen($texto);

    echo "Número de caracteres: " . $cantidad;
}

?>

</body>
</html>