<?php
include('conexion.php');
$enlace=conexxion();

$tdocu=$_POST['opcion'];
$id= $_POST['documento'];
$nombre= $_POST['nombre'];
$ape= $_POST['apellido'];
$tel=$_POST['telefono'];
$correo=$_POST['correo'];
$contra=$_POST['contraseña'];
$rol=$_POST['opcion2'];


$sql= "INSERT INTO users VALUES( '$tdocu', '$id','$nombre', '$ape', '$tel', '$correo', '$contra','$rol')";
$consulta=mysqli_query($enlace,$sql);

if($consulta){
    header("location:registroguaryadmin.php");
};
?>