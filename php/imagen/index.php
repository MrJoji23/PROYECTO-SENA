<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
<form action="guardar.php" method="post" enctype="multipart/form-data">
      <br>Numero de identificacion aaa<br>
      <input type="text" name="id" required><br>
      <br>Nombre Completo<br>
      <input type="text" name="nombre" required><br>
      <h3>Ingrese el archivo</h3>
      <input type="file" name="imagen" required><br><br>
      <input type="submit" value="aceptar"> 
</body>
</html>