<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Imagen</title>
</head>
<body>
      <table  border="2" cellspacing="3" cellpadding="2" style="margin: 0 auto;">
            <thead>
                  <th>Registro</th>
                  <th>Identificacion</th>
                  <th>Usuario</th>
                  <th>Nombre</th>
                  <th>Telefono</th>
                  <th>Correo</th>
                  <th>Contraseña</th>
                  <th>Acciones</th>
            </thead>
            <tbody>
                  <?php
                  include("conexion.php");
                  $con = conexion();
                  $consultar = "SELECT * FROM prueba";
                  $resultado = $con->prepare($consultar);
                  $resultado->execute();
                  $result = $resultado->fetchALL();

                  foreach($result as $row){
                  ?>

                        <tr>
                              <td><?php echo $row['Registro'] ?></td>
                              <td><?php echo $row['Id'] ?></td>
                              <td><?php echo $row['Usuario'] ?></td>
                              <td><?php echo $row['Nombre_Completo'] ?></td>
                              <td><?php echo $row['Telefono'] ?></td>
                              <td><?php echo $row['Correo'] ?></td>
                              <td><?php echo "****" ?></td>
                              <td>
                                    <a href="actualizar.php?id=<?php echo $row['Id'] ?>">Actualizar</a>
                                    <a href="eliminar.php?id=<?php echo $row['Id'] ?>" onclick="return confirm('¿Estás seguro de eliminar este registro?')">Eliminar</a>
                              </td>
                        </tr>
                  <?php
                        }

                  ?>
            </tbody>
      </table>
 <input type="button" value="Nuevo dato" onclick="window.location.href ='index.php';"> 
</body>
</html>
