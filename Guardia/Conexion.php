<?php
    function Conexion(){
            $enlace = mysqli_connect("localhost","root","");
            if (!$enlace) {
                exit;
            }
            $BaseDatos=mysqli_select_db($enlace,"pcc");
            if (!$BaseDatos){
                exit;
            }
            return $enlace;
            
            }
?>