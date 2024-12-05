    <!-- INICO DB -->
    <?php
    require 'db.php';
    session_start();
    
    //Variable para la busqueda
    $search = isset ($_GET['search']) ? $_GET['search']:'';

    //cONSULTA sql PARA OBTENER LOS PRODUCTOS CON EL FORM DE BUSQUEDA
    $sql ="SELECT nombre, precio, descripcion, stock FROM productos WHERE nombre LIKE '%$search%' OR descripcion LIKE '%$search%' ";
    $result = $conn -> query($sql);    
    ?>
    <!-- FIN DB -->
       
      
      <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
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

    <!-- inicio buscador -->
    <div class="container mt-4">
        <form class="d-flex mb-4" method="GET">
            <input class="form-control me-2" type="search"name="search" placeholder="Ingresa el producto a buscar" value="<?php echo $search ?>">
            <button class="btn btn-outline-dark" type="submit">Buscar</button>
        </form>
    </div>
   <!-- fin buscador -->
      
      <div class="container mt-4 mb-4">  
    <h2>Productos</h2>
    <?php 
    // Verificamos si hay resultados
    if ($result->num_rows > 0) {
        echo "<table class='table table-striped'>"; // Clase de Bootstrap
        echo "<thead>";
        echo "<tr>";
        echo "<th>Nombre</th>";
        echo "<th>Precio</th>";
        echo "<th>Descripción</th>";
        echo "<th>Stock</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row["nombre"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["precio"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["descripcion"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["stock"]) . "</td>";
            echo "</tr>";
        }
        
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "No existen productos";
    }
    ?>  
</div>


    
    
    <!-- INICO FOOTER -->
    <?php
    include 'footer.php';
    ?>
      <!-- FIN FOOTER -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>