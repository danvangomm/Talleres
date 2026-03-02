<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Media del alumno</title>
</head>
<body>

<h2>Sacar la media del alumno</h2>

<form method="POST">
    Nombre:<br>
    <input type="text" name="nombre"><br><br>

    Nota 1:<br>
    <input type="number" step="0.01" name="nota1"><br><br>

    Nota 2:<br>
    <input type="number" step="0.01" name="nota2"><br><br>

    Nota 3:<br>
    <input type="number" step="0.01" name="nota3"><br><br>

    <input type="submit" value="Calcular">
</form>

<hr>

<?php

if ($_POST) {

    $nombre = $_POST['nombre'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    $media = ($nota1 + $nota2 + $nota3) / 3;

    if ($media < 5) {
        echo "Mal " . $_POST['nombre'] . " has suspendido";    }

    elseif ($media >=5 && $media < 6)
        echo "bien " . $_POST['nombre'] . " has aprobado";

    elseif ($media >=6 && $media < 7)
        echo "Perfecto " . $_POST['nombre'] . " tienes un bien";

    elseif ($media >=7 && $media <= 8)
        echo "fenomenal " . $_POST['nombre'] . " tienes un notable";

    elseif ($media >=9 && $media <=10)
        echo "Excelente " . $_POST['nombre'] . " tienes un sobresaliente";

}

?>

</body>
</html>
