<?php
  require_once("conexion.php");
  $Mienlace=MiConexion();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PCC</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script> <!-- ICONOS  --> 
<!--  --> 
</head>
<body>
    <form action="" method="post">
    <header>
        <div class="lista">
            <div class="logo--tittle">
            <img src="img/PCC.jpg" alt="">
            <h1>Parquea con confianza</h1>
            </div>
        <nav>
            <div class="list--menu">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="./FAQ/preguntas.html">FAQ</a></li>
                </ul>
            </div>
                <div class="dropdown">
                    <img src="img/user-regular-24 (1).png" alt=""class="dropbtn" onclick="toggleDropdown()"> 
                    <div class="dropdown-content" id="myDropdown">
                        <a href="Camila/iniciosesion.php">Iniciar sesion</a>
                        <a href="./Registro_general/registro_participantes.html">Registrar</a>
                        

                    </div>
                </div>
                <script src="script.js"></script>
        </div>
        
        </nav>
    </header>

    <section>
        <h2>Bienvenidos a PCC</h2>
     <div class="row">
        <div class="info--we">
            <img src="img/about.png" alt="">
        <h3>Nosotros</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel rem tempora id dignissimos quae excepturi placeat nemo distinctio, doloremque iure odit, amet cumque. Fuga sit esse adipisci et delectus veritatis.</p><br>
        </div>

        <div class="info--goals">
            <img src="img/goals.png" alt="">
        <h3>Objetivos</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi, et quidem alias perferendis, ea quo temporibus amet fuga omnis quos culpa voluptatem ipsum. Ab, doloremque pariatur reprehenderit numquam adipisci cum.</p><br>
        </div>

        <div class="info--contac">
            <img src="assets/contact.svg" alt="">
       <h3>Contacto</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt similique quas, ducimus repudiandae in quae. Ut veniam error blanditiis modi iste tenetur, accusamus, eveniet quos sequi doloribus corporis quidem fugit?</p><br>
        </div>

        <div class="info--system">
            <img src="assets/system.svg" alt="">
        <h3>SISTEMA DE PARQUEO</h3>
        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam facilis officia doloribus fuga, minus eos? Quaerat maiores architecto quisquam debitis, amet magni illum quo omnis quos quae officia totam deleniti.</P><br>
        </div>

    </div>

    </section>
    <footer>
        <p>PCC &copy; 2024.</p>
    </footer>
    </form>
</body>
</html>



