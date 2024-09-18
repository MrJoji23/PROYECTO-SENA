<?php
include ('conexion.php');
$enlace= conexxion();
?>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CONTROL DE ACCESO DE USUARIOS</title>
    <link rel="stylesheet" type="text/css" href="estiloregistroguardia.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="registro.js" defer></script>
  </head>
  <body>
    <form name="formulario" method="post" action="insertaradgs.php" class="form" onsubmit="return validar()">
        <h1>REGISTRO</h1>
        <div class="grupo">
            <label for="documento">Tipo de Documento:</label>
            <select name="opcion" id="opcion">
                <option value="op">Seleccione un Tipo:</option>
                <option value="CC">C.C</option>
                <option value="PPT">P.P.T</option>
                <option value="CE">C.E</option>
            </select>
        </div><br>
        <div class="grupo">
            <label for="documento">Numero de Documento:</label>
            <input type="text" name="documento" id="documento" autocomplete="off" />
        </div><br>
        
        <div class="grupo">
            <label for="nombre">Nombres:</label>
            <input type="text" name="nombre" id="nombre" autocomplete="off" />
        </div>
        <div class="grupo">
            <label for="apellido">Apellidos:</label>
            <input type="text" name="apellido" id="apellido" autocomplete="off" />
        </div>
        <div class="grupo">
            <label for="telefono">Telefono:</label>
            <input type="tel" name="telefono" id="telefono" autocomplete="off" />
        </div>
        <div class="grupo">
            <label for="correo">Correo:</label>
            <input type="email" name="correo" id="correo" autocomplete="off" />
        </div>
        <div class="grupo">
            <label for="contraseña">Contraseña:</label>
            <input type="password" name="contraseña" id="contraseña" autocomplete="off"/>
        </div>
        <div class="grupo">
        <label for="documento">Rol:</label>
        <select name="opcion2" id="opcion2"><br>
        <option value="0">Seleccione una opción</option><br>
        <option value="3">Residente</option><br>
        <option value="4">Visitante</option><br>
        <option value="2">Guardia de seguridad</option><br>
        <option value="1">Administración</option><br>
    </select><br><br>
        </div>


        <div class="grupo">
            <input type="submit" value="Enviar" name="envio" />
        </div>
    </form>
  </body>
</html>
