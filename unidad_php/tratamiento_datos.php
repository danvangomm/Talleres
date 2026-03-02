<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tratamiento de datos</title>
</head>
<body>

<h2>Datos del alumno</h2>

<form method="POST">
    <label>Nombre:</label><br>
    <input type="text" name="nombre"><br><br>

    <label>Ciclo:</label><br>
    <input type="text" name="ciclo"><br><br>

    <label>Curso:</label><br>
    <input type="text" name="curso"><br><br>

    <input type="submit" value="Enviar">
</form>

<hr>

<h3>Resultado:</h3>

<!-- ========= AQUÍ TIENES QUE HACER EL PHP ========= -->
<?php
if ($_POST) {
echo "Me llamo " . $_POST['nombre'] . ", estudio " . $_POST['ciclo'] . " y estoy en " . $_POST['curso'] . "º curso";}
?>
<!-- ================================================ -->

</body>
</html>