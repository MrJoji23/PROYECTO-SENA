<?php
include ('conexion.php');
$enlace= conexxion();


$id = $_POST['id'];
$nombre = $_POST['nombre'];
$ape = $_POST['ape'];
$tel = $_POST['telefono'];
$correo = $_POST['correo'];
$contra = $_POST['contra'];

$sql = "UPDATE users SET Nombre='$nombre', Apellido='$ape', Telefono='$tel', Correo='$correo', Contrasena='$contra' WHERE ID='$id'";


$consulta = mysqli_query($enlace, $sql);


if ($consulta) {
    header("Location: vistaadmin.php");  
} else {
    echo "ERROR al actualizar el usuario: " . mysqli_error($enlace);
}

mysqli_close($enlace);
?>
