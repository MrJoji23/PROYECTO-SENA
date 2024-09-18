<?php
require_once("Conexion.php");
$Mienlace = Conexion();

if (isset($_GET['Placa'])) {
    $placa = $_GET['Placa'];
    $query = "DELETE FROM control WHERE Placa = '$placa'";
    
    if (mysqli_query($Mienlace, $query)) {
        echo "Registro eliminado correctamente";
    } else {
        echo "Error al eliminar el registro: " . mysqli_error($Mienlace);
    }

    mysqli_close($Mienlace);
    header("Location: index.php");
}
?>
