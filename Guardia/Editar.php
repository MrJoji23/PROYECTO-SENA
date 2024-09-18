<?php
require_once("Conexion.php");
$Mienlace = Conexion();

if (isset($_GET['Placa'])) {
    $placa = $_GET['Placa'];
    $result = mysqli_query($Mienlace, "SELECT * FROM control WHERE Placa = '$placa'");
    $fila = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Editar</title>
        <link rel="stylesheet" href="Estilo.css">
    </head>
    <body>
    <header>
        <div class="lista">
            <div class="logo--tittle">
            <img src="img/PCC.jpg" alt="">
            <h1>Parquea con confianza</h1>
            </div>
        <nav>
            <div class="list--menu">
                <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="./FAQ/preguntas.html">FAQ</a></li>
                </ul>
            </div>
                <div class="dropdown">
                <img src="img/user-regular-24 (1).png" alt=""class="dropbtn" onclick="toggleDropdown()" <br> <p>Administrador</p>
                    <div class="dropdown-content" id="myDropdown">
                        <a href="/Pagina/Camila/iniciosesion.html">Ingresar</a>
                        <a href="/Pagina/Registro_general/registro participantes.html">Registrar</a>
                        

                    </div>
                </div>
                <script src="script.js"></script>
        </div>
        
        </nav>
    </header>
        
    <form action="actualizar.php" method="post">

        Placa: <input type="text" name="PlacaNueva" value="<?php echo $fila['Placa']; ?>" required><br>
        <input type="hidden" name="PlacaOriginal" value="<?php echo $fila['Placa']; ?>">
        Vehiculo: <input type="text" name="Vehiculo" value="<?php echo $fila['Vehiculo']; ?>" required><br>
        Hora Entrada: <input type="time" name="Entrada" value="<?php echo $fila['Entrada']; ?>" required><br>
        Hora Salida: <input type="time" name="Salida" value="<?php echo $fila['Salida']; ?>" required><br>
        <input type="submit" value="Actualizar">
    </form>
    <footer>
        <p>PCC &copy; 2024.</p>
    </footer>
    </body>
</html>
<?php
    mysqli_free_result($result);
}
mysqli_close($Mienlace);
?>
