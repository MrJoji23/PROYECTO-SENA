<?php
include("conexion.php");
$Mienlace = MiConexion();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Datos del residente
    $tipo_documento = $_POST['opcion1'];
    $documento = $_POST['doc'];
    $nombres = $_POST['Nombres'];
    $apellidos = $_POST['Apellidos'];
    $telefono = $_POST['phone'];
    $correo = $_POST['Correo'];
    $contraseña = $_POST['pass'];
    $bloque = $_POST['Bloque'];
    $apartamento = $_POST['Apartamento'];
    $rol = $_POST['opcion2'];

    // Insertar en la tabla de residentes
    $Sql = "INSERT INTO users (Tipo_Documento, ID, Nombre, Apellido, Telefono, Correo, Contrasena, Rol_id) 
            VALUES ('$tipo_documento', '$documento', '$nombres', '$apellidos', '$telefono', '$correo', '$contraseña', '$rol')";
    mysqli_query($Mienlace, $Sql); 

    // Si tiene vehículo, insertar en la tabla de vehículos
    if ($_POST['op'] == 'yes') {
        $placa = $_POST['Placa'];
        $marca = $_POST['Marca'];
        $color = $_POST['Color'];

        $query_vehiculo = "INSERT INTO vehiculo (Placa, Modelo, Color) 
                           VALUES ('$placa', '$marca', '$color')";
        mysqli_query($Mienlace, $query_vehiculo);
    }

    // Redirigir o mostrar mensaje de éxito
    header("Location: ../index.php");
}
?>
