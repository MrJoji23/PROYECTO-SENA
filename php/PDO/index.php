<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="java.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <title>Document</title>
</head>
<body>
<form action="guardar.php" method="post" enctype="multipart/form-data" onsubmit="return Validar()" onreset="return Limpar()" >
      <center>
      <br>Numero de identificacion <br>
      <input type="text" name="id" id="id"><br>
      <br>Usuario <br>
      <input type="text" name="user"id="user" ><br>
      <br>Nombre Completo<br>
      <input type="text" name="nombre" id="nombre" ><br>
      <br>Telefono</br>
      <input type="text" name="telefono" id="telefono" ><br>
      <br>Correo</br>
      <input type="email" name="correo" id="correo" autocomplete="on"><br>
      <br>Contraseña</br>
      <input type="password" name="contrasena1" id="contrasena1"><br>
      <br>Confirmacion de Contraseña</br>
      <input type="password" name="contrasenaverif" id="contrasenaverif"><br><br>
      <input type="submit" value="Confirmo"> 
      <input type="reset" value="Limpiar"onclick="return Limpiar()">
<br><br>
<input type="button" value="Ver Tabla" onclick="window.location.href ='mostrar.php'"> 
      </center>
</body>
</html>