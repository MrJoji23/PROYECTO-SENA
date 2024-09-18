<?php
require_once("conexion.php");
$Mienlace = MiConexion();

if (!$Mienlace) {
    die("Error de conexión: " . mysqli_connect_error());
}

$usuario = $_POST['usuario'];
$contrasena = $_POST['contraseña'];
session_start();

$consulta = "SELECT * FROM users WHERE ID='$usuario' AND Contrasena='$contrasena'";
$resultado = mysqli_query($Mienlace, $consulta);

if (!$resultado) {
    die("Error en la consulta: " . mysqli_error($Mienlace));
}

$filas = mysqli_fetch_array($resultado);

if ($filas) {
    if ($filas['Rol_id'] == 1) { // Administrador
        header("location:../admin/vistaadmin.php");
        exit;
    } elseif ($filas['Rol_id'] == 2) { // Guardia
        header("location:../Guardia/Index.php");
        exit;
    } elseif ($filas['Rol_id'] == 3) { // Residente
        header("location:../Residente/vista/index.php");
        exit;
    }
} else {
    // Manejo de error si no hay coincidencias
    echo "<script>alert('Usuario o contraseña incorrectos.');</script>";
    echo "<script>window.location.href='inicio.php';</script>";
}
?>
