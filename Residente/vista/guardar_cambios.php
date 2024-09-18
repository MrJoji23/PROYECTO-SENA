<?php
include 'conexion.php';
$conn = conectarBD();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $tipo_documento = $_POST['tipo_documento'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $rol_id = $_POST['rol_id'];

    $sql = "UPDATE users SET 
            Tipo_Documento='$tipo_documento', 
            Nombre='$nombre', 
            Apellido='$apellido', 
            Telefono='$telefono', 
            Correo='$correo', 
            Contrasena='$contraseña',
            Rol_ID='$rol_id' 
            WHERE ID='$id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }
}

$conn->close();
?>
