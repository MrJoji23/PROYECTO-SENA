<?php
include("conexion.php");
$nom=$_POST['nombre'];
$email=$_POST['correo'];
$opcion = $_POST['opcion'];


$sql = "INSERT INTO asd (Nombre, Correo, Rango_Edad)  VALUES ('$nom','$email','$opcion')";

if ($conn->query($sql) === TRUE) {

  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>    