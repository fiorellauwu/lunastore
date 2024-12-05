<?php


// //Código que valida si existe una sesión abierta
// if (!isset($_SESSION['registered']) || $_SESSION['registered'] !== true) {
//     header("Location: registro.php"); // Redirigir si no está registrado
//     exit();
// }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gracias - Luna Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css"> <!-- Vincula tu archivo CSS -->
</head>
<body>

    <!-- INICIO HEADER -->
    <?php
    include 'header.php';
    ?>
    <!-- FIN HEADER -->

    <div class="container mt-5">
        <h2>¡Cuenta creada con éxito!</h2>
        <img src="images/exito.png" alt="Éxito" class="img-fluid">
        <p>Gracias por registrarte en Luna Store.</p>
        <a href="index.php" class="btn btn-primary">Volver a la tienda</a>
    </div>

    <!-- INICIO FOOTER -->
    <?php
    include 'footer.php';
    ?>
    <!-- FINI FOOTER -->

    <!-- CSS ONLY-->
    <link rel="stylesheet2" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
