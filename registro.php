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
    <title>Login</title>
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

    <div class="container text-center mt-4 mb-4">
        <h2>Registrate</h2>
        <p>Unete y obten muchos descuentos
        </p>
    </div>

    <div class="container">
    <!-- error durante el registro o inicio de sesión -->
    <!-- Mostrar alerta si hay un error -->
        <?php if (!empty($error)): ?>

            <div class= "alert alert-danger text-center">
                <?php echo $error;?>

            </div>

        <?php endif; ?>
    <!-- Fin de alerta por error -->
            
            
        <form action="registrando.php" method="POST" >

            <div class="form-group">
                <label class="col-form-label">Usuario:</label>
                <input name="user" class="form-control" type="text" required> 
            </div>

            <div class="form-group">
                <label class="col-form-label">Correo:</label>
                <input name="email" class="form-control" type="email" required> 
            </div>

            <div class="form-group">
                <label class="col-form-label">Contraseña:</label>
                <input name="pass" class="form-control" type="password" required>
            </div>
            
            <input class="btn btn-dark mt-2 mb-2" type="submit" value="Registrarme">

            <p class="text-center">¿Ya tienes una cuenta? <strong> <ins> <a href="login.php">
             Iniciar sesion </a></ins> </strong> </p>

        </form>
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