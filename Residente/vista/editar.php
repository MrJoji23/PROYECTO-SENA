<?php
include 'conexion.php';

$conn = conectarBD();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
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
                </ul>
            </div>
                <div class="dropdown">
                    <img src="../../img/user-regular-24 (1).png" alt=""class="dropbtn" onclick="toggleDropdown()" <br> <p>Usuario</p>
                  
                    <div class="dropdown-content" id="myDropdown">

                        

                    </div>
                </div>
                <script src="script.js"></script>
        </div>
        
        </nav>
    </header>
    <h2>Editar Usuario</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];

        $sql = "SELECT * FROM users WHERE ID = '$id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>

            <form method="POST" action="guardar_cambios.php">
                <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">

                <label for="tipo_documento">Tipo de Documento:</label>
                <input type="text" id="tipo_documento" name="tipo_documento" value="<?php echo $row['Tipo_Documento']; ?>" required><br>

                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="<?php echo $row['Nombre']; ?>" required><br>

                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" value="<?php echo $row['Apellido']; ?>" required><br>

                <label for="telefono">Telefono:</label>
                <input type="text" id="telefono" name="telefono" value="<?php echo $row['Telefono']; ?>" required><br>

                <label for="correo">Correo:</label>
                <input type="email" id="correo" name="correo" value="<?php echo $row['Correo']; ?>" required><br>

                <label for="contraseña">Contraseña:</label>
                <input type="text" id="contraseña" name="contraseña" value="<?php echo $row['Contrasena']; ?>" required><br>

                <label for="rol_id">Rol ID:</label>
                <input type="text" id="rol_id" name="rol_id" value="<?php echo isset($row['Rol_id']) ? $row['Rol_id'] : ''; ?>" required><br>

                <input type="submit" value="Guardar Cambios">
            </form>

            <?php
        } else {
            echo "No se encontró ningún usuario con esa identificación.";
        }
    }

    $conn->close();
    ?>
    <footer>
        <p>PCC &copy; 2024.</p>
    </footer>
</body>
</html>
