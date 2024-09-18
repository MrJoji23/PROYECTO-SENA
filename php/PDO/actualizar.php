<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Actualizar</title>
</head>
<body>
      <?php
      include("conexion.php");
      $con = conexion();

      $id = $_GET['id'];
      $consultar = "SELECT * FROM prueba WHERE Id = :id";
      $resultado = $con->prepare($consultar);
      $resultado->bindParam(':id', $id);
      $resultado->execute();
      $row = $resultado->fetch();
      ?>

      <form action="proceso_actualizar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['Id'] ?>">
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" value="<?php echo $row['Usuario'] ?>"><br>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="<?php echo $row['Nombre_Completo'] ?>"><br>
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" value="<?php echo $row['Telefono'] ?>"><br>
            <label for="correo">Correo:</label>
            <input type="text" name="correo" value="<?php echo $row['Correo'] ?>"><br>
            <input type="submit" value="Actualizar">
      </form>
</body>
</html>
