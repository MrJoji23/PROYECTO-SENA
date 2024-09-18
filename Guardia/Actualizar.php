<?php
require_once("Conexion.php");
$Mienlace = Conexion();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $placaOriginal = $_POST['PlacaOriginal'];
    $placaNueva = $_POST['PlacaNueva']; 
    $vehiculo = $_POST['Vehiculo'];
    $entrada = $_POST['Entrada'];
    $salida = $_POST['Salida'];


    $query = "UPDATE control 
              SET Placa = '$placaNueva', Vehiculo = '$vehiculo', Entrada = '$entrada', Salida = '$salida' 
              WHERE Placa = '$placaOriginal'";

    if (mysqli_query($Mienlace, $query)) {
        echo "Registro actualizado correctamente";
    } else {
        echo "Error al actualizar el registro: " . mysqli_error($Mienlace);
    }

    mysqli_close($Mienlace);

    header("Location: index.php");
}
?>
