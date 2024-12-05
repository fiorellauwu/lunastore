<?php

require 'db.php';
session_start();

//Obtener los datos enviados a través del FORM con POST
$user = $_POST['user'];
$email = $_POST['email'];  
$pass = $_POST['pass']; 

//verificar si el correo my el usuario existe
$sqlVerificar = "SELECT * FROM  users WHERE username = '$user' OR email = '$email' ";
$result = $conn -> query($sqlVerificar);


if($result->num_rows>0){
    //si el correo o usuario existe
    $_SESSION['error']="El Usuario y/o la contrasena ingresada son incorrectos";
    header("Location: registro.php");
}else{
    //si el correo o usuario no existen - agregamos a la bd

    $sqlInsertar = "INSERT INTO users(username,email,password) VALUES ('$user','$email','$pass')";
    $resultInsertar = $conn->query($sqlInsertar);

    if($resultInsertar===TRUE){
        //se registro con exito
        echo"<script> 
        alert('Cuenta registrada con exito'); 
        window.location.href='gracias.php'; 
        </script> ";
    }else{
        $_SESSION['error']="El Usuario y/o la contrasena ingresada son incorrectos";
        header("Location: registro.php");
    }

}

//Cerrar la conexión a la base de datos
$conn = close();

?>