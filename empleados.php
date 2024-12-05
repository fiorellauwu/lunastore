<!-- INICO DB -->
<?php
    require 'db.php';
    session_start();

    //Variable para la busqueda
    $search = isset ($_GET['search']) ? $_GET['search']:'';

    //cONSULTA sql PARA OBTENER LOS EMPLEADOS CON EL FORM DE BUSQUEDA
    $sql ="SELECT nombre, puesto, email, telefono FROM empleados WHERE nombre LIKE '%$search%' OR puesto LIKE '%$search%' ";
    $result = $conn -> query($sql);
    ?>
    <!-- FIN DB -->
       
      
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css"> <!-- Vincula tu archivo CSS -->

</head>
<body>
    <!-- INICO NAVBAR -->
    <?php
    include 'header.php';
    ?>
      <!-- FIN NAVBAR-->

    <!-- inicio buscador -->
    <div class="container mt-4">
        <form class="d-flex mb-4" method="GET">
            <input class="form-control me-2" type="search"name="search" placeholder="Ingresa el nombre o apellido a buscar" value="<?php echo $search ?>">
            <button class="btn btn-outline-dark" type="submit">Buscar</button>
        </form>
    </div>
   <!-- fin buscador -->

      <div class="container mt-4 mb-4">  
        <h2>Empleados</h2>
     
        <?php if ($result->num_rows > 0) { ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Puesto</th>
                <th>Email</th>
                <th>Teléfono</th>
            </tr>
        </thead>

        <tbody>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo htmlspecialchars($row["nombre"]); ?></td>
                <td><?php echo htmlspecialchars($row["puesto"]); ?></td>
                <td><?php echo htmlspecialchars($row["email"]); ?></td>
                <td><?php echo htmlspecialchars($row["telefono"]); ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
<?php } else { ?>
    <div class="alert alert-warning">
        <p>No existen empleados</p>
    </div>
<?php } ?>
</div>


    
    <!-- INICO FOOTER -->
    <?php
    include 'footer.php';
    ?>
      <!-- FIN FOOTER -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>