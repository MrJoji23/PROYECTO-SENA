<?php
require_once 'conexion.php';
$costoPorHora = 2000; 

$placa = '';
$tipoVehiculo = '';
$numeroParqueadero = '';
$nombre = '';
$apellido = '';
$horasUsadas = 0;
$totalAPagar = 0; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $placa = isset($_POST['placa']) ? htmlspecialchars($_POST['placa']) : '';
    $tipoVehiculo = isset($_POST['tipo_vehiculo']) ? htmlspecialchars($_POST['tipo_vehiculo']) : '';
    $numeroParqueadero = isset($_POST['numero_parqueadero']) ? htmlspecialchars($_POST['numero_parqueadero']) : '';
    $nombre = isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : '';
    $apellido = isset($_POST['apellido']) ? htmlspecialchars($_POST['apellido']) : '';
    $horasUsadas = isset($_POST['horas_usadas']) ? intval($_POST['horas_usadas']) : 0;
    $totalAPagar = $costoPorHora * $horasUsadas;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura de Parqueadero</title>
    <link rel="stylesheet" href="Estilo.css">
</head>
<body>
<header>
        <div class="lista">
            <div class="logo--tittle">
            <img src="../../img/PCC.jpg" alt="">
            <h1>Parquea con confianza</h1>
            </div>
        <nav>
            <div class="list--menu">
                <ul>
                    <li><a href="../../index.php">Inicio</a></li>
                    <li><a href="../../FAQ/preguntas.html">FAQ</a></li>
                    <li><a href="../index.php">Registro</a></li>
                </ul>
            </div>
                <div class="dropdown">
                <img src="../../img/user-regular-24 (1).png" alt=""class="dropbtn" onclick="toggleDropdown()" <br> <p>Guardia</p>
                    <div class="dropdown-content" id="myDropdown">

                        

                    </div>
                </div>
                <script src="script.js"></script>
        </div>
        
        </nav>
    </header>

<h1>Factura de Parqueadero</h1>

<form method="post" action="">
    <label for="placa">Placa del Vehículo:</label>
    <input type="text" id="placa" name="placa" required value="<?php echo $placa; ?>">
    <br><br>
    <label for="tipo_vehiculo">Tipo de Vehículo:</label>
    <input type="text" id="tipo_vehiculo" name="tipo_vehiculo" required value="<?php echo $tipoVehiculo; ?>">
    <br><br>
    <label for="numero_parqueadero">Número de Parqueadero:</label>
    <input type="text" id="numero_parqueadero" name="numero_parqueadero" required value="<?php echo $numeroParqueadero; ?>">
    <br><br>
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required value="<?php echo $nombre; ?>">
    <br><br>
    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido" required value="<?php echo $apellido; ?>">
    <br><br>
    <label for="horas_usadas">Horas Usadas:</label>
    <input type="number" id="horas_usadas" name="horas_usadas" min="1" required value="<?php echo $horasUsadas; ?>">
    <br><br>
    <input type="submit" value="Generar Factura">
</form>

<?php if ($totalAPagar > 0): ?>
    <div class="factura">
        <h2>Detalles de la Factura</h2>
        <p><strong>Placa:</strong> <?php echo $placa; ?></p>
        <p><strong>Tipo de Vehículo:</strong> <?php echo $tipoVehiculo; ?></p>
        <p><strong>Número de Parqueadero:</strong> <?php echo $numeroParqueadero; ?></p>
        <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
        <p><strong>Apellido:</strong> <?php echo $apellido; ?></p>
        <p><strong>Horas Usadas:</strong> <?php echo $horasUsadas; ?></p>
        <p><strong>Costo por Hora:</strong> <?php echo $costoPorHora; ?> unidades monetarias</p>
        <p><strong>Total a Pagar:</strong> <?php echo $totalAPagar; ?> unidades monetarias</p>
    </div>
<?php endif; ?>
<footer>
        <p>PCC &copy; 2024.</p>
    </footer>
</body>
</html>
