<?php
include("conexion.php");
$con=conexion();
$id=$_POST['id'];
$usuario=$_POST['user'];
$nom=$_POST['nombre'];
$telef=$_POST['telefono'];
$correo=$_POST['correo'];
$contra1=$_POST['contrasena1'];
$contra2=$_POST['contrasenaverif'];


$resultado= $con->prepare ("INSERT INTO prueba (Id, Usuario, Nombre_Completo, Telefono, Correo, Contrasena1, ContrasenaVerif)VALUES('".$id."', '".$usuario."', '".$nom."','".$telef."','".$correo."','".$contra1."','".$contra2."')");
$resultado->execute();



if($resultado){
      header("Location: mostrar.php");
}

?>