<?php
include("conexion.php");
$Mienlace = MiConexion();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Residentes y Vehículos</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js"></script>
</head>
<body>

<!-- Formulario combinado -->
<form action="registrardatos_y_autos.php" method="post">
    <section>
        <div class="gen">
            <h1>REGISTRO DE LOS RESIDENTES DEL CONJUNTO ******</h1>
            <h2>Datos personales</h2>
            <label for="Nombres">Tipo de documento </label>
            <select name="opcion1" id="opcion">
                <option value="0">Seleccione una opción</option>
                <option value="C.C">Cédula de ciudadanía</option>
                <option value="T.I">Tarjeta de identidad</option>
                <option value="C.E">Cédula de extranjería</option>
                <option value="PPT">Permiso de Permanencia Temporal</option>
            </select><br><br>
            <label for="doc">Ingrese su Número de documento</label>
            <input type="text" name="doc" id="doc" required placeholder="Número de documento" class="P1">
            <label for="Nombres">Nombres</label>
            <input type="text" name="Nombres" id="Nombres" required placeholder="Ingrese el nombre" class="P1">
            <label for="Apellidos">Apellidos</label>
            <input type="text" id="Apellidos" name="Apellidos" required placeholder="Ingrese apellido" class="P1">
            <label for="phone">Ingrese su teléfono</label>
            <input type="tel" name="phone" id="phone" pattern="[0-9]{10}" required placeholder="Número de teléfono" class="P1">
            <label for="Correo">Correo electrónico</label>
            <input type="email" id="Correo" name="Correo" required placeholder="Ingrese correo electrónico" class="P1">
            <label for="pass">Contraseña</label>
            <input type="password" id="pass" name="pass" required placeholder="Ingrese la Contraseña" class="P1">
            <label for="pass2">Repita la contraseña</label>
            <input type="password" id="pass2" name="pass2" required placeholder="Repita la Contraseña" class="P1">
            <label for="Rol">Escoja su rol</label>
            <select name="opcion2" id="opcion">
                <option value="0">Seleccione una opción</option>
                <option value="3">Residente</option>
                <option value="4">Visitante</option>
                <option value="2">Guardia de seguridad</option>
                <option value="1">Administración</option>
            </select><br><br>
        </div>
    </section>

    <div class="gen">
        <h2>Información del Apartamento</h2>
        <label for="Bloque">Bloque del conjunto</label>
        <input type="number" name="Bloque" id="Bloque" required placeholder="Bloque del conjunto" class="P1">
        <label for="Apartamento">Número de Apartamento</label>
        <input type="number" name="Apartamento" id="Apartamento" required placeholder="Número apartamento" class="P1">
    </div>

    <div class="gen">
        <h2>Información adicional</h2>
        <h4>¿Usted tiene vehículo?</h4>
        <p class="opc"><input type="radio" name="op" value="yes" onclick="toggleQuestions()">SI</p>
        <p class="opc"><input type="radio" name="op" value="nop" onclick="toggleQuestions()">NO</p>
        <div id="additional-questions" style="display: none;">
            <h3>¿Qué vehículo posee?</h3>
            <p class="opc"><input type="radio" name="op2" value="Carro" onclick="toggleQuestions2()">CARRO</p>
            <p class="opc"><input type="radio" name="op2" value="Moto" onclick="toggleQuestions2()">MOTO</p>
        </div>
    </div>

    <div id="additional-questions2" style="display: none;">
    <div class="gen">
        <h3>Información del vehículo</h3>
        <label for="Placa">Placa</label>
        <input type="text" id="Placa" name="Placa" placeholder="Ingrese su placa" class="P1">
        <label for="Marca">Marca</label>
        <input type="text" id="Marca" name="Marca" placeholder="Ingrese su Marca" class="P1">
        <label for="Color">Color</label>
        <input type="text" id="Color" name="Color" placeholder="Ingrese su Color" class="P1">
        </div>
    </div>
    <div class="gen">
    <input type="submit" value="Registrar" class="P2">
    </div>
</form>



</body>
</html>
