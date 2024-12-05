<?php
session_start();

//Código que valida si existe una sesión abierta
if(!isset ($_SESSION['user'])){
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css"> <!-- Vincula tu archivo CSS --></head>
<body>  

    <!-- INICIO HEADER -->
    <?php
    include 'header.php';
    ?>
    <!-- FIN HEADER -->

    <div class="container">
    <h2>¡Hola, <?php echo ($_SESSION['user']); ?>!</h2>
    <!-- Diseno de interfaz -->
    <div class="row">
            <div class="col-4">
            <img src="images/empleados.png" class="pb-3" width="100px" alt="">  
                <h4><a href="gestionar_empleados.php">Gestionar Empleados</a></h2>
            </div>
            
            <div class="col-4">
            <img src="images/productos.png" class="pb-3" width="100px" alt="">
                <h4><a href="gestionar_productos.php">Gestionar Productos</a></h2>
            </div>
            
            <div class="col-4">
            <img src="images/sucursales.png" class="pb-3" width="100px" alt="">
                <h4><a href="gestionar_sucursales.php">Gestionar Sucursales</a></h2>
            </div>

    </div>
    <!-- fin de interfaz crud -->
        <p>Estas conectado en el sistema</p>
        <p><a href="logout.php">Cerrar sesión</a></p>
    </div>

     <!-- INICIO FOOTER -->
     <?php
    include 'footer.php';
    ?>
    <!-- FINI FOOTER -->

    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
</body>
</html>