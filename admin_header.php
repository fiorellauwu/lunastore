<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Luna Store Gestor</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" href="gestionar_empleados.php">Gestionar Empleados</a>
            <a class="nav-link" href="gestionar_productos.php">Gestionar Productos</a>
            <a class="nav-link" href="gestionar_sucursales.php">Gestionar Sucursales</a>
           </div>
          </div>

          <!-- Si existe sesion, mostrar bienvenida de usuario-->
          <?php if (isset($_SESSION['user'])): ?>
              <!-- mostrar bienvenida -->
          <div class="bienvenida">
            <img src="images/avatar.png" class="avatar" alt="avatar">
              <span class="text-white">Bienvenido, <?php echo ($_SESSION['user']); ?> </span>
              <span><a href="logout.php">Cerrar sesion</a></span> 
          </div>
          <?php endif; ?>    
        </div>
        
      </nav>