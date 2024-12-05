<?php
session_start();

//Código que valida si existe una sesión abierta
if(isset ($_SESSION['user'])){
    header("Location: welcome.php");
    exit();
}

//Capturar el mensaje de error si existe
$error = '';
if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    unset($_SESSION['error']); // Limpiar el mensaje de error después de mostrarlo
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresa</title>
   <!-- HOJA DE ESTILO DE BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- BOXICONS CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Estilos css -->
     <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    
    <!-- INICIO HEADER -->
    <?php
    include 'header.php';
    ?>
    <!-- FIN HEADER -->

    <div class="container text-center mt-4 mb-4">
        <h2>Inicio de sesion</h2>
        <p>Ingresa tus datos para entrar al sistema</p>
    </div>

    <div class="container">

        <!-- Mostrar alerta si hay un error -->
            <?php if (!empty($error)): ?>

                <div class= "alert alert-danger text-center">
                    <?php echo $error;?>

                </div>
        
            <?php endif; ?>
        <!-- Fin de alerta por error -->

        <form action="process.php" method="POST" >

            <div class="form-group">
                <label class="col-form-label">Usuario:</label>
                <input name="user" class="form-control" type="text" required> 
            </div>

            <div class="form-group">
                <label class="col-form-label">Contraseña:</label>
                <input id="pass" name="pass" class="form-control" type="password" required>
                <div class="ojo">
                    <i class='bx bx-show-alt'></i>
                </div>
            </div>

            <div class="form-group mt-2 mb-2">
                <input type="checkbox">Recordar cuenta
            </div>

            <input class="btn btn-dark mt-2 mb-2" type="submit" value="Ingresar">

            <p class="text-center">¿Todavía no tienes una cuenta? <strong> <ins> <a href="registro.php">
             Registrate aquí </a></ins> </strong> </p>

        </form>
    </div>
 

    <!-- INICIO FOOTER -->
     <?php
    include 'footer.php';
    ?>
    <!-- FINI FOOTER -->

    <!-- js Bootstrap -->
     <script src="js/password.js"></script>

    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
</body>
</html>