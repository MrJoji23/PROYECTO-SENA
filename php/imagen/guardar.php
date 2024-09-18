<?php
include("conexion.php");

$ID=$_POST['id'];
$nom=$_POST['nombre'];
$imagen= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$consulta= "INSERT INTO imagen(Id, Nombre, Imagen ) VALUES('$ID', '$nom', '$imagen')";

$resultado= $conexion->query($consulta);

if($resultado){
      header("Location: mostrarimg.php");
}

?>