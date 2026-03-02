<!DOCTYPE html>
<html>
<head>
    <title>Filtrar alumnos</title>
</head>
<body>

<?php

$alumnos = array(
    array("id"=>1, "nombre"=>"Ana", "ciclo"=>"ASIR", "curso"=>1, "nota"=>7),
    array("id"=>2, "nombre"=>"Luis", "ciclo"=>"ASIR", "curso"=>1, "nota"=>6),
    array("id"=>3, "nombre"=>"Marta", "ciclo"=>"DAW", "curso"=>2, "nota"=>8),
    array("id"=>4, "nombre"=>"Carlos", "ciclo"=>"DAW", "curso"=>2, "nota"=>5),
    array("id"=>5, "nombre"=>"Elena", "ciclo"=>"ASIR", "curso"=>1, "nota"=>9)
);

?>

<form method="post">
    Elige ciclo:
    <select name="ciclo">
        <option value="Todos">Todos</option>
        <option value="ASIR">ASIR</option>
        <option value="DAW">DAW</option>
    </select>
    <input type="submit" value="Filtrar">
</form>

<br>

<?php

if (isset($_POST["ciclo"])) {

    $ciclo_elegido = $_POST["ciclo"];
    $contador = 0;

    echo "<table border='1'>";
    echo "<tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Ciclo</th>
            <th>Curso</th>
            <th>Nota</th>
          </tr>";

    foreach ($alumnos as $a) {

        if ($ciclo_elegido == "Todos" || $a["ciclo"] == $ciclo_elegido) {

            echo "<tr>";
            echo "<td>".$a["id"]."</td>";
            echo "<td>".$a["nombre"]."</td>";
            echo "<td>".$a["ciclo"]."</td>";
            echo "<td>".$a["curso"]."</td>";
            echo "<td>".$a["nota"]."</td>";
            echo "</tr>";

            $contador++;
        }
    }

    echo "</table>";

    echo "<br>Alumnos mostrados: " . $contador;
}

?>

</body>
</html>