<!DOCTYPE html>
<html>
<head>
    <title>Alumnos</title>
</head>
<body>

<?php

$alumnos = array(
    array("id"=>1, "nombre"=>"Ana", "ciclo"=>"ASIR", "curso"=>1, "nota"=>7),
    array("id"=>2, "nombre"=>"Luis", "ciclo"=>"ASIR", "curso"=>1, "nota"=>6),
    array("id"=>3, "nombre"=>"Marta", "ciclo"=>"DAM", "curso"=>2, "nota"=>8),
    array("id"=>4, "nombre"=>"Carlos", "ciclo"=>"DAM", "curso"=>2, "nota"=>5),
    array("id"=>5, "nombre"=>"Elena", "ciclo"=>"DAW", "curso"=>1, "nota"=>9)
);

echo "<table border='1'>";
echo "<tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Ciclo</th>
        <th>Curso</th>
        <th>Nota</th>
      </tr>";

$total = 0;

foreach ($alumnos as $a) {
    echo "<tr>";
    echo "<td>".$a["id"]."</td>";
    echo "<td>".$a["nombre"]."</td>";
    echo "<td>".$a["ciclo"]."</td>";
    echo "<td>".$a["curso"]."</td>";
    echo "<td>".$a["nota"]."</td>";
    echo "</tr>";

    $total = $total + $a["nota"];
}

echo "</table>";

$num_alumnos = count($alumnos);
$media = $total / $num_alumnos;

echo "<br>Total de alumnos: " . $num_alumnos;
echo "<br>Nota media: " . $media;

?>

</body>
</html>