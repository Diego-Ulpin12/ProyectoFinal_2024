<?php

require_once "conexion.php";
require "login.php";

$email = $_POST["email"];
$contraseña = $_POST["contraseña"];

function consultar($conn, $email, $contraseña)
{
    $sql = "SELECT email, contraseña FROM registro WHERE email = '$email' AND contraseña = '$contraseña'";
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
    $contraseña,
);
