<?php

require_once "conexion.php";
require "login.php";

$email = $_POST["email"];
$password = $_POST["password"];
if($_POST["password"]==$_POST["passwordConfirm"]){
    continue
}else{
    
}


function consultar($conn, $email, $password)
{
    $sql = "SELECT email, password FROM registro WHERE email = '$email' AND password = '$password'";
    $resultado = mysqli_query($conn, $sql);

    // Verificar si la consulta fue exitosa
    if (!$resultado) {
        die("Error en la consulta: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($resultado) > 0) {
        echo "Bienvenido usuario";
    } else {
        echo "El usuario ingresado no existe. Por favor registrese primero.";
    }

}

consultar
(
    $conn,
    $email,
    $password,
);
