    <!-- INICO DB -->
    <?php
    require 'db.php';
    session_start();

    //Código que valida si existe una sesión abierta
if(!isset ($_SESSION['user'])){
    header("Location: login.php");
    exit();
}   

// Procesar eliminación de empleado

if (isset($_POST['delete_productos_id'])) {
    $productos_id = $_POST['delete_productos_id'];
    $stmt = $conn->prepare("DELETE FROM productos WHERE id = ?");
    $stmt->bind_param("i", $productos_id);
    if ($stmt->execute()) {
        echo "<script>alert('Empleado eliminado con éxito');</script>";
        header("Location: gestionar_productos.php"); // Redirige después de la eliminación
        exit();
    } else {
        echo "<script>alert('Error al eliminar el empleado');</script>";
    }
}

//Agregar logica para VER informacion de un empleado especifico
if(isset($_GET['vista_productos_id'])){
    $productos_id = $_GET['vista_productos_id'];
    $stmt = $conn -> prepare("SELECT*FROM productos WHERE productos_id = ?");
    $stmt->bind_param("i", $productos_id);
    $stmt->execute();
    $productos= $stmt->get_result()->fetch_assoc();
}

//Procesar crear empleado desde el formulario
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $stock = $_POST['stock'];

//insertar el nuevo empleadoa la base de datos
    $stmt = $conn -> prepare("INSERT INTO productos(nombre, precio, descripcion, stock) 
    VALUES (?,?,?,?)");
    $stmt -> bind_param("sdsi",$nombre,$precio,$descripcion,$stock);
    if ($stmt -> execute()){
        echo "<script>alert('Empleado agregadoo con exito')</script>";
    }else{
        echo "<script>alert('Error al agregar al empleado')</script>";
    }
    $stmt -> close();
    }
    
    //Variable para la busqueda
    $search = isset ($_GET['search']) ? $_GET['search']:'';

    //cONSULTA sql PARA OBTENER LOS PRODUCTOS CON EL FORM DE BUSQUEDA
    $sql ="SELECT productos_id, nombre, precio, descripcion, stock FROM productos WHERE nombre LIKE '%$search%' OR descripcion LIKE '%$search%' ";
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
    <!-- FONTAWESOME ICONOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <!-- INICO NAVBAR -->
    <?php
    include 'admin_header.php';
    ?>
      <!-- FIN NAVBAR-->
    <!-- INICIO TITULO DE TABLA -->
        <div class="container mt-4 mb-4">
            <h2>Tabla de Producto</h2>
        </div>
    <!-- FIN TITULO DE TABLA -->
    <!-- inicio buscador -->
    <div class="container mt-4">
        <form class="d-flex mb-4" method="GET">
            <input class="form-control me-2" type="search"name="search" placeholder="Ingresa el producto a buscar" value="<?php echo $search ?>">
            <button class="btn btn-outline-dark" type="submit">Buscar</button>
        </form>
    </div>
   <!-- fin buscador -->
    
        <!-- INICIO BOTONES -->
            <div class="container d-flex justify-content-end mt-2">
                <button class="btn btn-dark mt-2 me-2" data-bs-toggle="modal" data-bs-target="#agregarEmpleadoModal"><i class="fa-solid fa-user-plus"></i> Agregar producto</button>
                <button class="btn btn-outline-dark mt-2 me-2"><i class="fa-regular fa-file-pdf"></i> Descargar productos</button>
            </div>
        <!-- FIN BOTONES -->

    <!-- INICIO DE TABLA DE PRODUCTOS -->
      <div class="container mt-4 mb-4">  
    <!-- // Verificamos si hay resultados -->
    <?php if ($result->num_rows > 0) { ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Descripción</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row["nombre"]); ?></td>
                        <td><?php echo htmlspecialchars($row["precio"]); ?></td>
                        <td><?php echo htmlspecialchars($row["descripcion"]); ?></td>
                        <td><?php echo htmlspecialchars($row["stock"]); ?></td>

                        <!-- boton de ver -->
                        <td class="option">
                        <form method="GET">
                            <input type="hidden" name="vista_productos_id" value="<?php echo $row['productos_id']; ?>">
                            <button type="submit" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top"  title="Ver">
                            <i class="fa-regular fa-eye"></i>
                            </button>
                        </form>
                        </td>
                        <!-- boton de editar -->
                <td class="option">
                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editarEmpleadosModal">
                    <i class="fa-regular fa-pen-to-square"></i>
                    </button>
                </td>
                        <!-- boton de eliminar -->
                        <td class="option">
                            <form method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este empleado?');">
                            <input type="hidden" name="delete_productos_id" value="<?php echo $row['productos_id']; ?>">
                            <button type="submit" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Eliminar">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <div class="alert alert-warning">
            <p>No existen productos</p>
        </div>
    <?php } ?>
    </div>
        <!-- INICIO MODAL AGREGAR  EMPLEADO-->

        <div class="modal fade" id="agregarEmpleadoModal" tabindex="-1" aria-labelledby="agregarEmpleadoModal" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title" id="agregarEmpleadoModal">Agregar Nuevo Empleado</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>

                </div>

                <div class="modal-body">

                    <form method="POST">

                    <div class="mb-3">
                        <label>Nombre</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Precio</label>
                        <input type="number" name="precio" step="0.01" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Descripcion</label>
                        <input type="text" name="descripcion" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Stock</label>
                        <input type="number" name="stock" class="form-control" required>
                    </div>

                    <div class="mb-3">
                                <input type="submit" class="btn btn-dark" value="Crear Producto">
                                </div>
                    </form>

                </div>

            </div>

        </div>

        </div>

 <!-- FIN MODAL AGREGAR  EMPLEADO-->
 
 <!-- INICIO MODAL VER EMPLEADO -->

 <?php if (isset($productos)) { ?>

<div class="modal fade show d-block" tabindex="-1" aria-labelledby="verProductosModal" aria-hidden="true" style="background: rgba(0,0,0,0.5);">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="verProductosModal">Detalles del Empleado</h5>
                <a href="gestionar_productos.php" class="btn-close" aria-label="Cerrar"></a>
            </div>
            <div class="modal-body">
              <p><strong>Nombre:</strong> <?php echo $productos['nombre'];?></p>
              <p><strong>Apellido:</strong> <?php echo $productos['precio'];?></p>
              <p><strong>Email:</strong> <?php echo $productos['descripcion'];?></p>
              <p><strong>Telefono:</strong> <?php echo $productos['stock'];?></p> 
            </div>
            <div class="modal-footer">
                <a href="gestionar_empleados.php" class="btn btn-secondary">Cerrar</a>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<!-- INICIO MODAL EDITAR EMPLEADO -->
<div class="modal fade" id="editarEmpleadosModal" tabindex="-1" aria-labelledby="editarEmpleadosModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Empleado</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="">
                    <input type="hidden" name="productos_id">
                    <div class="mb-3">
                        <label>Nombre</label>
                        <input type="text" name="nombre" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Precio</label>
                        <input type="number" name="precio" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Descripcion</label>
                        <input type="text" name="descripcion" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Stock</label>
                        <input type="number" name="stock" class="form-control">
                    </div>
                    <button type="submit" name="update_employee" class="btn btn-dark">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>
 </div>
 <!-- FIN MODAL EDITAR EMPLEADO -->
<!-- INICIO SCRIP TOOLTIP -->
<script>
                document.addEventListener('DOMContentLoaded', function () {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)

            })

            });
        </script>
    <!-- FIN SCRIP TOOLTIP -->
    <!-- INICO FOOTER -->
    <?php
    include 'admin_footer.php';
    ?>
      <!-- FIN FOOTER -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>