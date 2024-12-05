<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luna Store</title>
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

    <!-- INICIO CARROUSEL -->
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="images/slide1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="images/slide2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="images/slide3.png" class="d-block w-100" alt="...">
            </div>
        </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
    </div>
    <!-- FIN CARROUSEL -->

    <!-- SECCIÓN DE OFERTAS -->
    <div class="container mt-4">
        <h2>Mundo Mascotas</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="images/oferta1.png" class="card-img-top" alt="Oferta 1">
                    <div class="card-body">
                        <a href="productos.php" class="btn btn-primary w-100">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/oferta2.png" class="card-img-top" alt="Oferta 2">
                    <div class="card-body">
                        <a href="productos.php" class="btn btn-primary w-100">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/oferta3.png" class="card-img-top" alt="Oferta 3">
                    <div class="card-body">
                        <a href="productos.php" class="btn btn-primary w-100">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        
    <!-- contenedor de productos -->
    
    <div class="container mt-4">
        <h2>Productos en Oferta</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="images/producto4.webp" class="card-img-top" alt="Oferta 1">
                    <div class="card-body">
                    <h5>antes<del> S/ 40.00</del></h5>
                    <h4>ahora S/ 10.00</h4>
                    <button class="btn btn-primary btn-md">
                        <i class="bi bi-cart"></i> Agregar al carrito
                    </button>
                    <button class="btn btn-outline-primary btn-md"> Ver más </button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/producto6.webp" class="card-img-top" alt="Oferta 1">
                    <div class="card-body">
                    <h6>antes<del> S/ 250.00</del></h6>
                    <h4>ahora S/ 50.00</h4>
                    <button class="btn btn-primary btn-md">
                        <i class="bi bi-cart"></i> Agregar al carrito
                    </button>
                    <button class="btn btn-outline-primary btn-md"> Ver más </button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/producto5.webp" class="card-img-top" alt="Oferta 1">
                    <div class="card-body">
                    <h6>antes<del> S/ 300.00</del></h6>
                    <h4>ahora S/ 110.00</h4>
                    <button class="btn btn-primary btn-md">
                        <i class="bi bi-cart"></i> Agregar al carrito
                    </button>
                    <button class="btn btn-outline-primary btn-md"> Ver más </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- SECCIÓN DE TESTIMONIOS -->
    <div class="container mt-4">
        <h2>Testimonios de Clientes</h2>
        <div class="row">
            <div class="col-md-6">
                <blockquote class="blockquote">
                    <p>"Luna Store tiene los mejores productos para mis mascotas. ¡Estoy muy satisfecho!"</p>
                    <footer class="blockquote-footer">Cliente Satisfecho</footer>
                </blockquote>
            </div>
            <div class="col-md-6">
                <blockquote class="blockquote">
                    <p>"Un servicio excepcional y productos de calidad. ¡Recomiendo Luna Store!"</p>
                    <footer class="blockquote-footer">Cliente Feliz</footer>
                </blockquote>
            </div>
        </div>
    </div>


    
    <!-- INICO FOOTER -->
    <?php
    include 'footer.php';
    ?>
      <!-- FIN FOOTER -->

    <!-- CSS ONLY-->
    <link rel="stylesheet2" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<!-- Ctrl+k+c -->