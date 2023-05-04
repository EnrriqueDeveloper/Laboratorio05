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
    if ($_POST) {
        $tarifa = $_POST['tarifa'];
        $dias = $_POST['dias'];

        $importe_bruto = $tarifa * $dias;
        $descuento = $importe_bruto * 0.15;
        $importe_neto = $importe_bruto - $descuento;
        $lapiceros = $dias * 3;
    }
    ?>
    <div class="container mt-5">
        <h1 class="text-center">Resultados</h1>
        <div class="row">
            <div class="col-md-6">
                <p><strong>Importe bruto: S/.</strong> <?php echo number_format($importe_bruto, 2); ?></p>
                <p><strong>Descuento: S/ </strong> <?php echo number_format($descuento, 2); ?></p>
                <p><strong>Importe neto a pagar: S/. </strong> <?php echo number_format($importe_neto, 2); ?></p>
                <p><strong>Lapiceros de obsequio: </strong> <?php echo $lapiceros; ?></p>
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