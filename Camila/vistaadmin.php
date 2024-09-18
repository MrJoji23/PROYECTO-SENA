
<?php
include('conexion.php'); 
$enlace = conexxion();

if ($enlace) {
    // Si se ha enviado una búsqueda, filtra los resultados
    if (isset($_POST['busqueda']) && !empty($_POST['busqueda'])) {
        $busqueda = mysqli_real_escape_string($enlace, $_POST['busqueda']);
        $sql = "SELECT * FROM users WHERE Nombre LIKE '%$busqueda%' OR Apellido LIKE '%$busqueda%' OR ID LIKE '%$busqueda%'";
    } else {
        // Consulta para obtener todos los usuarios si no hay búsqueda
        $sql = "SELECT * FROM users";
    }

    $consulta = mysqli_query($enlace, $sql);

    if (!$consulta) {
        echo "ERROR EN LA CONSULTA: " . mysqli_error($enlace);
    }

    mysqli_close($enlace);
} else {
    echo "ERROR AL CONECTAR LA BASE DE DATOS";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estiloadmin.css" />
    <link rel="stylesheet" type="text/css" href="estiloencabezado.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="confirmadm.js" defer></script>
    <title>RESIDENTES ANTURIO</title>
</head>
<body>
    <header>
        <div class="lista">
            <div class="logo--tittle">
                <img src="PCC.jpg" alt="Logo">
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
                    <img src="user-regular-24 (1).png" alt="Usuario" class="dropbtn" onclick="toggleDropdown()"> Administrador
                    <div class="dropdown-content" id="myDropdown">
                    </div>
                </div>
               
            </nav>
        </div>
    </header>

    <div class="caja">
        <div class="crear-usuario">
            <form action="insertaruser.php" method="POST" onsubmit="return validar()">
                <h1>CREAR USUARIO</h1>
                <label for="documento">Tipo de Documento:</label>
                <select name="opcion" id="opcion">
                    <option value="op">Seleccione un Tipo:</option>
                    <option value="CC">C.C</option>
                    <option value="PPT">P.P.T</option>
                    <option value="CE">C.E</option>
                </select><br><br>

                <label for="documento">Documento:</label>
                <input type="text" name="id" autocomplete="off"><br><br>

                <label for="nombre">Nombres:</label>
                <input type="text" name="nombre" autocomplete="off"><br><br>

                <label for="apellido">Apellidos:</label>
                <input type="text" name="ape" autocomplete="off"><br><br>

                <label for="telefono">Telefono:</label>
                <input type="text" name="telefono" autocomplete="off"><br><br>

                <label for="correo">Correo:</label>
                <input type="email" name="correo" autocomplete="off"><br><br>

                <label for="contraseña">Contraseña:</label>
                <input type="password" name="contra" autocomplete="off"><br><br>

                <label for="documento">Rol:</label>
                <select name="opcion2" id="opcion2"><br>
                    <option value="0">Seleccione una opción</option><br>
                    <option value="3">Residente</option><br>
                    <option value="4">Visitante</option><br>
                    <option value="2">Guardia de seguridad</option><br>
                    <option value="1">Administración</option><br>
                </select><br><br>

                <input type="submit" value="Guardar">
            </form>
        </div>

        <!-- Búsqueda -->
        <div class="search-container">
            <form action="vistaadmin.php" method="POST">
                <input type="text" name="busqueda" class="busqueda" placeholder="Buscar por nombre, apellido o documento...">
                <input type="submit" class="buscar" value="Buscar">
            </form>
        </div>

        <!-- Tabla de usuarios -->
        <div class="usuarios-registrados">
            <br><h2>USUARIOS REGISTRADOS</h2>
            <table>
                <thead>
                    <tr>
                        <th>Tipo de Documento</th>
                        <th>Numero de Documento</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Contraseña</th>
                        <th>Tipo de Usuario</th>
                        <th>Actualizar Usuario</th>
                        <th>Eliminar Usuario</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($consulta)) : ?>
                        <?php while ($fila = mysqli_fetch_array($consulta)): ?>
                            <tr>
                                <td><?= htmlspecialchars($fila['Tipo_Documento']) ?></td>
                                <td><?= htmlspecialchars($fila['ID']) ?></td>
                                <td><?= htmlspecialchars($fila['Nombre']) ?></td>
                                <td><?= htmlspecialchars($fila['Apellido']) ?></td>
                                <td><?= htmlspecialchars($fila['Telefono']) ?></td>
                                <td><?= htmlspecialchars($fila['Correo']) ?></td>
                                <td><?= htmlspecialchars($fila['Contrasena']) ?></td>
                                <td><?= htmlspecialchars($fila['Rol_id']) ?></td>
                                <td><a href="modificar.php?id=<?= htmlspecialchars($fila['ID']) ?>">Editar</a></td>
                                <td><a href="eliminaruser.php?id=<?= htmlspecialchars($fila['ID']) ?>">Eliminar</a></td>
                            </tr>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>  
</body>
</html>
