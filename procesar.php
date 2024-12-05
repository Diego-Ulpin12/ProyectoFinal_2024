<?php

require_once "conexion.php";

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$contraseña = $_POST["contraseña"];

function insertar_registro($conn, $nombre, $email, $contraseña)
{
    $sql = "INSERT INTO  registro (nombre, email, contraseña)
            VALUES ('$nombre', '$email', $contraseña)";
    $resultado = mysqli_query($conn, $sql);
}

insertar_registro
(
    $conn,
    $nombre,
    $email,
    $contraseña,
);