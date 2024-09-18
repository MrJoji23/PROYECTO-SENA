<?php
$host = "localhost:3306";
$user = "root";
$password = "";
$db_name = "radd";

$conn = new mysqli($host, $user, $password, $db_name);

if($conn -> connect_errno){
      die("Conexión fallida: ". $conn -> connect_error);
}




?>