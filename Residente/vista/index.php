<?php
include 'conexion.php';

$conn = conectarBD();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Usuario</title>
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
                <img src="../../img/user-regular-24 (1).png" alt="" class="dropbtn" onclick="toggleDropdown()">
                <div class="dropdown-content" id="myDropdown"></div>
            </div>
            <script src="script.js"></script>
        </div>
    </nav>
</header>
<h2>Consulta de Usuario</h2>

<form method="POST" action="">
    <label for="id">Ingrese su identificación:</label>
    <input type="text" id="id" name="id" required>
    <input type="submit" value="Consultar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $sql = "SELECT * FROM users WHERE ID = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>Tipo Documento</th>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Contraseña</th>
                    <th>Rol ID</th>
                    <th>Acción</th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            $masked_password = str_repeat('*', strlen($row['Contrasena']));

            echo "<tr>
                    <td>" . $row["Tipo_Documento"] . "</td>
                    <td>" . $row["ID"] . "</td>
                    <td>" . $row["Nombre"] . "</td>
                    <td>" . $row["Apellido"] . "</td>
                    <td>" . $row["Telefono"] . "</td>
                    <td>" . $row["Correo"] . "</td>
                    <td>" . $masked_password . "</td> 
                    <td>" . $row['Rol_id'] . "</td>
                    <td>
                        <form method='POST' action='editar.php'>
                            <input type='hidden' name='id' value='" . $row["ID"] . "'>
                            <input type='submit' value='Editar'>
                        </form>
                    </td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "No se encontró ningún usuario con esa identificación.";

        // Mostrar select con todos los usuarios
        $sql_all_users = "SELECT ID, Nombre, Apellido FROM users";
        $all_users_result = $conn->query($sql_all_users);

        if ($all_users_result->num_rows > 0) {
            echo "<h3>Seleccione un usuario:</h3>";
            echo "<form method='POST' action=''>";
            echo "<select name='user_id'>";
            while ($user = $all_users_result->fetch_assoc()) {
                echo "<option value='" . $user['ID'] . "'>" . $user['Nombre'] . " " . $user['Apellido'] . "</option>";
            }
            echo "</select>";
            echo "<input type='submit' value='Consultar Usuario'>";
            echo "</form>";
        } else {
            echo "No hay usuarios disponibles.";
        }
    }
}

if (isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];

    $sql_user = "SELECT * FROM users WHERE ID = '$user_id'";
    $user_result = $conn->query($sql_user);

    if ($user_result->num_rows > 0) {
        // Mostrar detalles del usuario seleccionado
        echo "<table border='1'>
                <tr>
                    <th>Tipo Documento</th>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Contraseña</th>
                    <th>Rol ID</th>
                </tr>";

        while ($row = $user_result->fetch_assoc()) {
            $masked_password = str_repeat('*', strlen($row['Contrasena']));

            echo "<tr>
                    <td>" . $row["Tipo_Documento"] . "</td>
                    <td>" . $row["ID"] . "</td>
                    <td>" . $row["Nombre"] . "</td>
                    <td>" . $row["Apellido"] . "</td>
                    <td>" . $row["Telefono"] . "</td>
                    <td>" . $row["Correo"] . "</td>
                    <td>" . $masked_password . "</td> 
                    <td>" . $row['Rol_id'] . "</td>
                </tr>";
        }

        echo "</table>";
    }
}

$conn->close();
?>
<footer>
    <p>PCC &copy; 2024.</p>
</footer>
</body>
</html>
