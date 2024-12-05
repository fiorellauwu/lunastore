<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Luna Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css"> <!-- Vincula tu archivo CSS -->
</head>
<body>


    <!-- INICO NAVBAR -->
    <?php
    include 'header.php';
    ?>
      <!-- FIN NAVBAR-->
    <div class="container mt-5">
        <h2>Contacto</h2>
        <p>Dirección: Calle 123, Villa El Salvador, Lima, Perú</p>
        <p>Horario de atención: Lunes a Sábado, 9:00 AM - 6:00 PM</p>
        <p>Síguenos en nuestras redes sociales:</p>
        <ul>
            <li><a href="https://www.facebook.com/Lunastoreperuonline/?locale=ga_IE">Facebook</a></li>
            <li><a href="https://www.instagram.com/luna_store/reels/">Instagram</a></li>
        </ul>
        <h3>Formulario de contacto</h3>
        <form>
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="form-group">
                <label for="message">Mensaje</label>
                <textarea class="form-control" id="message" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <h3>Ubicación</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345097077!2d-70.05989668557912!3d-12.048689545839558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8c8e04c84ab%3A0xe5f9be169ec4ed63!2sLima%2C%20Per%C3%BA!5e0!3m2!1ses-419!2sco!4v1616616728305!5m2!1ses-419!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
