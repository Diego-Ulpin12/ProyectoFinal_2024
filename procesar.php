<?php

require_once "conexion.php";

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$password = $_POST["password"];

function insertar_registro($conn, $nombre, $email, $password)
{
    $sql = INSERT INTO `registro`( `nombre`, `email`, `password`) 
            VALUES ('$nombre','$email',$password);
    $resultado = mysqli_query($conn, $sql);
};

insertar_registro
(
    $conn,
    $nombre,
    $email,
    $password
);

?>