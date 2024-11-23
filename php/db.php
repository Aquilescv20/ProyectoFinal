<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "masmotos";
$dataport = "3307";


$conexion = mysqli_connect($host, $user, $password, $database,$dataport);
if(!$conexion){
echo "No se realizo la conexion a la basa de datos, el error fue:".
mysqli_connect_error() ;


}

?>