<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script type="text/javascript" src="confirm.js"></script>
      <title>Document</title>
</head>
<body>
      <div class="formulario">
       <form method="post" action="recibe.php" name="form" class="form" onsubmit="return Validar()" onreset="return Limpar()">
      <h1>Ingrese su informacion</h1><br>
       Nombres y Apellidos: <input type="text" name="nombre" placeholder="Ingrese datos" autocomplete="off"  ><br>
      Ingrese Salario: <input type="text" name="salario" autocomplete="off" ><br>
      Ingrese Dias Trabajados: <input type="text" name="dias" autocomplete="off" ><br>
      <input type="submit" name="inicio" value="enviar">
      <input type="button" value="Limpiar" onclick="return Limpiar()" >
       </div>
</body>
</html>