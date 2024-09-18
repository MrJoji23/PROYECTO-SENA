<?php
include ('conexion.php');
$enlace= MiConexion();
?>


<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CONTROL DE ACCESO DE USUARIOS</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="inicio.js" defer></script>
    <link rel="stylesheet" href="estiloiniciosesion.css">
    <link rel="stylesheet" href="../style.css">
    <script src="../script.js"></script>
</head>

<body>
    <header>
        <div class="lista">
            <div class="logo--tittle">
            <img src="../img/PCC.jpg" alt="">
            <h1>Parquea con confianza</h1>
            </div>
        <nav>
            <div class="list--menu">
                <ul>
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="../FAQ/preguntas.html">FAQ</a></li>
                </ul>
            </div>
                <div class="dropdown">
                    <img src="../img/user-regular-24 (1).png" alt=""class="dropbtn" onclick="toggleDropdown()"> 
                    <div class="dropdown-content" id="myDropdown">
                        <a href="../Registro_general/registro_participantes.html">Registrar</a>
                        

                    </div>
                </div>
                <script src="script.js"></script>
        </div>
        
        </nav>
    </header>


    <div class="container">
        <div class="formulario">
            <h2>INICIO DE SESIÓN</h2>
            <form action="validar.php" method="post" >
                <div class="username">
                    <b><label for="usuario">Numero De identificacion</label></b>
                    <input type="text" name="usuario" id="usuario" autocomplete="on">
                </div>
                <div class="username">
                    <b><label for="contraseña">Contraseña</label></b>
                    <input type="password" name="contraseña" id="contraseña" autocomplete="off">
                </div>
                <input type="submit" value="Iniciar sesión" class="Iniciar">
                <input type="button" value="Registrarse" class="registrarse" onclick="window.location.href='../Registro_general/registro_participantes.html'">
            </form>
        </div>
    </div>

    <footer>
        <a href="https://twitter.com">Twitter</a>
        <a href="https://facebook.com">Facebook</a>
        <a href="https://instagram.com">Instagram</a>
    </footer>
</body>
</html>


