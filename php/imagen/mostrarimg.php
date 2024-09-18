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
                  <th>Nombres</th>
                  <th>Imagenaa</th>
            </thead>
            <tbody>
                  <?php
                  include ("conexion.php");
                  $consultar = "SELECT * FROM imagen";
                  $resultado = $conexion->query($consultar);

                  while($row = $resultado->fetch_assoc()){
 
                  ?>

                        <tr>
                              <td><?php echo $row['Registro'] ?></td>
                              <td><?php echo $row['Id'] ?></td>
                              <td><?php echo $row['Nombre'] ?></td>
                              <td><img height="150px" src="data:image/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>"/></td>


                        </tr>
                  <?php
                        }

                  ?>
            </tbody>
      </table>

</body>
</html>