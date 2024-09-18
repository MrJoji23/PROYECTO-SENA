<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['accion'] == 'Enviar') {

    require_once("Conexion.php");
    $Mienlace = Conexion();

    $placa = $_POST['Placa'];
    $vehiculo = $_POST['Vehiculo'];
    $entrada = $_POST['Entrada'];
    $salida = $_POST['Salida'];

    $query = "INSERT INTO control (Placa, Vehiculo, Entrada, Salida) VALUES ('$placa', '$vehiculo', '$entrada', '$salida')";
    mysqli_query($Mienlace, $query);

    if (mysqli_affected_rows($Mienlace) > 0) {
        echo "Datos guardados correctamente.";
    } else {
        echo "Error al guardar los datos.";
    }

    mysqli_close($Mienlace);

    header('Location: index.php');
    exit();
}
?>
