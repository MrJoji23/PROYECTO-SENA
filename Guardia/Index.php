<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Guardia</title>
        <link rel="stylesheet" href="Estilo.css">
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
                    <li><a href="factura/index.php">Factura </a></li>
                </ul>
            </div>
                <div class="dropdown">
                    <img src="../img/user-regular-24 (1).png" alt=""class="dropbtn" onclick="toggleDropdown()" <br> <p>Administrador</p>
                  
                    <div class="dropdown-content" id="myDropdown">
                        

                    </div>
                </div>
                <script src="script.js"></script>
        </div>
        
        </nav>
    </header>
    <div class="contenedor">
        <form action="Guardar.php" method="post">
            <table>
                <div class="Placa">
                    <tr>
                        <td>Placa</td>
                        <td><input type="text" name="Placa" required></td>
                    </tr>
                </div>
                <div class="Vehiculo">
                    <tr>
                        <td>Vehiculo</td>
                        <td><input type="text" name="Vehiculo" required></td>
                    </tr>
                </div>
                <div class="Entrada">
                    <tr>
                        <td>Hora Entrada</td>
                        <td><input type="time" name="Entrada" required></td>
                    </tr>
                </div>
                <div class="Salida">
                    <tr>
                        <td>Hora Salida</td>
                        <td><input type="time" name="Salida" required></td>
                    </tr>
                </div>
            </table>

            <div class="Enviar">
                <input type="submit" name="accion" value="Enviar">
            </div>

        </form>
    </div>
    <hr>

    <?php
    require_once("Conexion.php");
    $Mienlace = Conexion();
    $result = mysqli_query($Mienlace, "select * from control");
    ?>
<table border="1" cellspacing="2" cellpadding="2" style="margin: 0 auto;">
    <tr>
        <td>&nbsp;Placa&nbsp;</td>
        <td>&nbsp;Vehiculo&nbsp;</td>
        <td>&nbsp;Entrada&nbsp;</td>
        <td>&nbsp;Salida&nbsp;</td>
        <td>&nbsp;Acciones&nbsp;</td>
    </tr>
    <?php
    while ($fila = mysqli_fetch_array($result)) {
        printf(
            "<tr> <td> &nbsp;%s </td><td> &nbsp; %s&nbsp; </td><td> &nbsp;%s&nbsp; </td><td> &nbsp;%s&nbsp; </td>
            <td> 
                <a href='editar.php?Placa=%s'>Editar</a> | 
                <a href='eliminar.php?Placa=%s' onclick='return confirm(\"¿Estás seguro que deseas eliminar este registro?\")'>Eliminar</a> 
            </td></tr>",
            $fila["Placa"],
            $fila["Vehiculo"],
            $fila["Entrada"],
            $fila["Salida"],
            $fila["Placa"],
            $fila["Placa"]
        );
    }
    mysqli_free_result($result);
    ?>
</table>
<footer>
        <p>PCC &copy; 2024.</p>
    </footer>
</body>

</html>