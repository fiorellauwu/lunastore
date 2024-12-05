<?php
require 'db.php';
session_start();

//Obtener los datos enviados a través del FORM con POST
$user = $_POST['user']; 
$pass = $_POST['pass']; 

//Crear la consulta a la BD
$sql = "SELECT username, password FROM users WHERE username='$user' AND password='$pass' ";
$result = $conn->query($sql);

//Validar los consulta de usuarios
if ($result-> num_rows > 0){
    //Usuario existe
    $_SESSION['user'] = $user;
    header("Location: welcome.php");
} else {
    //Usuario o datos incorrecto
    $_SESSION['error']="El Usuario y/o la contrasena ingresada son incorrectos";
    header("Location: login.php");
}

//Cerrar la conexión a la base de datos
$conn = close();

?>