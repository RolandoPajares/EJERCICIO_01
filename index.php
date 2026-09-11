<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Calculadora de Compra</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    

    <div class="contenedor">

        <h1>Calculadora de Compra</h1>

        <form action="resultado.php" method="POST">

            <label>Nombre del cliente:</label>
            <input type="text" name="cliente" required>

            <label>Nombre del producto:</label>
            <input type="text" name="producto" required>

            <label>Precio del producto:</label>
            <input type="number" step="0.01" name="precio" required>

            <label>Cantidad comprada:</label>
            <input type="number" name="cantidad" required>

            <button type="submit">
                Calcular compra
            </button>
        </form>
    </div>
</body>

</html>