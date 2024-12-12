<?php

require_once "conexion.php";

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$contraseña = $_POST["contraseña"];

function insertar_registro($conn, $nombre, $apellido, $email, $contraseña)
{
    $sql = "INSERT INTO  registro (nombre, apellido, email, contraseña)
            VALUES ('$nombre', '$apellido', '$email', $contraseña)";
    $resultado = mysqli_query($conn, $sql);
}

insertar_registro
(
    $conn,
    $nombre,
    $apellido,
    $email,
    $contraseña
);
