<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Calculadora de Sueldo de Vendedores</title>
    <link rel="stylesheet" href="js/Ejercicio2.js">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $precio_cono = $_POST["precio_cono"];
        $cantidad_conos = $_POST["cantidad_conos"];
        $importe = $precio_cono * $cantidad_conos;
        $descuento1 = 0.05 * $importe;
        $importe_descuento1 = $importe - $descuento1;
        $descuento2 = 0.05 * $importe_descuento1;
        $total_descuento = $descuento1 + $descuento2;
        $importe_final = $importe_descuento1 - $descuento2;
    }
    ?>
    <div class="container">
        <h1 class="text-center">Resultados</h1>
        <div class="row min-vh-100 d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="alert alert-success">
                <p><strong>Importe de compra: S/.</strong> <?php echo $importe; ?></p>
                <p><strong>Descuento 1: S/ </strong> <?php echo $descuento1; ?></p>
                <p><strong>Importe con descuento 1: S/. </strong> <?php echo $importe_descuento1; ?></p>
                <p><strong>Descuento 2: S/ </strong> <?php echo $descuento2; ?></p>
                <p><strong>Total de descuentos: S/ </strong> <?php echo $total_descuento; ?></p>
                <p><strong>Importe final a pagar: S/ </strong> <?php echo $importe_final; ?></p>
                <p><i>¡Aprovecha esta oferta especial en la compra de conos de CD!</i></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>