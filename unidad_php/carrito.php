<!DOCTYPE html>
<html>
<head>
    <title>Carrito</title>
</head>
<body>

<?php

$carrito = array(
    array("nombre"=>"Teclado", "precio"=>20, "cantidad"=>2),
    array("nombre"=>"Ratón", "precio"=>15, "cantidad"=>1),
    array("nombre"=>"Monitor", "precio"=>150, "cantidad"=>1)
);

if (isset($_POST["nombre"])) {

    $nuevo = array(
        "nombre"=>$_POST["nombre"],
        "precio"=>$_POST["precio"],
        "cantidad"=>$_POST["cantidad"]
    );

    $carrito[] = $nuevo;
}

echo "<h2>Carrito</h2>";

echo "<table border='1'>";
echo "<tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Subtotal</th>
      </tr>";

$total = 0;

foreach ($carrito as $producto) {

    $subtotal = $producto["precio"] * $producto["cantidad"];
    $total = $total + $subtotal;

    echo "<tr>";
    echo "<td>".$producto["nombre"]."</td>";
    echo "<td>".$producto["precio"]."</td>";
    echo "<td>".$producto["cantidad"]."</td>";
    echo "<td>".$subtotal."</td>";
    echo "</tr>";
}

echo "</table>";

echo "<br><b>Total a pagar: ".$total."</b>";

?>

<hr>

<h3>Añadir producto</h3>

<form method="post">
    Nombre: <input type="text" name="nombre"><br><br>
    Precio: <input type="number" name="precio"><br><br>
    Cantidad: <input type="number" name="cantidad"><br><br>
    <input type="submit" value="Añadir">
</form>

</body>
</html>