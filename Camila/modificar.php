<?php
include ('conexion.php');
$enlace= conexxion();

$id= $_GET['id'];

$sql= "SELECT * FROM users WHERE id='$id'";
$consulta= mysqli_query($enlace,$sql);
$fila= mysqli_fetch_array($consulta);
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilomodifyadm.css" />
    <title>EDITAR USUARIO</title>
</head>
<body>
    <div class="crear-usuario">
        <form action="editaruser.php" method="POST">
        <h1>EDITAR USUARIO</h1>
        <input type="hidden" name="id" value="<?= $fila['ID'] ?>">
        Nombre Completo: <input type="text" name="nombre" value="<?=$fila['Nombre'] ?>"><br>
        Apellidos: <input type="text" name="ape" value="<?=$fila['Apellido'] ?>"><br>
        Telefono: <input type="text" name="telefono" value="<?=$fila['Telefono'] ?>"><br>
        Correo: <input type="email" name="correo" value="<?=$fila['Correo'] ?>"><br>
        Contraseña: <input type="password" name="contra" value="<?=$fila['Contrasena'] ?>"><br>

        <input type="submit" value="Actualizar">
</form>
</div>
</body>
</html>