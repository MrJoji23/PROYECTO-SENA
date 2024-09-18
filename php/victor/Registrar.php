<?php
    require_once("Conexion.php");
    $MiEnlace=MiConexion();
    $Sql="insert into cliente (nombre,direccion,telefono,email) values ('".$_POST["nombre"]."','".$_POST["direccion"]."', '".$_POST["telefono"]."', '".$_POST["email"]."')";
    mysqli_query($MiEnlace, $Sql); 
    header("Location: index.PHP");
?>