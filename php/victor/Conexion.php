<?php
    function MiConexion(){
            $enlace = mysqli_connect("localhost","root","");
            if (!$enlace) {
                exit;
            }
            $BaseDatos=mysqli_select_db($enlace,"finanzas");
            if (!$BaseDatos){
                exit;
            }
            return $enlace;
            
            }
?>