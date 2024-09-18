<?php
include ('conexion.php');
$enlace= conexxion();
$id= $_GET['id'];

$sql="DELETE FROM user_parking WHERE id='$id'";

$consulta= mysqli_query($enlace,$sql);

if ($consulta) {
    header("Location: vistaadmin.php");  
} else {
    echo "ERROR al eliminar el usuario: " . mysqli_error($enlace);
}

?>