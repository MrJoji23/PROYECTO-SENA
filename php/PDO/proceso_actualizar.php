<?php
include("conexion.php");
$con = conexion();

$id = $_POST['id'];
$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

$actualizar = "UPDATE prueba SET Usuario = :usuario, Nombre_Completo = :nombre, Telefono = :telefono, Correo = :correo WHERE Id = :id";
$resultado = $con->prepare($actualizar);
$resultado->bindParam(':usuario', $usuario);
$resultado->bindParam(':nombre', $nombre);
$resultado->bindParam(':telefono', $telefono);
$resultado->bindParam(':correo', $correo);
$resultado->bindParam(':id', $id);

// Imprimir la consulta SQL para depuración
echo $actualizar;

$resultado->execute();

header("Location: index.php");
?>
