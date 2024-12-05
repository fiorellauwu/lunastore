<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-pink">
        <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Luna Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
            <a class="nav-link" href="empleados.php">Empleados</a>
            <a class="nav-link" href="productos.php">Productos</a>
            <a class="nav-link" href="sucursales.php">Sucursales</a>
            <a class="nav-link" href="contacto.php">Contáctanos</a>
            <a class="nav-link" href="registro.php">Crear cuenta</a>
            <a class="nav-link" href="login.php">Ingresar</a>
           </div>
          </div>

          <!-- Mostrar bienvenida de usuario-->
          <?php if (isset($_SESSION['user'])):?>

          <span>Bienvenido, <?php echo ($_SESSION['user']) ; ?> </span>
          <span><a href="logout.php">Cerrar sesion</a></span>
          <?php endif; ?>
        </div>
      </nav>