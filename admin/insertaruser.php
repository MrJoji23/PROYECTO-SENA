<?php
include('conexion.php');
$enlace = conexxion();



    $tdocu = $_POST['opcion'];
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $ape = $_POST['ape'];
    $tel = $_POST['telefono'];
    $correo = $_POST['correo'];
    $contra = $_POST['contra'];
    $rol=$_POST['opcion2'];



    $sql = "INSERT INTO users (Tipo_Documento, ID, Nombre, Apellido, Telefono, Correo, Contrasena, Rol_id) 
    VALUES ('$tdocu', '$id', '$nombre', '$ape', '$tel', '$correo', '$contra', '$rol')";

$consulta = mysqli_query($enlace, $sql);


if ($consulta) {
header("Location: vistaadmin.php"); 
} else {
echo "Error al insertar el usuario: " . mysqli_error($enlace);
}