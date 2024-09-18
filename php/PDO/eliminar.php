<?php
include("conexion.php");
$con = conexion();

$id = $_GET['id'];

$eliminar = "DELETE FROM prueba WHERE Id = :id";
$resultado = $con->prepare($eliminar);
$resultado->bindParam(':id', $id);
$resultado->execute();

header("Location: index.php");
?>
