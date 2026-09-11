<?php

$cliente = $_POST["cliente"];
$producto = $_POST["producto"];
$precio = $_POST["precio"];
$cantidad = $_POST["cantidad"];

// Calcular subtotal

$subtotal = $precio * $cantidad;

// Determinar descuento

if ($subtotal < 100) {

    $descuentoPorcentaje = 0;
} elseif ($subtotal <= 299.99) {

    $descuentoPorcentaje = 5;
} elseif ($subtotal <= 499.99) {

    $descuentoPorcentaje = 10;
} else {

    $descuentoPorcentaje = 15;
}


// Calcular monto descuento

$descuento = $subtotal * ($descuentoPorcentaje / 100);


// Total

$total = $subtotal - $descuento;


?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <title>Resultado</title>

    <link rel="stylesheet" href="css/estilos.css">

</head>


<body>


    <div class="contenedor">

        <h1>Resultado de compra</h1>


        <div class="resultado">


            <p>
                <strong>Cliente:</strong>
                <?php echo $cliente; ?>
            </p>


            <p>
                <strong>Producto:</strong>
                <?php echo $producto; ?>
            </p>


            <p>
                <strong>Subtotal:</strong>
                S/ <?php echo number_format($subtotal, 2); ?>
            </p>


            <p>
                <strong>Descuento:</strong>
                <?php echo $descuentoPorcentaje; ?> %

            </p>


            <p>
                <strong>Monto descontado:</strong>
                S/ <?php echo number_format($descuento, 2); ?>
            </p>


            <p>
                <strong>Total a pagar:</strong>
                S/ <?php echo number_format($total, 2); ?>
            </p>


            <a href="index.php">
                Nueva compra
            </a>


        </div>


    </div>


</body>

</html>