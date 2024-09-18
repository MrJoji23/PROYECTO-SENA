<?php
$conexion = new mysqli("localhost", "root", "", "victor");

if(!$conexion){
      echo"No se conecto, revise.";
}
?>