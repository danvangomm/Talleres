<?php
session_start();

if (!isset($_SESSION["modulos"])) {
    $_SESSION["modulos"] = array();
}

if (isset($_POST["modulo"])) {
    $modulo = $_POST["modulo"];
    $_SESSION["modulos"][] = $modulo;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Módulos</title>
</head>
<body>

<form method="post">
    Introduce módulo:
    <input type="text" name="modulo">
    <input type="submit" value="Añadir">
</form>

<br>

<h3>Lista de módulos:</h3>

<?php

foreach ($_SESSION["modulos"] as $m) {
    echo $m . "<br>";
}

?>

</body>
</html>