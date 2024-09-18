<?php
function conexion(){
    $database = "asd";
    $user = 'root';
    $password = '';

    try {
        $con = new PDO('mysql:host=127.0.0.1;dbname='.$database, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        return $con;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return null;
    }
}
?>