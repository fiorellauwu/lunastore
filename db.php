<?php
$servername = "localhost";
$username = "root"; // Cambia según tu configuración
$password = ""; // Cambia según tu configuración
$dbname = "luna_store"; // Nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// VAlidar conexion
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

//Consulta SQL para mostrar contenido de empleados
$sql="SELECT nombre, puesto, email, telefono FROM empleados";
$result=$conn->query($sql);

//Consulta para mostrar el nombre de los pproductos // where condiciona el filtro de lo que solicitas
$sql="SELECT nombre, precio, descripcion, stock FROM productos WHERE stock>=20";
$result=$conn->query($sql);

//Consultar para mostrar nombre de departamentos
$sql="SELECT nombre, direccion, telefono, email FROM sucursales";
$result=$conn->query($sql);

?>